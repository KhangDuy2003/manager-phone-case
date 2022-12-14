<?php
class accountmodel {
    private $table = "registration";
    private $connection;


    private $username;
    private $address;
    private $email;
    private $phone;
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($Username) {
        $this->username = $Username;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($Email) {
        $this->email = $Email;
    }
    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($Phone) {
        $this->phone = $Phone;
    }


    public function __construct($connection) {
		$this->connection = $connection;
    }

 
    public function save(){

        $consulta = $this->connection->prepare("INSERT INTO phonecase (name,price,value,description, image)
                                        VALUES (:name,:price,:value,:description, :image)");
        $consulta->execute(array(
            "name" => $this->name,
            "price" => $this->price,
            "value" => $this->value,
            "description" => $this->description,
            "image" => $this->image
        ));
        $this->connection = null;

        return $save;
    }
    
    public function login(){
        $Username = $_POST["username"];
        $password = md5($_POST["password"]);

        $consulta = $this->connection->prepare("SELECT id,role FROM registration where username = '$Username' and password = '$password' ");
        $consulta->execute();
        /* Fetch all of the remaining rows in the result set */
        $result = $consulta->fetchAll();
        $this->connection = null; //cierre de conexión
        $count = count($result);
        $_SESSION['USERNAME'] =  $Username;
        
        if ($count > 0) {
            session_start();
            $_SESSION['ROLE'] = $result[0]["role"];
            $cookie_name = "USERNAME";
            $cookie_value = $Username;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            $cookie_name = "ROLE";
            $cookie_value = $result[0]["role"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                    
            // echo '<script>alert("Đăng nhậ    p thành công")</script>';
            require_once __DIR__ . "/../view/home.php";
            }
            else {
           
            echo '<script>alert("Đăng nhập thất bại")</script>';
            require_once __DIR__ . "/../view/home.php";
            }
    }
    public function profile(){
        
        if($_GET['profile'] !== ''){
                $username = $_GET['profile'];
                $consulta = $this->connection->prepare("SELECT username,address,phone,email FROM registration where username = '$username'");
                $consulta->execute();
                $result = $consulta->fetchAll();
                $this->connection = null; //cierre de conexión
                return $result[0];
        }else{
            echo '<script>alert("Vui lòng đăng nhập")</script>';
            require_once __DIR__ . "/../view/login.php";
            return null;

        }
    }
    public function getAllUser(){
        $consulta = $this->connection->prepare("SELECT id,username,address,phone,email,role FROM registration");
        $consulta->execute();
        $result = $consulta->fetchAll();
        $this->connection = null; //cierre de conexión
        return $result;
        
    }
    public function delete($id){
        $sql = "DELETE FROM registration WHERE id=$id";
        $consulta = $this->connection->prepare($sql);
        $consulta->execute();
        if($consulta == true){
            echo '<script>alert("Delete thành công")</script>';
            $_GET['route'] = 'USER';
            require_once __DIR__ . '/../view/admin.php'; 
        }
        else{
            echo '<script>alert("Delete thất bại, vui lòng kiểm tra lại")</script>';
            $_GET['route'] = 'USER';
            require_once __DIR__ . '/../view/admin.php';
        }
    }
    public function editGet($id){
        $consulta = $this->connection->prepare("SELECT id,username,address,phone,email,password,role FROM registration where id =$id ");
        $consulta->execute();
        $result = $consulta->fetchAll();
        $this->connection = null; //cierre de conexión
        return $result[0];
    }
    
    
    public function editPost(){
        $Username = $_POST["username"];
        $email =$_POST["email"];
        $address = $_POST["address"];
        $phone=  $_POST["phone"];
        $role=  $_POST["role"];
        $id=  $_POST["id"];
        try{
            $data = [
                'username' => $Username,
                'email' => $email,
                'address' => $address,
                'phone' => $phone,
                'role' => $role,
                'id' => $id
            ];
            $sql = "UPDATE registration SET username=:username, email=:email,address=:address,phone=:phone, role=:role WHERE id=:id";
            $consulta= $this->connection->prepare($sql);
            $consulta->execute($data);
           
            $this->connection = null;
            if($consulta == true){
                echo '<script>alert("Update thành công")</script>';
                $_GET['route'] = 'USER';
                require_once __DIR__ . '/../view/admin.php';
            }
            else{
                echo '<script>alert("Update thất bại, vui lòng kiểm tra lại")</script>';
                $_GET['route'] = 'USER';
                require_once __DIR__ . '/../view/admin.php';
                }
            }
        catch (Exception $e) {
            echo '<script>alert("Update thất bại,' . $e -> getMessage() . '")</script>';
            $_GET['route'] = 'USER';
            require_once __DIR__ . '/../view/admin.php';
        }
        
    }

    public function Register(){
        $Username = $_POST["username"];
        $password = md5($_POST["password"]);
        $email =$_POST["email"];
        $address = $_POST["address"];
        $phone=  $_POST["phone"];
        $role=  "USER";
        try{
            $consultaName = $this->connection->prepare("SELECT username FROM registration where username = '$Username' ");
            $consultaName->execute();
            $resultName = $consultaName->fetchAll();
           if(count($resultName) > 0){
                echo '<script>alert("User name: '. $Username .'  exist")</script>';
                    require_once __DIR__ . "/../view/register.php";
           }else{
                $consultaEmail = $this->connection->prepare("SELECT username FROM registration where email = '$email'");
                $consultaEmail->execute();
                $resultEmail = $consultaEmail->fetchAll();
                if(count($resultEmail) > 0){
                    echo '<script>alert("Email : '. $email .'  exist")</script>';
                        require_once __DIR__ . "/../view/register.php";
                }else{
                        $consulta = $this->connection->prepare("INSERT INTO registration (username, password, email, address, phone, role)
                        VALUES (:username,:password,:email,:address, :phone,:role)");
                        $consulta->execute(array(
                        "username" => $Username,
                        "password" => $password,
                        "email" => $email,
                        "address" => $address,
                        "phone" => $phone,
                        "role" => $role
                        ));
                        $this->connection = null;
                        if($consulta == true){
                            echo '<script>alert("Đăng ký thành công")</script>';
                            require_once __DIR__ . "/../view/login.php";
                        } 
                        else{
                            echo '<script>alert("Đăng ký thất bại, vui lòng kiểm tra lại")</script>';
                            require_once __DIR__ . "/../view/register.php";
                        
                        }
                    }
            }
        }
        catch (Exception $e) {
            echo '<script>alert("Đăng ký thất bại,' . $e -> getMessage() . '")</script>';
            require_once __DIR__ . "/../view/register.php";
        }
    }
  
}
?>
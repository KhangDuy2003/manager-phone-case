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

        if ($count > 0) {
            session_start();
            $_SESSION['ROLE'] = $result[0]["role"];
            
            $_SESSION['USERNAME'] =  $Username;
            $cookie_name = "USERNAME";
            $cookie_value = $Username;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                    
            echo '<script>alert("Đăng nhập thành công")</script>';
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
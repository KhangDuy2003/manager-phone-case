<?php
class PhoneCaseModel {
    private $table = "phonecase";
    private $connection;

    private $id;
    private $name;
    private $price;
    private $value;
    private $description;
    private $image;

    public function __construct($connection) {
		$this->connection = $connection;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->Image = $image;
    }
    
    public function getName() {
        return $this->nombre;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description= $description;
    }
    
    public function getAll(){

        $consulta = $this->connection->prepare("SELECT id,name,price,value,description, image FROM phonecase");
        $consulta->execute();
        /* Fetch all of the remaining rows in the result set */
        $resultados = $consulta->fetchAll();
        $this->connection = null; //cierre de conexión
        return $resultados;
    }
    public function getAllByProductName($keySeaching){

        $consulta = $this->connection->prepare("SELECT id,name,price,value,description, image FROM phonecase where name like '%$keySeaching%'");
        $consulta->execute();
        /* Fetch all of the remaining rows in the result set */
        $resultados = $consulta->fetchAll();
        $this->connection = null; //cierre de conexión
        return $resultados;
    }
    public function deletePhoneCase($id){
        $sql = "DELETE FROM phonecase WHERE id=$id";
        $consulta = $this->connection->prepare($sql);
        $consulta->execute();
        if($consulta == true){
            echo '<script>alert("Delete thành công")</script>';
            $_GET['route'] = 'PHONE_CASE';
            require_once __DIR__ . '/../view/admin.php';
        }
        else{
            echo '<script>alert("Delete thất bại, vui lòng kiểm tra lại")</script>';
            $_GET['route'] = 'PHONE_CASE';
            require_once __DIR__ . '/../view/admin.php';
        }
    }
    public function editPost(){
        $name = $_POST["name"];
        $price =$_POST["price"];
        $value = $_POST["value"];
        $description=  $_POST["description"];
        $image=  $_POST["image"];
        $id=  $_POST["id"];
        try{
            $data = [
                'name' => $name,
                'price' => $price,
                'value' => $value,
                'description' => $description,
                'image' => $image,
                'id' => $id
            ];
            $sql = "UPDATE phonecase SET name=:name, price=:price,value=:value,description=:description, image=:image WHERE id=:id";
            $consulta= $this->connection->prepare($sql);
            $consulta->execute($data);
           
            $this->connection = null;
            if($consulta == true){
                echo '<script>alert("Update thành công")</script>';
                $_GET['route'] = 'PHONE_CASE';
            require_once __DIR__ . '/../view/admin.php';
            }
            else{
                echo '<script>alert("Update thất bại, vui lòng kiểm tra lại")</script>';
                $_GET['route'] = 'PHONE_CASE';
            require_once __DIR__ . '/../view/admin.php';
                }
            }
        catch (Exception $e) {
            echo '<script>alert("Update thất bại,' . $e -> getMessage() . '")</script>';
            $_GET['route'] = 'PHONE_CASE';
            require_once __DIR__ . '/../view/admin.php';
        }
    }
    
    public function getPhoneCaseById($id){

        $consulta = $this->connection->prepare("SELECT id,name,price,value,description, image FROM phonecase where id = $id");
        $consulta->execute();
        /* Fetch all of the remaining rows in the result set */
        $resultados = $consulta->fetchAll();
        $this->connection = null; //cierre de conexión
        return $resultados[0];

    }
}
?>
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
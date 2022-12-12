<?php
class Connecter{
    private $driver;
    private $host, $user, $pass, $database, $charset;
  
    public function __construct() {
        $this->driver="mysql";
        $this->host="localhost";
        $this->user="root";
        $this->pass="";
        $this->database="shop_phone_case";
        $this->charset="utf8";
    }
    
    public function connection(){

        $bbdd = $this->driver .':host='. $this->host .  ';dbname=' . $this->database . ';charset=' . $this->charset;

        //$bbdd = ' mysql:host=localhost;dbname=mvc1;charset=utf8';
        try {
            $connection = new PDO($bbdd, $this->user, $this->pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            throw new Exception('Can not connect to the server');
        }
    }

}
?>
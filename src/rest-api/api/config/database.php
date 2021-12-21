<?php
class Database {
    
    // укажите свои учетные данные базы данных 
    private $host = "bd";
    private $db_name = "api_db";
    private $username = "user";
    private $password = "password";
    public $conn;

    // получаем соединение с БД 
    public function getConnection(){

        $this->conn = null;

        try {
            $conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
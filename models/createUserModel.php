<?php
require "connection.php";
class Create{
    private $connect;
    public function __construct(){
        $this->connect = Connection::getConnection();
    }

    public function verifyIfUserExists($username){
        $query = "SELECT username FROM users WHERE username = ?";

        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(1,$username);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result && isset($result['username'])) {
            return $result['username'];
        } else {
            return false;
        }
    }

    public function verifyEmail($email){
        $query = "SELECT email FROM users WHERE email = ?";

        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(1,$email);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result && isset($result['email'])) {
            return $result['email'];
        } else {
            return false;
        }
    }

    public function verifyPhone($phone){
        $query = "SELECT telefono FROM users WHERE telefono = ?";

        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(1,$phone);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result && isset($result['telefono'])) {
            return $result['telefono'];
        } else {
            return false;
        }
    }

    public function addUserToDataBase($username, $password, $default_role, $email, $phone) {
        $query = "INSERT INTO users (username, pasword, role_id, email, telefono) VALUES (?, ?, ?, ?, ?)";
    
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $password);
        $stmt->bindParam(3, $default_role);
        $stmt->bindParam(4, $email);
        $stmt->bindParam(5, $phone);
        $stmt->execute();
    
        return true; // éxito de la inserción
    }
    
}

?>
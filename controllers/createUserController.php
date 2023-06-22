<?php
require "../models/createUserModel.php";
class NewUserController{
    private $createUserModel;
    public function __construct(){
        $this->createUserModel = new Create();
    }
    public function createUser(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['user'];
            $password = md5($_POST['pass']);
            $default_role = 2;
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            
            //$hash_pass = password_hash($password, PASSWORD_DEFAULT);
            $confirm_password = md5($_POST['confirm_pass']);

            $verifyUser = $this->createUserModel->verifyIfUserExists($username);
            $verifyEmail = $this->createUserModel->verifyEmail($email);
            $verifyPhone = $this->createUserModel->verifyPhone($phone);
            
            //$newUser = $this->createUserModel->addUserToDataBase($username,$password,$default_role,$email,$phone);
            //var_dump($complete);
           // var_dump($username);
            //var_dump($verifyUser);
            /*do{
                $username = $_POST['user'];
                if($username === $verifyUser){
                   // var_dump($complete);
                    $var1 = "hola";
                    var_dump($var1);
                    echo json_encode(array('success'=>1));
                    //$complete = false;
                     //break;
                }else{
                    $var2 = "adios";
                    var_dump($var2);
                    $complete = true;
                    //$this->createUserModel->addUserToDataBase($username,$password,$default_role,$email,$phone);
                    //echo json_encode(array('success'=>0));
                }
            }while($complete==false);
            echo var_dump($complete);
            $this->createUserModel->addUserToDataBase($username,$password,$default_role,$email,$phone);
            echo json_encode(array('success'=>0));*/
        }
    }
}
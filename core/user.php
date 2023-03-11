<?php include 'database.php' ?>


<?php

class user extends database{

    public function register($username,$email,$password){
    
    $sql = "INSERT INTO user (username, email , pass)
    VALUES ('$username', '$email', '$password')";
    $this->exe($sql);

    }

    
    public function checkUser($username,$email){
        $sql ="SELECT * FROM user WHERE username = '$username' OR email ='$email' ";
        return $this->fetch($sql);

    } 

    public function checkOneUser($username,$password){
        $pass = md5($password);
        $sql ="SELECT * FROM user WHERE username = '$username' AND pass = '$pass' ";
        return $this->fetch($sql);

    } 
}



?>
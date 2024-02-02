<?php

class Events{

    private $id;
    private $name;
    private $location;
    private $dita;
    private $mainf;


    function __construct($id,$name,$location,$dita,$mainf){
           
            
            $this->id = $id;
            $this->name = $name;
            $this->location = $location;
            $this->dita=$dita;
            $this->mainf=$mainf;
    }
    

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getLocation(){
        return $this->location;
    }
    function getDita(){
        return $this->dita;
    }
    function getMainf(){
        return $this->mainf;
    }

}
include_once 'C:\xampp\htdocs\zTmijat\MMA-Event-Tracker\Databaza.php';

class Userdb{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user){

        $conn = $this->connection;

        
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $role=$user->getRole();

        $sql = "INSERT INTO users (username,email,password,role) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$username,$email,$password,$role]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM users";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserByUsername($username){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE username='$username'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    // function updateUser($id,$name,$surname,$email,$username,$password){
    //      $conn = $this->connection;

    //      $sql = "UPDATE user SET name=?, surname=?, email=?, username=?, password=? WHERE id=?";

    //      $statement = $conn->prepare($sql);

    //      $statement->execute([$name,$surname,$email,$username,$password,$id]);

    //      echo "<script>alert('update was successful'); </script>";
    // } 

    function deleteUser($username){
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE username=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$username]);

        echo "<script>alert('delete was successful'); </script>";
   } 
   function makeAdmin($username){
        $conn = $this->connection;

        $sql = "UPDATE users  
        SET role = 'admin'
        WHERE username = ?";

        $statement = $conn->prepare($sql);

        $statement->execute([$username]);

        echo "<script>alert('change to admin was successful'); </script>";

   }
   function removeAdmin($username){
    $conn = $this->connection;

    $sql = "UPDATE users  
    SET role = 'user'
    WHERE username = ?";

    $statement = $conn->prepare($sql);

    $statement->execute([$username]);

    echo "<script>alert('change to admin was successful'); </script>";

}

}

 $usera=new Userdb;
 echo sizeof($usera->getAllUsers());
// $redol=$usera->getUserByUsername("Redol");
// $useri=$usera->getUserByUsername("charlie333");
// echo $useri[3] .'<br/>';


// echo $useri[3] .'<br/>';
// $red=new User('Redon','redon42','dasda','user');

// $usera->insertUser($red);
$userat=$usera->getAllUsers();
foreach ($userat as $user){
    echo $user[0].' '. $user[1].' '. $user[2].' '. $user[3]. '<br/>';
}
?>
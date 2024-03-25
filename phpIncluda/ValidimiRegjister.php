<?php
include_once 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\usera.php';

if(isset($_POST['registerBtn'])){
    
        $username = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        $user  = new User($username,$email,$password,'user');
        $usera= new Userdb();

        $usera->insertUser($user);

        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['pass'] = $password;
        $_SESSION['role'] = 'user'; // Assuming all newly registered users have the 'user' role
        $_SESSION['loginTime'] = date("H:i:s");
        
        echo
          "<script>
            document.location='index.php'
          </script>";
        exit();
    }
  ?>
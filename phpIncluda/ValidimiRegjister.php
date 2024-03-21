<?php
include_once 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\usera.php';

// if(isset($_POST['loginBtn'])){
//     echo "<script>alert(validume'1111);</script>";
//     //validate
//     $username = $_POST['username'];
//     $password = $_POST['password'];

   
//     $i=0;
    
//     $usera= new Userdb();
    
    
    
//     foreach($usera as $user){
//       if($user[0] == $username && $user[2] == $password){
//         session_start();
  
//         $_SESSION['username'] = $user[0];
//         $_SESSION['password'] = $user[2];
//         $_SESSION['role'] = $user[3];
//         $_SESSION['loginTime'] = date("H:i:s");
//         echo "<script>alert(validume');</script>";
//         header("location:usera.php");
//         exit();
//       }else{
//         $i++;
//         if($i == sizeof($usera->getAllUsers())) {
//           echo "Incorrect Username or Password!";
          
//           exit();
//         }
//       }
//     }
// }

if(isset($_POST['registerBtn'])){
    
        $username = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        $user  = new User($username,$email,$password,'user');
        $usera= new Userdb();

        $usera->insertUser($user);


    }

    
   

  ?>
  

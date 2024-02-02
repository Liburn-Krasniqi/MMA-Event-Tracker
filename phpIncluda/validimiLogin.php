<?php



if(isset($_POST['loginBtn'])){
    
    
    
    $username = $_POST['username'];
    $password = $_POST['pass'];
    
    include_once 'C:\xampp\htdocs\zTmijat\MMA-Event-Tracker\phpIncluda\usera.php';
    $i=0;
    
    
    $users= new Userdb();
    $usera=$users->getAllUsers();
    
    
    
    foreach($usera as $user){
      
      if($user[0] == $username && $user[2] == $password){
        session_start();
  
        $_SESSION['username'] = $user[0];
        $_SESSION['pass'] = $user[2];
        $_SESSION['role'] = $user[3];
        $_SESSION['loginTime'] = date("H:i:s");
        
        header("location:C:\xampp\htdocs\zTmijat\MMA-Event-Tracker\index.php");
        exit();
      }else{
        $i++;
        if($i == sizeof($usera)) {
          echo "Incorrect Username or Password!";
          
          exit();
        }
      }
    }
}


?>
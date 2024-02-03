<?php



if(isset($_POST['creatE'])){
    
    
    
    $name = $_POST['name'];
    $location = $_POST['location'];
    $dita = $_POST['dita'];
    $mainf = $_POST['mainf'];
    $eventi=new Events(0,$name,$location,$dita,$mainf);
    
    include_once 'C:\xampp\htdocs\zTmijat\MMA-Event-Tracker\phpIncluda\eventat.php';
    
    $eventi=new Events(0,$name,$location,$dita,$mainf);
   
    
    $eventat= new Eventdb();
    $eventat->insertEvent($eventi);
    
    
    
    
    exit();
}


?>
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
include_once 'C:\xampp\htdocs\zTmijat\MMA-Event-Tracker\phpIncluda\usera.php';

class Eventdb {
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }
    function getAllEvents(){
        $conn = $this->connection;
    
        $sql = "SELECT * FROM events";
    
        $statement = $conn->query($sql);
        $events = $statement->fetchAll();
    
        return $events;
    }
    function deleteEvent($id){
        $conn = $this->connection;

        $sql = "DELETE FROM events WHERE eventId=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   }
   function insertEvent($event){

    $conn = $this->connection;

    
    $name = $event->getName();
    $location = $event->getLocation();
    $dita = $event->getDita();
    $mainf=$event->getMainf();

    $sql = "INSERT INTO events (name,dita,location,mainF) VALUES (?,?,?,?)";

    $statement = $conn->prepare($sql);

    $statement->execute([$name,$dita,$location,$mainf]);

    echo "<script> alert('User has been inserted successfuly!'); </script>";

}
    function getFights($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM fights WHERE eventId='$id'";

        $statement = $conn->query($sql);
        $fights = $statement->fetchAll();

        return $fights;
}

}
            // $event=new Eventdb();
            //  $fights=$event->getFights(1);
             
            //  foreach($fights as $f){
            //     echo '--------------'. '<br>';
            //      echo $f[0] . '<br>'
            //      .$f[1] . '<br>'.$f[2] . '<br>'.$f[3] . '<br>'.$f[4] . '<br>'
            //      .$f[5] . '<br>'.$f[6] . '<br>'.$f[7] . '<br>'.$f[8] . '<br>'
            //      .$f[9] . '<br>'.$f[10] . '<br>'.$f[11] . '<br>'.$f[12] . '<br>'
                 
            //      ;
            //  }
?>
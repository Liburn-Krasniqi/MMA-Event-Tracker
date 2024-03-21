<?php

class Article{

    private $title;
    private $description;
    private $thumbnail;


    function __construct($title,$description,$thumbnail){
            $this->title = $title;
            $this->description = $description;
            $this->thumbnail = $thumbnail;
    }
    

    function getTitle(){
        return $this->title;
    }
    function getDescription(){
        return $this->description;
    }
    function getThumbnail(){
        return $this->thumbnail;
    }
}
include 'C:\xampp\htdocs\MMA-Event-Tracker\Databaza.php';

class Articledb{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertArticle($Article){

        $conn = $this->connection;

        
        $title = $article->getTitle();
        $description = $article->getDescription();
        $thumbnail = $article->getThumbnail();

        $sql = "INSERT INTO articles (description,title,thumbnail) VALUES (?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$description,$title,$thumbnail]);

        echo "<script> alert('article has been inserted successfuly!'); </script>";

    }

    function getAllArticles(){
        $conn = $this->connection;

        $sql = "SELECT * FROM articles";

        $statement = $conn->query($sql);
        $articles = $statement->fetchAll();

        return $articles;
    }

    // function getUserByUsername($description){
    //     $conn = $this->connection;

    //     $sql = "SELECT * FROM articles WHERE description='$description'";

    //     $statement = $conn->query($sql);
    //     $article = $statement->fetch();

    //     return $article;
    // }

    // function updateUser($id,$name,$surname,$title,$description,$thumbnail){
    //      $conn = $this->connection;

    //      $sql = "UPDATE article SET name=?, surname=?, title=?, description=?, thumbnail=? WHERE id=?";

    //      $statement = $conn->prepare($sql);

    //      $statement->execute([$name,$surname,$title,$description,$thumbnail,$id]);

    //      echo "<script>alert('update was successful'); </script>";
    // } 

    function deleteArticle($title){
        $conn = $this->connection;

        $sql = "DELETE FROM articles WHERE title=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$title]);

        echo "<script>alert('delete was successful'); </script>";
   } 
   

}

 $usera=new Userdb;
 $eventet=$usera->getAllEvents();
 foreach($eventet as $eventi){
     echo $eventi[2];

 }
 echo sizeof($usera->getAllUsers());
// $redol=$usera->getUserByUsername("Redol");
// $useri=$usera->getUserByUsername("charlie333");
// echo $useri[3] .'<br/>';


// echo $useri[3] .'<br/>';
// $red=new article('Redon','redon42','dasda','article');

// $usera->insertUser($red);
$userat=$usera->getAllUsers();
foreach ($userat as $article){
    echo $article[0].' '. $article[1].' '. $article[2].' '. $article[3]. '<br/>';
}
?>
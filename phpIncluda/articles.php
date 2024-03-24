<?php

class Article{

    private $id;
    private $title;
    private $description;
    private $thumbnail;
    private $author;
    private $date;

    function __construct($id, $title, $description, $thumbnail, $author, $date) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->thumbnail = $thumbnail;
        $this->author = $author;
        $this->date = $date;
    }

    
    function getId() {
        return $this->id;
    }
    
    function setId($id) {
        $this->id = $id;
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

    function getAuthor(){
        return $this->author;
    }
    
    function setAuthor($author){
        $this->author = $author;
    }
    
    function getDate(){
        return $this->date;
    }
    
    function setDate($date){
        $this->date = $date;
    }
}

include 'C:\xampp\htdocs\MMA-Event-Tracker\Databaza.php';

class Articledb{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertArticle($article) {
        $conn = $this->connection;
        
        $title = $article->getTitle();
        $description = $article->getDescription();
        $thumbnail = $article->getThumbnail();
        $author = $article->getAuthor();
        $date = $article->getDate();

        $sql = "INSERT INTO articles (id, title, description, thumbnail, author, date) VALUES (NULL, ?, ?, ?, ?, ?)";
        
        $statement = $conn->prepare($sql);
        
        $statement->execute([$title, $description, $thumbnail, $author, $date]);
        
        echo "<script> alert('Article has been inserted successfully!'); </script>";
    }


    function getAllArticles(){
        $conn = $this->connection;

        $sql = "SELECT * FROM articles";

        $statement = $conn->query($sql);
        $articles = $statement->fetchAll();

        return $articles;
    }

    function deleteArticle($id){
        $conn = $this->connection;
    
        $sql = "DELETE FROM articles WHERE id=?";
    
        $statement = $conn->prepare($sql);
    
        $statement->execute([$id]);
    
        echo "<script>alert('Delete was successful');</script>";
    }    
   
    function updateArticle($article) {
        $conn = $this->connection;
        
        $id = $article->getId();
        $title = $article->getTitle();
        $description = $article->getDescription();
        $thumbnail = $article->getThumbnail();
        $author = $article->getAuthor();
        $date = $article->getDate();

        $sql = "UPDATE articles 
                SET title=?, description=?, thumbnail=?, author=?, date=? 
                WHERE id=?";
        
        $statement = $conn->prepare($sql);
        
        $statement->execute([$title, $description, $thumbnail, $author, $date, $id]);
        
        echo "<script> alert('Article has been updated successfully!'); </script>";
    }
}


?>
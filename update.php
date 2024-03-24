<?php
include_once 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\articles.php';

if(isset($_POST['update-btn'])){
    
    $articleId = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $thumbnail = $_POST['thumbnail'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    $article = new Article($articleId, $title, $description, $thumbnail, $author, $date);
    $articles = new Articledb();
    $articles->updateArticle($article);
    header('Location: NewsDB.php');
    exit();
}
?>

<?php
include_once 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\articles.php';

if(isset($_GET['id'])){
    $articleId = $_GET['id'];
    $articles = new Articledb();
    $articles->deleteArticle($articleId);
    header('Location: NewsDB.php');
    exit();
}
?>

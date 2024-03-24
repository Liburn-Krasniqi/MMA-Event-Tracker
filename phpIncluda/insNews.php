<?php
include_once 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\articles.php';

if(isset($_POST['create-btn'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $thumbnail = $_POST['thumbnail'];
    $author = $_POST['author']; // Assuming the author is entered via a form field
    $date = $_POST['date']; // Assuming the date is submitted manually
    
    $article = new Article(null, $title, $description, $thumbnail, $author, $date);
    $articles = new Articledb();
    $articles->insertArticle($article);

    
    echo
    "<script>
    document.location='NewsDB.php'
    </script>";
}
?>

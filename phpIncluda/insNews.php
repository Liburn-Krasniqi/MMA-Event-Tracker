<?php
include_once 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\usera.php';


if(isset($_POST['create-btn'])){
    
        $title = $_POST['title'];
        $description = $_POST['description'];
        $thumbnail = $_POST['thumbnail'];

        

        $article  = new Article($title,$description,$thumbnail);
        $articles= new Articledb();

        $articles->insertArticle($article);


    }

    
   

  ?>
  

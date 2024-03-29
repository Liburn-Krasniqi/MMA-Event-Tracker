<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AboutMain.css">
    <link rel="stylesheet" href="News.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php include 'heder.php'?>
    <?php include 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\articles.php'?>
    

    <main>

        <h1>Latest MMA News</h1>
        <!-- qitu headlines demek -->
        <div class="slider">  
            <button id="leftButton" onclick="slideRight()">
                <i class="fas fa-chevron-down"></i>
            </button>

            <div class="articles">

               <div class="article" id="article1">
                    <img src="Img/conor.jpg" alt="">
                    <h2>What is going on?!</h2>
               </div> 

               <div class="article" id="article2">
                    <img src="Img/Dana-White.jpg" alt="">
                    <h2>Dana White skiming fighters as per usual</h2>
               </div> 

               <div class="article" id="article2">
                <img src="Img/pht2.jpg" alt="">
                <h2>Bismilah</h2>
               </div> 

               <div class="article" id="article2">
                <img src="Img/pht4.jpg" alt="">
                <h2>Bismilah</h2>
               </div> 

            </div> 

            <button id="rightButton" onclick="slideLeft()">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>

        <h1>Latest</h1>
        
        <div class="small_articles">
        <?php 
            $articleConn = new Articledb();
            $articles = $articleConn->getAllArticles();
            foreach ($articles as $article) {
            echo "
            <div class='small_article'>
                <div class='top-part'>
                    <img src='Img/$article[3]' alt='article thumbnail'>
                </div>
                <hr>
                <div class='bottom-part'>
                    <h4>$article[2]</h4>
                    <p>$article[1]</p>
                </div>
            </div>
            ";
            }
        ?>

            <div class="small_article">
               <div class="top-part">
                    <img src="Img/pht2.jpg" alt=""> 
                </div>
                <hr>
                <div class="bottom-part">
                    <h4>Kuku qy qa ka ndodh!</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Nulla animi soluta similique obcaecati quidem nihil, repellatautem tempore atque! Iure, a veniam aperiam impedit qui nisiexpedita explicabo ullam magnam?</p>
                </div>
            </div>
            <!-- <div class="small_article">
                <div class="top-part">
                     <img src="Img/pht4.jpg" alt=""> 
                 </div>
                 <hr>
                 <div class="bottom-part">
                     <h4>Kuku qy qa ka ndodh!</h4>
                     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Nulla animi soluta similique obcaecati quidem nihil, repellatautem tempore atque! Iure, a veniam aperiam impedit qui nisiexpedita explicabo ullam magnam?</p>
                 </div>
             </div>

             <div class="small_article">
                <div class="top-part">
                     <img src="Img/pht3.jpeg" alt=""> 
                 </div>
                 <hr>
                 <div class="bottom-part">
                     <h4>Kuku qy qa ka ndodh!</h4>
                     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Nulla animi soluta similique obcaecati quidem nihil, repellatautem tempore atque! Iure, a veniam aperiam impedit qui nisiexpedita explicabo ullam magnam?</p>
                 </div>
             </div>

             <div class="small_article">
                <div class="top-part">
                     <img src="Img/pht2.jpg" alt=""> 
                 </div>
                 <hr>
                 <div class="bottom-part">
                     <h4>Kuku qy qa ka ndodh!</h4>
                     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Nulla animi soluta similique obcaecati quidem nihil, repellatautem tempore atque! Iure, a veniam aperiam impedit qui nisiexpedita explicabo ullam magnam?</p>
                 </div>
             </div>

             <div class="small_article">
                <div class="top-part">
                     <img src="Img/pht1.jpg" alt=""> 
                 </div>
                 <hr>
                 <div class="bottom-part">
                     <h4>Kuku qy qa ka ndodh!</h4>
                     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Nulla animi soluta similique obcaecati quidem nihil, repellatautem tempore atque! Iure, a veniam aperiam impedit qui nisiexpedita explicabo ullam magnam?</p>
                 </div>
             </div> -->

        </div>
    </main>

    <?php include 'hFooter.php' ?>
    <button id="back-to-top-btn"><i class="fa-solid fa-arrow-up"></i></button>
    <script src="app.js"></script> 
    <script src="generate-hed-fot.js" ></script>
   
</body>
</html>
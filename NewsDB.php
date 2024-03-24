<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMA-tracker</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="homepage.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
    
     
</head>


<body>
<?php include 'heder.php' ?>

<?php include 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\articles.php'?>
    <main>
        

        </div>
        <div class="UpcomingEvents">
            <h2 class="EventPreview">DashBoard</h2>
            <h2 class="EventPreview"><a href="dashboard.php">Fighter</a> </h2>
            <h2 class="EventPreview"><a href="EventDB.php">Event</a></h2>
            <h2 class="EventPreview"><a href="#">News</a></h2>
            <h2 class="EventPreview"><a href="UserDB.php">Users</a></h2>
            
    
                    </div>
                    
                    
    
                <div class="Event">
                    <h1>Create News</h1>
                    <div class="fight">
                        <form id="news-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                            <label for="name">Title:</label>
                            <input type="text" id="title" name="title">
                            
                            <label for="description">description:</label>
                            <input type="text" id="description" name="description" >
                            <label for="thumbnail">Thumbnail:</label>
                            <input type="file" id="thumbnail" name="thumbnail" ><br>
                            <label for="author">Author:</label>
                            <input type="text" id='author' name='author' >
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" >
                            
                            <input type="submit" value="Create" name="create-btn">
                        </form>
                    </div>
                        <h1>News</h1>
                        <div class="fight " style="height:auto; padding:10px; margin: 10px 0 10px 0;">
                            
                            <table>
                                <thead>
                                    <tr>
                                        <th>NewsID</th>
                                        <th>Title</th>
                                        <th>description</th>
                                        <th>Thumbnail</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <?php    

                                $articleConn = new Articledb();
                                $articles = $articleConn->getAllArticles();
                                foreach ($articles as $article){
                                    echo "
                                    <tr>
                                        
                                        <td>$article[0]</td>
                                        <td>$article[2]</td>
                                        <td>$article[1]</td>
                                        <td>$article[3]</td>
                                        <td>$article[4]</td>
                                        <td>$article[5]</td>
                                        
                                        
                                        <td class='delete-button' ><a href='delete_article.php?id=$article[0]'>Delete</a></td>
                                    </tr>
                                    ";
                                }
                                ?>

                            </table>
                        </div>
                        
                        <h1>Update News</h1>

                    <div class="fight" style="height:auto; padding:10px; margin: 10px 0 10px 0;">

                        <form id="news-update-form" action="update.php" method="post">

                            <label for="name">Id:</label>
                            <input type="text" id="id" name="id">

                            <label for="name">Title:</label>
                            <input type="text" id="title" name="title">
                            <label for="description">description:</label>
                            <input type="text" id="description" name="description" >
                            <br>
                            <label for="thumbnail">Thumbnail:</label>
                            <input type="file" id="thumbnail" name="thumbnail" >
                            <label for="author">Author:</label>
                            <input type="text" id='author' name='author' >
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" >
                            
                            <input type="submit" value="Update" name="update-btn">
                        </form>
                    </div>

                </div>
                
             
                
    
        </div>
    </main>
   <?php include 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\insNews.php'?>
   <?php include 'C:\xampp\htdocs\MMA-Event-Tracker\update.php' ?>
   
    
    <?php include 'hFooter.php' ?>
     <button id="back-to-top-btn"><i class="fa-solid fa-arrow-up"></i></button>
     <script src="generate-hed-fot.js" ></script>
     <script src="app.js"></script>
     <!-- <script>
         function deleteFighter(fighterId) {
            // Add logic to delete the fighter with the given ID
            console.log('Delete Fighter with ID:', fighterId);
        }

        function editFighter(fighterId) {
            // Add logic to edit the fighter with the given ID
            console.log('Edit Fighter with ID:', fighterId);}

     </script> -->

     <body> 
     <html>
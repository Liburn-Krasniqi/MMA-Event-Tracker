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
     <?php include '/phpincluda/usera.php'?>
     
</head>


<body>
<?php include 'heder.php' ?>

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
                    <h2>Create News</h2>
                    <div class="fight">
                        <form action="">
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
                            
                            <input type="submit" value="Create">
                        </form>
                    </div>
                        <h2>News</h2>
                        <div class="fight " style="height:auto; padding:10px;">
                            
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
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Alex pereira dahet me fm</td>
                                        <td>chama</td>
                                        <td>foto</td>
                                        <td>UFC News</td>
                                        <td>12/10/22</td>
                                        <td class="delete-button" onclick="deleteFighter(1)">Delete</td>
                                        <td class="edit-button" onclick="editFighter(1)">Edit</td>
                                    </tr>
                                    <tr>
                                        <th>NewsID</th>
                                        <th>Title</th>
                                        <th>description</th>
                                        <th>Thumbnail</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Alex pereira dahet me fm</td>
                                        <td>chama</td>
                                        <td>foto</td>
                                        <td>UFC News</td>
                                        <td>12/10/22</td>
                                        <td class="delete-button" onclick="deleteFighter(1)">Delete</td>
                                        <td class="edit-button" onclick="editFighter(1)">Edit</td>
                                    </tr>
                                    <tr>
                                        <th>NewsID</th>
                                        <th>Title</th>
                                        <th>description</th>
                                        <th>Thumbnail</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Alex pereira dahet me fm</td>
                                        <td>chama</td>
                                        <td>foto</td>
                                        <td>UFC News</td>
                                        <td>12/10/22</td>
                                        <td class="delete-button" onclick="deleteFighter(1)">Delete</td>
                                        <td class="edit-button" onclick="editFighter(1)">Edit</td>
                                    </tr>
                                    <tr>
                                        <th>NewsID</th>
                                        <th>Title</th>
                                        <th>description</th>
                                        <th>Thumbnail</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Alex pereira dahet me fm</td>
                                        <td>chama</td>
                                        <td>foto</td>
                                        <td>UFC News</td>
                                        <td>12/10/22</td>
                                        <td class="delete-button" onclick="deleteFighter(1)">Delete</td>
                                        <td class="edit-button" onclick="editFighter(1)">Edit</td>
                                    </tr>
                                    
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>

                </div>
                
             
                
    
        </div>
    </main>
   
   
    
    <?php include 'hFooter.php' ?>
     <button id="back-to-top-btn"><i class="fa-solid fa-arrow-up"></i></button>
     <script src="generate-hed-fot.js" ></script>
     <script src="app.js"></script>
     <script>
         function deleteFighter(fighterId) {
            // Add logic to delete the fighter with the given ID
            console.log('Delete Fighter with ID:', fighterId);
        }

        function editFighter(fighterId) {
            // Add logic to edit the fighter with the given ID
            console.log('Edit Fighter with ID:', fighterId);}

     </script>

     <body> 
     <html>
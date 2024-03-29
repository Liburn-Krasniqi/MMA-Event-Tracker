<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMA-tracker</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
</head>


<body>
<?php include 'heder.php' ?>

    <main>
        

        </div>
        <div class="UpcomingEvents">
            <h2 class="EventPreview">DashBoard</h2>
            <h2 class="EventPreview"><a href="#">Fighter</a> </h2>
            <h2 class="EventPreview"><a href="EventDB.php">Event</a></h2>
            <h2 class="EventPreview"><a href="NewsDB.php">News</a></h2>
            <h2 class="EventPreview"><a href="UserDB.php">Users</a></h2>
            
    
                    </div>
                    
                    
    
                <div class="Event">
                    <h1>Create Fighter</h1>
                    <div class="fight " style="height:auto; padding:10px;">
                        <form action="">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name">
                            
                            <label for="record">Record:</label>
                            <input type="text" id="record" name="record" >
                            <label for="height">Height:</label>
                            <input type="number" id="height" name="height" ><br>
                            <label for="weight">Weight:</label>
                            <input type="number" id='weight' name='weight' >
                            <label for="reach">Reach</label>
                            <input type="number" id="reach" name="reach" >
                            <input type="submit" value="Create">
                        </form>
                    </div>
                        <h1>Fighters</h1>
                        <div class="fight">
                            
                            <table>
                                <thead>
                                    <tr>
                                        <th>FighterID</th>
                                        <th>Name</th>
                                        <th>Record</th>
                                        <th>Height</th>
                                        <th>Weight</th>
                                        <th>Reach</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>20-5-3</td>
                                        <td>180</td>
                                        <td>75</td>
                                        <td>80 </td>
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
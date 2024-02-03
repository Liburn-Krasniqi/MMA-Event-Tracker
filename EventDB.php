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
<?php include 'heder.php';
        include_once 'C:\xampp\htdocs\zTmijat\MMA-Event-Tracker\phpIncluda\eventat.php';
?>

    <main>
        

        </div>
        <div class="UpcomingEvents">
            <h2 class="EventPreview">DashBoard</h2>
            <h2 class="EventPreview"><a href="dashboard.php">Fighter</a> </h2>
            <h2 class="EventPreview"><a href="#">Event</a></h2>
            <h2 class="EventPreview"><a href="NewsDB.php">News</a></h2>
            <h2 class="EventPreview"><a href="UserDB.php">Users</a></h2>
            
    
                    </div>
                    
                    
    
                <div class="Event">
                    <h2>Create Event</h2>
                    <div class="fight">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='post'>
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                            <label for="Location">Location:</label>
                            <input type="text" id="location" name="location" required><br>
                            <label for="date">Date:</label>
                            <input type="date" id='date' name='dita' required>
                            <label for="mainf">Main Fight:</label>
                            <input type="text" id='mainf' name='mainf' required>
                            
                            
                            <input type="submit" name='creatE' value="Create">
                        </form>
                    </div>
                        <h2>Event</h2>
                        <div class="fight " style="height:auto; padding:10px;">
                            
                            <table>
                                <thead>
                                    <tr>
                                        <th>EventID</th>
                                        <th>Name</th>
                                        
                                        <th>Location</th>
                                        <th>date</th>
                                        <th>Main Fight</th>
                                        
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php       
                                $event=new Eventdb;
                                $eventa=$event->getAllEvents();
                                foreach ($eventa as $event){
                                    echo "
                                <tr>
                                    
                                    <td>$event[0]</td>
                                    <td>$event[1]</td>
                                    
                                    <td>$event[2]</td>
                                    <td>$event[3]</td>
                                    <td>$event[4]</td>
                                    
                                    
                                    <td class='delete-button' ><a href='rdelEvent.php?id=$event[0]'>Delete Event</a></td>
                                    <td class='edit-button'>Edit</td>
                                </tr>
                                    
                                    ";
                                }
                                ?>
                                   
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
     
     <?php 
    include_once 'C:\xampp\htdocs\zTmijat\MMA-Event-Tracker\rinsertEvent.php';
    ?>

     <body> 
     <html>
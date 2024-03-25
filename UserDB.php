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
    <style>
        
    </style>
</head>


<body>
<?php include 'heder.php' ?>
<?php include 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\usera.php';
    include_once 'C:\xampp\htdocs\MMA-Event-Tracker\Databaza.php';
?>

    <main>
        

        </div>
        <div class="UpcomingEvents">
            <h2 class="EventPreview">DashBoard</h2>
            <h2 class="EventPreview"><a href="dashboard.php">Fighter</a> </h2>
            <h2 class="EventPreview"><a href="EventDB.php">Event</a></h2>
            <h2 class="EventPreview"><a href="NewsDB.php">News</a></h2>
            <h2 class="EventPreview"><a href="UserDB.php">Users</a></h2>
            
    
                    </div>
                    
                    
    
                <div class="Event">
                    
                   
                        <h2>Users</h2>
                        <div class="fight " style="height:auto; padding:10px;">
                            
                            <table>
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>role</th>
                                        <th>RemoveAdmin</th>
                                        <th>MakeAdmin</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                            <?php       
                                $usera=new Userdb;
                                $userat=$usera->getAllUsers();
                                foreach ($userat as $user){
                                    echo "
                                    <tr>
                                        
                                        <td>$user[0] </td>
                                        <td>$user[1]</td>
                                        <td>$user[3]</td>
                                        
                                        
                                        <td class='delete-button' ><a href='removeAdm.php?id=$user[0]'>Remove Admin</a></td>
                                        <td class='edit-button' ><a href='rmakeAdmin.php?id=$user[0]'>Make Admin</a></td>
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
     

     <body> 
     <html>
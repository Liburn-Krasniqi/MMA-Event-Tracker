
<?php
session_start();
$show="display:none;";
$login="Log in";
if(isset($_SESSION['username'])) 
     $login=$_SESSION['username'];
if(isset($_SESSION['username']))   {
    if($_SESSION['role'] == "admin"){
        $show = "display:inline;";
        
    }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
    <div class="row">
     <a href="index.php">Home</a>
    <a href="Abouti.php">About us</a>
    <a href="News.php">News</a>
    <a href="dashboard.php" id="db" style="<?php echo $show?>" >Dashboard</a>

    <a href="index.php" id="logo">FightLog</a>
    <!--
    e shkruva O per momentin masi simetrike 
    -->
    
    
    <div class="dropdown">
        <p class="dropbtn" > Search </p>
        <div class="dropdown-content" id="myDropdown">
            <a href="#">Events</a>
            <a href="#">Fighters</a>
            <a href="#">Rankings</a>
          </div>
        </div>
        <div id='darkbutoni'>
        <i id="theme-toggle">☾</i> <i id="theme-toggle-dark">☼</i> </div>
        <a href="Login.php"><?php echo $login?></a>
        
    </div> 
    </header>
</body>
</html>
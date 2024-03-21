<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AboutMain.css">
    <link rel="stylesheet" href="LoginCss.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<?php include 'heder.php' ?>

    <main id="maini">
        <div id="login-container" class="form">
            <div id="error"></div><div id="valid"></div>
            <h1>Please Login</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-control">
                    <input id="username" name="username" type="text" required>
                    <label for="username">Username</label>
                </div>
                
                
                <div class="form-control">
                    <input id="password" name="pass" type="password" required>
                    <label for="Password">Password</label>
                </div>

                <input type="submit" name="loginBtn" value="Login" class="btn" onclick="validateForm()">
                

                <p>Don't have an account? <a href="#" id="Regist-link">Register.</a></p>
            </form>
        </div>
        
        <div id="register-container" class="form">
            <div id="errorReg"></div><div id="validReg"></div>
            <h1>Please Register</h1>
            <form id="loginForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-control">
                    <input id="user" name="user" type="text" required>
                    <label for="text">Username</label>
                </div>
                <div class="form-control">
                    <input id="emailReg" name="email" type="text" required>
                    <label for="email">Email</label>
                </div>
                
                <div class="form-control">
                    <input id="passwordReg" name="password" type="password" required>
                    <label for="Password">Password</label>
                </div>
                <div class="ToS">
                    <label ><input  type="checkbox" required>Agree to the terms 
                    of service</label>

                </div>
                <input type="submit" name="registerBtn" value="Register" class="btn" onclick="validateReg()">
                
    
                <p>Already have an account? <a href="#" id="Login-link">Log in.</a></p>
            </form>
        </div>
    </main>

    <?php include 'hFooter.php' ?>
    <script src="app.js"></script> 
    <script src="generate-hed-fot.js"></script>
    <?php include 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\ValidimiRegjister.php';
    include 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\validimiLogin.php';
    ?>
</body>
</html>

<?php  
include('addUser.php');
?>

<!DOCTYPE html>
<html>
<head>
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <link rel="stylesheet" type="text/css" href="../css/general.css">
        <link rel="stylesheet" type="text/css" href="../css/room.css">
        <script src="../src/login.js"></script>

</head>
<body>

    <div id="navbar">
        <a href="home.html">Home</a>
        <a href="leaderboard.html">Leaderboard</a>
        <a href="FAQ.html">FAQ</a>
        <a href="about.html">About</a>
        <img src="../images/logo.png" height="45" style="float: right" />    
    </div>

    //username, password, confirm password, email
    <form method="POST" action = "../cgi-bin/register.php">
        <?php 
        include('errors.php'); 
        ?>

        <div id  = "reg-screen" class = "form-layout">
            <h1>
                <label class = "txt-white">Sign up</label> 
            </h1>
            <br>
            <label class = "txt-white">Username</label>
            <br>
            <input type="text" id ="reg-username" name = "username" placeholder="Enter a username"  class = "general-text" value = "<?php echo $username; ?>">
            <br><br>

            <label class = "txt-white">Email address</label>
            <br>
            <input type="email" id="reg-email" name = "email" placeholder="Enter your email address" class = "general-text" value = "<?php echo $email; ?>">
            <br><br>

            <label class = "txt-white">Password</label>
            <br>
            <input type="password" id ="reg-password" name = "password" placeholder="Create a password" class = "general-text">
            <br><br>

            <label class = "txt-white">Re-enter Password</label>
            <br>
            <input type="password" id="reg-password-confirm" name = "password_confirm" placeholder="Re-enter password" class = "general-text">
            <br><br>

            <input type="submit" value="Sign Up" name = "submit" class = "general-button">
        </div>
    </form>
</body>
</html>


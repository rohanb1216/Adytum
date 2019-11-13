<?php include_once('checkUser.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="../css/login.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <!-- <script src="../src/login.js"></script> -->

</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-sm fixed-top bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="#">
                    <img src="../images/logo.png" height="30" class="d-inline-block align-top" alt="">
                </a>
            </li>
            <li class="nav-item">
                <a href="home.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="leaderboard.html" class="nav-link">Leaderboard</a>
            </li>
            <li class="nav-item">
                <a href="FAQ.html" class="nav-link">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="about.html" class="nav-link">About</a>
            </li>
        </ul>
    </nav>

    <form action="../cgi-bin/login.php" method="POST" id="login-form">
        <?php include('errors.php'); ?>
        <div id="login" class="form-layout">
            <h1>
                <label class="txt-white heading">Login</label>
            </h1>
            <br>
            <div class="lbl">
                <label class="txt-white">Username</label>
                <br>
                <input type="text" id="username" class="tb" placeholder="username" />
            </div>
            <br>
            <div class="lbl">
                <label class="txt-white">Password</label>
                <br>
                <input type="password" id="password" name="password" class="tb" placeholder="Password" class="general-text">
            </div>
            <br>
            <input type="submit" value="LOGIN" name="login" class="general-button">
        </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php 
require './config/config.php';

if(isset($_SESSION['username'])){
    $userLoggedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
    $user =mysqli_fetch_array($user_details_query);
}
else {
    header("Location: register.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://use.fontawesome.com/0fa2e5a5fa.js"></script>    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network Site</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="top_bar">
        <div class="logo">
            <a href="index.php">Adrenaline Now</a>
        </div>
        <nav>
            <a href="<?php echo $userLoggedIn; ?>"> Welcome <?php echo $user['first_name']; ?></a>
            <a href="index.php"><i class="fa fa-home "></i> Home</a>
            <a href="#"><i class="fa fa-envelope"></i>Messages</a>
            <a href="#"><i class="fa fa-bell-o"></i>Notifications</a>
            <a href="#"><i class="fa fa-users"></i>Users</a>
            <a href="#"><i class="fa fa-cogs"></i>Settings</a>
            <a href="./includes/handlers/logout.php"><i class="fa fa-sign-out"></i>Log Out</a>
        </nav>
    </div>

    <div class="wrapper">
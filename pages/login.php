<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AutoNet</title>

    <link rel="icon" href="../images/Group 1.png" type="image/x-icon">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src='../js/login.js'></script>
</head>

<body id="login">
    <div class="login_container">
        <img class="webImage" src="../images/website name.png">
        <form method="post" id="form1" name="myForm">
            <label style="display: block;" class="lab">Admin Name:</label>
            <input id="userName" type="text" name="Adminname" placeholder="admin name " class="in" required autocomplete="off">
            <label style="display: block;" class="lab"> Password:</label>
            <input type="password" name="pass" placeholder="password" class="in" id="pass" required>
            <i class=" show_icon fas fa-eye" onclick="see()"></i>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["Adminname"]) == true || empty($_POST["pass"]) == true) {
                    echo "<h5 style=\"color:red\"> you sholud write username and pass to log</h5>";
                } else {
                    $user =trim($_POST['Adminname']);
                    $pass = $_POST["pass"];
                    $_SESSION["user"] = $user;
                    $_SESSION["pass"] = $pass;
                    header("location:check.php");
                    exit();
                }
            }

            ?>
            <input type="submit" name="log" id="login_b" value="LOGIN">

        </form>
    </div>




</body>

</html>
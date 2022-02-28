<?php
session_start();
$servername = "localhost";
$dbname = "autonet";
$username = "root";
$pasword = "";
try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $pasword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $adminPassword = $conn->query("SELECT Admin_Password FROM admin_info ")->fetchAll(pdo::FETCH_COLUMN);  //one COLUMNS 
    $adminName = $conn->query("SELECT Admin_Name FROM admin_info ")->fetchAll(pdo::FETCH_COLUMN);  //one COLUMNS 
    if (isset($_SESSION["user"])) {
        if ((in_array($_SESSION['user'], $adminName)) && (in_array($_SESSION['pass'], $adminPassword))) {
            header("location:home.php");
            exit();
        }
        elseif((in_array($_SESSION['user'], $adminName)) || (in_array($_SESSION['pass'], $adminPassword))){
                 if((in_array($_SESSION['user'], $adminName))){
                    echo '<script>alert("Your Password  is not correct")</script>';
                    header("REFRESH:0.5;URL=login.php");
                    exit();
                 } 
                 else{
                    echo '<script>alert("Your Admin Name is not correct")</script>';
                    header("REFRESH:0.5;URL=login.php");  
                    exit();
                 }
        }
        else{
            echo '<script>alert("Your Password and Admin Name is not correct")</script>';
           header("REFRESH:0.5;URL=login.php");
           exit();
        }
    } else {
        echo "no session" ;
        header("location:login.php");
        exit();
    }
} catch (PDOException $e) {
    echo "connection error" . $e->getMessage();
}

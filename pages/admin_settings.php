<?php
session_start();
if (isset($_SESSION["user"]) == false) {
  header("location:login.php");
  exit();
}
$servername = "localhost";
$dbname = "autonet";
$username = "root";
$pasword = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>AutoNet</title>

  <link rel="icon" href="../images/Group 1.png" type="image/x-icon">

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
  <link rel='stylesheet' type='text/css' href='../bootstrap-icons-1.7.2/bootstrap-icons.css'>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body>
  <div class="body-containing">
    <div class="change-sett">
      <div class="back-bt">
        <a class="d-flex" href="../pages/home.php">
          <i class="bi bi-arrow-left-circle"></i></a>

      </div>
      <div class="change-data">
        <p class="sett ">Admin settings</p>
        <form method="post" id="form3" name="myForm">
          <label class="lab3">Admin Name:</label>
          <input type="text" name="Adminname" placeholder="admin name " class="in3" required autocomplete="off">
          <label class="lab3"> Old Password:</label>
          <div class="po">
            <input type="password" name="pass" placeholder="old password" class="in3" id="pass" required>
            <i class="show_eye fas fa-eye" onclick="see()"></i>
          </div>
          <label class="lab3"> New Password:</label>
          <div class="po">
          <input type="password" name="npass" placeholder="new password" class="in3" id="npass" required>
          <i class="show_eye fas fa-eye" onclick="see1()"></i>  
        </div>
          <?php
          try {
            $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $pasword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $adminPassword = $conn->query("SELECT Admin_Password FROM admin_info ")->fetchAll(pdo::FETCH_COLUMN);  //one COLUMNS 
            $adminName = $conn->query("SELECT Admin_Name FROM admin_info ")->fetchAll(pdo::FETCH_COLUMN);  //one COLUMNS 

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (isset($_SESSION["user"])) {
                if ((in_array($_POST['Adminname'], $adminName)) && (in_array($_POST["pass"], $adminPassword))) {
                  $update = " UPDATE admin_info
                  SET Admin_Password = '" . $_POST['npass'] . "'
                  WHERE id = 1";
                  $conn->exec($update);
                  echo "<script>alert('Password changed successfully')</script>";
                  header("REFRESH:0.5;URL=home.php");
                } else {
                  echo "<script>alert('Old Password is not right or Admin Name')</script>";
                  header("REFRESH:0.5;URL=admin_settings.php");
                }
              } else {
                echo "no session";
                header("location:login.php");
                exit();
              }
            }
          } catch (PDOException $e) {
            echo "connection error" . $e->getMessage();
          }

          ?>
          <input type="submit" name="change" id="change-bt" value="Change">
        </form>
      </div>
    </div>
  </div>

  <script src="../js/jquery.js"></script>
  <script src="../js/jquery-ui.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src='../js/admin_settings.js'></script>
</body>

</html>
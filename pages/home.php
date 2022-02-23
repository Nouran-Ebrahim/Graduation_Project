<?php
session_start();
if(isset( $_SESSION["user"]) == false){
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AutoNet</title>

    <link rel="icon" href="../images/Group 1.png" type="image/x-icon">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
</head>

<body>
    <div class="homePage">
        <div class="header">
            <img class="websitName" src="../images/website name.png">
            <div class="menuContainer">
                <label class="userName" id="name"><?php
                  echo $_SESSION["user"];
                ?>
                </label>
               <a href="setting_page.php" style="display: block;"> <button class="menuButton" id="startButton">Start Configration</button></a>
               <a href="admin_settings.php"style="display: block;" >  <button class="menuButton" id="settingButton">Admin Setting</button></a>
               <a href="logout.php"style="display: block;" ><button class="menuButton" id="logoutButton">Logout</button></a>

               <div class="links navBar" id="showNav">
                <span class="icon">
                <span></span>
                <span></span>
                <span></span>
               </span>
               <ul id="showing">
                 <li><a href="setting_page.php"> Start Configration </a></li>
                 <li><a href="admin_settings.php"> Admin Setting </a></li>
                 <li><a href="logout.php"> Logout </a></li>
                </ul>
               </div>
            </div>
            
            
    </div>
     <div class="homeBody"  style="background: #fff;height: 400px;">

        </div>
        <div class="footer">
            <div class="image">
                <img class="webName-footer" src="../images/website name.png">
            </div>
            <div class="names">
                <div>
                    Created By
                </div>
                <p class="team">
                    Alaa Osama Mohammed<br>Nouran Ebrahim Elmohamedy<br>Mahmoud Sameh Mohammed<br>Mohammed Tareq Tolba
                </p>

            </div>
        </div>
    </div>

    <script>
             var show = document.getElementById("showNav");
             var showing = document.getElementById("showing");
             var i=0;
             show.addEventListener("click",() =>{
                 if (i===0){
                 showing.style.display="block"
                  i=1
                }else{
                    showing.style.display="none"
                 i=0
                }

             })
              </script>

</body>
</html>
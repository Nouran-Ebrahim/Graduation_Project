<?php
session_start();
if (isset($_SESSION["user"]) == false) {
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
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='../css/style.css'>
    <link rel='stylesheet' type='text/css' href='../bootstrap-icons-1.7.2/bootstrap-icons.css'>
</head>

<body id="home">
    <div class="homePage">
        <div class="header">
            <img class="websitName" src="../images/website name.png">
            <div class="menuContainer">
                <label class="userName" id="name"><?php
                                                    echo $_SESSION["user"];
                                                    ?>
                </label>
                <a href="setting_page.php" style="display: block;"> <button class="menuButton" id="startButton">Start Configration</button></a>
                <a href="admin_settings.php" style="display: block;"> <button class="menuButton" id="settingButton">Admin Setting</button></a>
                <a href="logout.php" style="display: block;"><button class="menuButton" id="logoutButton">Logout</button></a>

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
        <div class="homeBody">
                <ul class="navigate nav">
                    <li class="nav-itemlink">
                        <a class="nav-link active" aria-current="page" href="#">About Project</a>
                    </li>
                    <li class="nav-item link">
                        <a class="nav-link" href="#">Guidlines</a>
                    </li>
                    <li class="nav-item link">
                        <a class="nav-link" href="#">Team Members</a>
                    </li>
                </ul>
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
        var i = 0;
        show.addEventListener("click", () => {
            if (i === 0) {
                showing.style.display = "block"
                i = 1
            } else {
                showing.style.display = "none"
                i = 0
            }

        })
    </script>
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>


<!--
            <div id="carouselExampleCaptions" class="carousel slide abc" data-bs-ride="carousel" >
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/slider1-.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/slide4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/slide4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
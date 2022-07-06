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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Turret+Road&display=swap" rel="stylesheet">
</head>

<body id="home">
    <div class="homePage">
        <div id="h" class="header">
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
                        <li class="link ">
                            <a aria-current="page" href="#desc">About Project</a>
                        </li>
                        <li class="link">
                            <a href="#guid">Guidlines</a>
                        </li>
                        <li class="link">
                            <a href="#memb">Team Members</a>
                        </li>
                        <li><a href="logout.php"> Logout </a></li>

                    </ul>
                </div>
            </div>


        </div>
        <div class="homeBody">
            <ul class="navigate nav">
                <li class="nav-item link">
                    <a class="nav-link active" id="about_sec" aria-current="page" href="#desc">About Project</a>
                </li>
                <li class="nav-item link">
                    <a class="nav-link" id="guid_sec" href="#guid">Guidlines</a>
                </li>
                <li class="nav-item link memb">
                    <a class="nav-link"id="memb_sec" href="#memb">Team Members</a>
                </li>
            </ul>
            <div class="secs">
                <section id="desc" class="discription">
                    <div class="vd-cont">
                        <video class="vdeo" controls>
                            <source src="../images/about.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <p class="Labels">About Project:</p>
                    <div class="about-sec">

                        <div class="about-txt">
                            <p>The network devices can be controlled by using telnet or a console cable but in this project used techniqe of the automation.

                                The automation is very exciting and very new in the network world,where the automation is just tools in order to succeed at your job and to do a lot better and remotely .

                                Autonet web site is an automated tool To be able to control network devices remotely.
                            </p>

                            <h4>Features of AUTONET:</h3>
                                <ul>
                                    <li>
                                        <p>configuration for any device in the network .</p>
                                    </li>
                                    <li>
                                        <p>suitable for lab or mobie phone.</p>
                                    </li>
                                    <li>
                                        <p>change shutdown mode for any interfaces in switching or router, the speed of them , password of the device ,and We can do a lot of tasks.</p>
                                    </li>
                                </ul>
                        </div>
                        <div class="about-img">
                            <img src="../images/connection.jpeg">
                        </div>
                    </div>
                </section>


                <section id="guid" class="guid-lines">
                    <p class="Labels">Guildlines:</p>
                    <ol>
                        <li>
                            <p>Click on <span>Start Configration</span> .</p>
                        </li>
                        <li>
                            <p> Choose the Building or Floor that you need to edit.</p>
                        </li>
                        <li>
                            <p>Enter the data to be update.</p>
                        </li>
                        <li>
                            <p>Click on <span>View </span> to check the data.</p>
                            <img src="../images/11.jpeg">
                        </li>
                        <li>
                            <p>Click on <span>Run&Save</span> to update the network.</p>
                            <img src="../images/22.jpeg">
                        </li>

                    </ol>
                </section>

                <section id="memb" class="members">
                    <p class="Labels">Team Members:</p>
                    <div class="cards">
                        <div class="card">
                            <img class="profile" src="../images/nouranresized-image-Promo.jpeg">
                            <div class="persondata">
                                <p>Nouran El-Mohamady</p>
                                <p>nouran.ssp@gmail.com</p>
                                <p>Fullstack developer</p>
                                <a href="https://bit.ly/engnouran_linkedin">ContactMe</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="profile" src="../images/mahmoudresized-image-Promo.jpeg">
                            <div class="persondata">
                                <p>Mahmoud Sameh</p>
                                <p>mahmoudsameh734@gmail.com</p>
                                <p>Fullstack developer</p>
                                <a href="https://www.linkedin.com/in/mahmoudsamehmohammed/">ContactMe</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="profile" src="../images/alaaresized-image-Promo.jpeg">
                            <div class="persondata">
                                <p>Alaa Osama</p>
                                <p>alaaosama2121998@gmail.com</p>
                                <p>Fullstack developer</p>
                                <a href="https://www.linkedin.com/mwlite/in/alaa-osama">ContactMe</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="profile" src="../images/mahmedresized-image-Promo.jpeg">
                            <div class="persondata">
                                <p>Mohamed Tarek</p>
                                <p>mohamedalsebaey5@gmail.com</p>
                                <p>Frontend developer</p>
                                <a href="https://www.linkedin.com/in/mohamed-tarek-16807b1a6">ContactMe</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="profile" src="../images/emanresized-image-Promo.jpeg">
                            <div class="persondata">
                                <p>Eman Ahmed</p>
                                <p>ea420426@gmail.com</p>
                                <p>NOC engineer</p>
                                <a href="https://www.linkedin.com/in/eman-ahmed-882a561b1/">ContactMe</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="profile" src="../images/shimaaaresized-image-Promo.jpeg">
                            <div class="persondata">
                                <p>Alshimaa Mostafa</p>
                                <p>shimaaamrawy@gmail.com</p>
                                <p>NOC engineer</p>
                                <a href="mailto:shimaaamrawy@gmail.com">ContactMe</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="profile" src="../images/Dina.jpeg">
                            <div class="persondata">
                                <p>Dina Hassan</p>
                                <p>dinazidan40@gmail.com</p>
                                <p>NOC engineer</p>
                                <a href="https://www.linkedin.com/in/dina-hassan-6a18291b8">ContactMe</a>
                            </div>
                        </div>

                        <div class="card">
                            <img class="profile" src="../images/Aya.jpeg">
                            <div class="persondata">
                                <p>Aya Adel</p>
                                <p>aya90318@gmail.com</p>
                                <p>NOC engineer</p>
                                <a href="mailto:aya90318@gmail.com">ContactMe</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="profile" src="../images/Bob.jpeg">
                            <div class="persondata">
                                <p>Abanoub Victor</p>
                                <p>Apanoubpob@gmail.com</p>
                                <p>NOC engineer</p>
                                <a href="https://www.linkedin.com/in/abanoub-victor">ContactMe</a>
                            </div>
                        </div>

                    </div>
                </section>


            </div>
            <a class="bi bi-arrow-up-circle" href="#h"></a>
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
    <script src="../js/home.js"></script>
</body>

</html>


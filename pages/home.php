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
                        <li class="link">
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
                    <a class="nav-link active" aria-current="page" href="#desc">About Project</a>
                </li>
                <li class="nav-item link">
                    <a class="nav-link" href="#guid">Guidlines</a>
                </li>
                <li class="nav-item link">
                    <a class="nav-link" href="#memb">Team Members</a>
                </li>
            </ul>
            <div class="secs">
                <section id="desc" class="discription">
                    <h2>About:</h2>
                    <p>The network devices can be controlled by using telnet or a console cable but in this project used techniqe of the automation.

                        The automation is very exciting and very new in the network world,where the automation is just tools in order to succeed at your job and to do a lot better and remotely .

                        Autonet web site is an automated tool To be able to control network devices remotely.
                    </p>
                    <h3>Features of AUTONET:</h3>
                    <ul>
                        <li>configuration for any device in the network .</li>
                        <li>suitable for lab or mobie phone.</li>
                        <li>change shutdown mode for any interfaces in switching or router, the speed of them , password of the device ,and We can do a lot of tasks.</li>
                    </ul>

                </section>

                <section id="guid" class="guid-lines">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum metus faucibus lectus pharetra dapibus. Suspendisse potenti. Aenean aliquam elementum mi, ac euismod augue. Donec eget lacinia ex. Phasellus imperdiet porta orci eget mollis. Sed convallis sollicitudin mauris ac tincidunt. Donec bibendum, nulla eget bibendum consectetur, sem nisi aliquam leo, ut pulvinar quam nunc eu augue. Pellentesque maximus imperdiet elit a pharetra. Duis lectus mi, aliquam in mi quis, aliquam porttitor lacus. Morbi a tincidunt felis. Sed leo nunc, pharetra et elementum non, faucibus vitae elit. Integer nec libero venenatis libero ultricies molestie semper in tellus. Sed congue et odio sed euismod.</p>
                </section>

                <section id="memb" class="members">
                    <h2>Team members</h2>
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
                            <img class="profile" src="../images/mahmoudresized-image-Promo.jpeg">
                            <div class="persondata">
                                <p>Eman Ahmed</p>
                                <p>ea420426@gmail.com</p>
                                <p>Leader & NOC engineer</p>
                                <a href="https://www.linkedin.com/in/eman-ahmed-882a561b1/">ContactMe</a>
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
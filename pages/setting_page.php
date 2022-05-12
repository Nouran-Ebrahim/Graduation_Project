<?php
session_start();
if (isset($_SESSION["user"]) == false) {
    header("location:login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <title>AutoNet</title>
    <link rel="icon" href="../images/Group 1.png" type="image/x-icon">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='../css/style.css'>
    <link rel='stylesheet' type='text/css' href='../bootstrap-icons-1.7.2/bootstrap-icons.css'>
</head>

<body>
    <div class="body container-fluid d-flex align-items-center ">
        <div class="body-container container p-2">
            <div class="row d-flex justify-content-between top-bar">
                <a class="menu-icon top-bar-contents" data-bs-toggle="offcanvas" href="#navigation" role="button" aria-controls="navigation" aria-labelledby="navigationLabel"><i class="bi bi-list"></i>
                </a>
                <a style="width: fit-content;" href="home.php"><img class="top-bar-contents logo" src="../images/website name.png" alt="Page Logo"></a>
            </div>
            <div class="d-flex flex-nowrap">
                <nav id="navigation" class="col-md-3 d-md-block col-lg-2 navbar navbar-nav navbar-light Radius">
                    <div class="d-flex flex-column px-2">
                        <div class="offcanvas-header p-0 d-flex flex-column align-items-start">
                            <div class="w-100 justify-content-between d-flex mb-2 px-2">
                                <a class="d-flex" href="home.php">
                                    <i class="bi bi-arrow-left-circle"></i></a>
                                <a type="button" class="top-bar-contents" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-circle"></i></a>
                            </div>
                            <a class="offcanvas-title" id="offcanvasExampleLabel" href="home.php">
                                <img src="../images/website name.png" height="100%" width="100%"></a>
                        </div>
                        <div class="px-0 offcanvas-body">
                            <div>
                                <input class="filters form-control me-2 my-2" type="search" placeholder="Search" aria-label="Search" />
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Buildings
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show mx-auto" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="btns-container my-1 list-group-flush">
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action active R" aria-current="true" role="tab" aria-selected="true" data-bs-target="#Sections" data-bs-slide-to="0" name="router" id="R1">Electrical</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="0" name="router" id="R2">Mechanical</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="0" name="router" id="R3">Preparatory</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="0" name="router" id="R4">Administration</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="0" name="router" id="R5">Main Router</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Floors
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="btns-container my-1 list-group-flush">
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S1" name="switch">1st Elec</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S2" name="switch">2nd Elec</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S3" name="switch">3th Elec</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S4" name="switch">1st Mec</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S5" name="switch">2nd Mec</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S6" name="switch">3th Mec</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S7" name="switch">1st Prep</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S8" name="switch">2nd Prep</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S9" name="switch">3th Prep</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S10" name="switch">1st Admin</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S11" name="switch">2nd Admin</button>
                                                    <button type="button" class="list-group-item btn-lg list-group-item-action R" aria-current="true" role="tab" aria-selected="false" data-bs-target="#Sections" data-bs-slide-to="1" id="S12" name="switch">3th Admin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div id="Sections" class="col-lg-10 col-md-9 container carousel slide  pointer-event Radius" data-bs-interval="false" data-bs-wrap="false">
                    <div class="carousel-inner">


                        <!--Routers Pages-->
                        <div class="carousel-item active">
                            <p id="router" class="name mt-2 ms-3">Electrical Building</p>
                            <div class="Settings">
                                <form id="r_frm" class="sec1" method="post" action="addrouter.php">
                                    <div class="row Scontainer d-flex">
                                        <div class="offset-md-1 col-12 col-md-5 S1 dis inactive">
                                            <div class="col-12 dp my-5 abs">
                                                <label class="label col-12"> Hostname:</label>
                                                <input type="text" name="Hostname" placeholder="Hostname" class="txts txtRouter col-12  r-hostname" required>
                                            </div>
                                            <div class="col-12 dp my-5">
                                                <label class="label col-12"> Enable:</label>
                                                <input type="text" name="Enable" placeholder="Enable" class="txts txtRouter col-12 r-enable" required>
                                            </div>
                                            <div class="col-12 dp my-5">
                                                <label class="label col-12"> Welcoming massage:</label>
                                                <input type="text" name="WelcomingMassage" placeholder="Welcoming massage" class="txts txtRouter col-12 r-massage" required>
                                            </div>
                                            
                                        </div>

                                        <div class="col-12 col-md-5 S2 dis">
                                            <div class="col-12 dp my-5 abs">
                                                <label class="label col-12"> Console Password:</label>
                                                <input type="text" name="ConsolePassword" placeholder="Console Password" class="txts txtRouter col-12 r-console" required>
                                            </div>
                                            <div class="col-12 dp my-5">
                                                <label class="label col-12"> Telnet Password:</label>
                                                <input type="text" name="TalentPassword" placeholder="Telnet Password" class="txts txtRouter col-12 r-telnet" required>
                                            </div>
                                            <div class="col-12 dp my-5">
                                                <label class="label col-12">IP:</label>
                                                <input type="text" name="IP" placeholder="IP" class="txts txtRouter col-12 r-ip" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="View d-flex justify-content-center mb-3">
                                        <input class="btn-primary btn-lg button  viewButton" id="view-rt" type="button" name="View" value="View">
                                    </div>
                                    <input type="hidden" name="r_id" value="1" id="hiddr">
                                    
                                    <!-- fixed informations-->
                                    <div class="col-12 dp my-5" style="display: none;">
                                        <label class="label ">Interface Loopback:</label>
                                        <input type="text" name="Interface" placeholder="Interface" class="txts txtRouter col-12 r-loopback" required>
                                    </div>
                                    <div class="col-12 dp my-5" style="display: none;">
                                        <label class="label col-12">Mask:</label>
                                        <input type="text" name="mask" placeholder="Mask" class="txts txtRouter col-12 r-mask" required>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Switches Pages-->
                        <div class="carousel-item">
                            <p id="switch" class="name mt-2 ms-3">1st Elec Floor</p>
                            <form id="sw_frm" class="Settings sec2" method="post" action="addsw.php">
                                <div class="row Scontainer  d-flex ">
                                    <div class="offset-md-1 col-12 col-md-5 S1 dis inactive">
                                        <div class="col-12 dp my-5 abs">
                                            <label class="label col-12"> Hostname:</label>
                                            <input type="text" name="Hostname" placeholder="Hostname" class="txts txtSwitch col-12 sw-hostname" required>
                                        </div>
                                        <div class="col-12 dp my-5">
                                            <label class="label col-12"> Enable:</label>
                                            <input type="text" name="Enable" placeholder="Enable" class="txts txtSwitch col-12 sw-en" required>
                                        </div>
                                        <div class="col-12 dp my-5">
                                            <label class="label col-12"> Welcoming massage:</label>
                                            <input type="text" name="WelcomingMassage" placeholder="Welcoming massage" class="txts txtSwitch col-12 sw-welcom" required>
                                        </div>
                                        
                                    </div>
                                    <div class="col-12 col-md-5 S2 dis">
                                        <div class="col-12 dp my-5 abs">
                                            <label class="label col-12"> Console Password:</label>
                                            <input type="text" name="ConsolePassword" placeholder="Console Password" class="txts txtSwitch col-12 sw-cons" required>
                                        </div>
                                        <div class="col-12 dp my-5 abs">
                                            <label class="label col-12"> Telnet Password:</label>
                                            <input type="text" name="TalentPassword" placeholder="Talent Password" class="txts txtSwitch col-12 sw-tel" required>
                                        </div>
                                        
                                        <div class="col-12 dp my-5">
                                            <label class="label col-12">IP:</label>
                                            <input type="text" name="IP" placeholder="IP" class="txts txtSwitch col-12 sw-ip" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="View d-flex justify-content-center mb-3">
                                    <input class="btn-primary btn-lg button viewButton" id="view-sw" type="button" name="View" value="View">
                                </div>
                                <input type="hidden" name="sw_id" value="1" id="hiddsw">

                                <!-- fixed informations-->
                                <div class="col-12 dp my-5" style="display:none;">
                                    <label class="label col-12">Interface Vlan:</label>
                                    <input type="text" name="Interface-vlan" placeholder="Interface" class="txts txtSwitch col-12 sw-vlan" required>
                                </div>
                                <div class="col-12 dp my-5" style="display:none;">
                                    <label class="label col-12">Mask:</label>
                                    <input type="text" name="mask" placeholder="Mask" class="txts txtSwitch col-12 sw-mask" required>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <div class="mainInfo row">
            <div class="mainContainer col-md-5 col-xl-3 col-9 col-sm-6">
                <div class="infoContainer">
                    <div class='close-bt'>
                        <!-- <button class="info_button return" id="return_button">X</button> -->
                        <a class="d-flex" href="#">
                            <i class="bi bi-x-circle" style="color: black;"></i></a>
                    </div>
                    <div class="headerContainer">
                        <div class="activeDevice">
                            <div class="nameDevice" id="router1">Router 1 Information</div>
                        </div>
                    </div>
                    <div class="all_infomation">
                        <div class="data">
                            <div class=" information">Host Name:</div>
                            <div class="data-value" id="hostname-data">Lorem ipsum dolor sit amet.</div>
                        </div>
                        <div class="data">
                            <div class=" information">Enable:</div>
                            <div class="data-value" id="Enable-data">Lorem ipsum dolor sit amet.</div>
                        </div>
                        <div class="data">
                            <div class=" information">Welcoming massege:</div>
                            <div class="data-value" id="text-data">Lorem ipsum dolor sit amet.</div>
                        </div>
                        <div class="data">
                            <div class=" information">Console Password:</div>
                            <div class="data-value" id="console-password">Lorem ipsum dolor sit amet.</div>
                        </div>
                        <div class="data">
                            <div class=" information">Telnet Password:</div>
                            <div class="data-value" id="telnet-password">Lorem ipsum dolor sit amet.</div>
                        </div>
                        <div class="data">
                            <div class=" information rout">Interface Loopback:</div>
                            <div class=" information sw">Interface Vlan:</div>
                            <div class="data-value" id="interface-data">Lorem ipsum dolor sit amet.</div>
                        </div>
                        <div class="data">
                            <div class=" information">IP:</div>
                            <div class="data-value" id="ip_data">Lorem ipsum dolor sit amet.</div>
                        </div>
                        <div class="data">
                            <div class=" information">Mask:</div>
                            <div class="data-value" id="mask_data">Lorem ipsum dolor sit amet.</div>
                        </div>
                    </div>
                    <div>
                        <div id = "load" class="spinner-border" style="display:none" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <button type="button" class="info_button" name="router" id="run_button">Run&Save</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="../js/jquery.js"></script>
    <?php
    require "../pages/connection.php";
    ?>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/setting_page.js"></script>
    
</body>

</html>
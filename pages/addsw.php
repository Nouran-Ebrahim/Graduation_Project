
<?php
session_start();
               try {
                   $servername = "localhost";
                   $username = "root";
                   $password = "";
                   $dbname = "autonet";
                   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
                   if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_SESSION["user"])) {
                      $en=$_POST['Enable'];
                      $host=$_POST['Hostname'];
                      $welmess=$_POST['WelcomingMassage'];
                      $con=$_POST['ConsolePassword'];
                      $tel=$_POST['TalentPassword'];
                      $loop= $_POST['Interface-vlan'];
                      $mask=$_POST['mask'];
                      $ip=$_POST['IP'];
                      $id=$_POST['sw_id'];

                        $update = " UPDATE switches
                        SET `Hostname` = '$host'
                        ,`Enable_pass` = ' $en'
                        ,`Welcom_mess` = ' $welmess'
                        ,`Console_pass` = '$con'
                        ,`Telnet_pass` = ' $tel'
                        ,`Interface_vlan` = '$loop'
                        ,`Mask`= '$mask '
                        ,`Ip` = ' $ip '

                        WHERE `id` ='$id'";
                        $conn->exec($update);
                        echo "<script>alert('Data changed successfully')</script>";
                        header("REFRESH:0.2;URL=setting_page.php");
                      }
                      else {
                        echo "no session";
                        header("location:login.php");
                        exit();
                      }

                        
                    } 
                  }  

                catch (PDOException $e) {
                   echo "<span class=\"error\">Connection Failed or data already exists</span>";
               }
           ?>
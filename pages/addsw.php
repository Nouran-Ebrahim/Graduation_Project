
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
                      $en=trim($_POST['Enable']);
                      $host=trim($_POST['Hostname']);
                      $welmess=trim($_POST['WelcomingMassage']);
                      $con=trim($_POST['ConsolePassword']);
                      $tel=trim($_POST['TalentPassword']);
                      $loop=trim($_POST['Interface-vlan']);
                      $mask=trim($_POST['mask']);
                      $ip=trim($_POST['IP']);
                      $id=trim($_POST['sw_id']);

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
                        $myfile = file_get_contents('../network_data/switch.py');;

                        $counter = 0;

                        $myfile = str_replace(['host_name',"enable_e","welcoming_message","consle_e","pass_word","numof_loopback", "ma_sk"
                        , "i_p"],[$host,$en,$welmess,$con,$tel,$loop,$mask,$ip],$myfile,$counter);
                         $name="switch".$id.".py";
                        file_put_contents($name, $myfile);
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
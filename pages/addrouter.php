
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
                      $loop= trim($_POST['Interface']);
                      $mask=trim($_POST['mask']);
                      $ip=trim($_POST['IP']);
                      $id=trim($_POST['r_id']);

                      // $sel="SELECT  `Enable_pass`, `Telnet_pass`, `Ip` FROM `routers` WHERE $id";
                      $olddata= $conn->query("SELECT  Enable_pass, Telnet_pass, Ip FROM `routers` WHERE $id")->fetch();
                        $oldenable=$olddata['Enable_pass'];
                        $oldtel=$olddata['Telnet_pass'];
                        $oldip=$olddata['Ip'];
                        

                        $myfile2 = file_get_contents('../network_data/router.py');
                        $myfile2 = str_replace(['host_name',"enable_e","welcoming_message","consle_e","pass_word","numof_loopback", "ma_sk"
                        , "i_p",
                        "en_old","tel_old","ip_old"],
                        [$host,$en,$welmess,$con,$tel,$loop,$mask,$ip,
                        $oldenable,$oldtel,$oldip],$myfile2);
                         $name="../network_data/uptade_routers_scripts/router".$id.".py";
                        file_put_contents($name, $myfile2); 
                        run python script
                        $pythonName="python ".$name;
                        $command = escapeshellcmd($pythonName);
                        $output = shell_exec($command);

                        // update data
                        $update = " UPDATE routers
                        SET `Hostname` = '$host'
                        ,`Enable_pass` = ' $en'
                        ,`Welcom_mess` = ' $welmess'
                        ,`Console_pass` = '$con'
                        ,`Telnet_pass` = ' $tel'
                        ,`Interface_loopback` = '$loop'
                        ,`Mask`= '$mask '
                        ,`Ip` = ' $ip '
                        WHERE `id` ='$id'";
                           $conn->exec($update);
                        echo "<script>alert('Data changed and Run successfully')</script>";
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
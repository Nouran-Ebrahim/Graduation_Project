
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
//  choose witch router that i need
                      if ($id == 1 || $id == 2 || $id == 3 ){
                        $r_id=1;
                      }elseif($id == 4 || $id == 5 || $id == 6 ){
                        $r_id=2;
                      }elseif($id == 7 || $id == 8 || $id == 9 ){
                        $r_id=3;
                      }else{
                        $r_id=4;
                      }
                      // select old data
                      $r_data= $conn->query("SELECT Enable_pass, Telnet_pass, Ip FROM `routers` WHERE id = $r_id")->fetch();                    
                      $r_enable=trim($r_data['Enable_pass']);
                        $r_tel=trim($r_data['Telnet_pass']);
                        $r_ip=trim($r_data['Ip']);

                      $olddata= $conn->query("SELECT `Enable_pass`, `Telnet_pass`, `Ip` FROM `switches` WHERE id = $id")->fetch();
                      $oldenable=trim($olddata['Enable_pass']);
                        $oldtel=trim($olddata['Telnet_pass']);
                        $oldip=trim($olddata['Ip']);
                      
                      
                        $myfile = file_get_contents('../network_data/switch.py');
                        $myfile = str_replace(['host_name',"enable_e","welcoming_message","consle_e","pass_word","numof_vlan","ma_sk","i_p",
                        "router_ip","r_tel","en_router",
                        "sw_ip","sw_tel","sw_en"],
                        [$host,$en,$welmess,$con,$tel,$loop,$mask,$ip,
                        $r_ip,$r_tel,$r_enable,
                        $oldip,$oldtel,$oldenable]
                        ,$myfile);
                         $name="../network_data/update_switches_scripts/switch".$id.".py";
                        file_put_contents($name, $myfile);


                        // run python script
                        $pythonName="python ".$name;
                        $command = escapeshellcmd($pythonName);
                        $output = shell_exec($command);

                        
                      //update data 
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

<?php

 if ($_SERVER['REQUEST_METHOD'] == "POST") {
                //$n = $_POST['Adminname'];
                //$pass = $_POST['pass'];

                try {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "autonet";
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $rdata = $conn->query("SELECT * FROM routers")->fetchAll(PDO::FETCH_ASSOC);
                    $swdata = $conn->query("SELECT * FROM switches")->fetchAll(PDO::FETCH_ASSOC);

                    echo '<script> const allData =' . json_encode($rdata) . ';</script>';
                    echo '<script> const allData_sw =' . json_encode($swdata) . ';</script>';

                } catch (PDOException $e) {
                    echo "<span class=\"error\">Connection Failed or data already exists</span>";
                }
           }
            ?>
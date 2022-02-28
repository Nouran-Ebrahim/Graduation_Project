
<?php
session_start();
echo 'router';
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
              
                   echo "<span class=\"error\">connected sucessfully</span>";       

               } catch (PDOException $e) {
                   echo "<span class=\"error\">Connection Failed or data already exists</span>";
               }
          }
           ?>
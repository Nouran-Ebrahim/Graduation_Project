<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo '<h1>hello ' .$_POST['text'] . '</h1>';
    }
    else{
        echo "err";
    }
?>
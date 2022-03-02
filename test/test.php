<?php
$myfile = file_get_contents('first pyyyyy.py');;

$counter = 0;

$myfile = str_replace(['"hostname"','"enable"','"welcomingmessage"','"password"','"numofloopback"', '"mask"'
, '"interfaceloop"'],['"1"','"2"','"3"','"4"','"5"','"6"','"7"'],$myfile,$counter);

file_put_contents('sum2.py', $myfile);


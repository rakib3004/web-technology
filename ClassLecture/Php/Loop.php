<?php

$roomNo=0;
$roomID=400;

echo("Room Number and ID Allocation System <br> <br>");

for($i=1;$i<=15;$i++){
    $roomNo++;
    $roomID=$roomID+4;
    echo("Room No: ".$roomNo." ,"."Room ID: ".$roomID."<br>");
}


?>
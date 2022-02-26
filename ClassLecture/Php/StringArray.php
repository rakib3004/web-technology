<?php 

$courseDetails = array("Design Pattern","Software Requirements","Database Management", "Data Structure and Algorithm");



echo($courseDetails[2]."</br>");

echo($courseDetails[1]."</br>");


$technologyOutLine=array(
    array("Heading","List","Table","HyperLink","Image"),
    array("Padding","Margin","Outline","Color","Shape"),
    array("Array","Function","Conditional","File","String")
);

echo("Today we learn: ".$technologyOutLine[2][2]." from ".$courseDetails[2]." and ".$technologyOutLine[1][4]." from ".$courseDetails
[1]);






?>
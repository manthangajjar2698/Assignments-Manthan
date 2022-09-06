<?php
$day="E";
//echo $day;

switch($day)
{
case 'A':
 echo "<h2>Sunday</h2>";
 break;
 
case 'B':
  echo "<h2>Monday</h2>";
  break;
 
case 'C':
    echo "<h2>Tuesday</h2>";
    break;

case 'D':
    echo "<h2>Wednesday</h2>";
    break;

case 'E':
    echo "<h2>Thursday</h2>";
    break;

case 'F':
    echo "<h2>Friday</h2>";
    break;    

case 'G':
    echo "<h2>Saturday</h2>";
    break;

    default:
    echo "<h1>Sorry Not Found Day</h1>";
    break;
}




?>
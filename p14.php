<?php
echo "explode() :-This function use breaks a string into an array(in short string to array conversion).<br>";
$arr_explode = "I PHP Developer !!!";
print_r(explode(" ",$arr_explode));
echo "<br> <br>";
echo "implode() :-This function returns string from the element of an array (in short array to string conversion).<br>";
$arr_implode=array('I','PHP','Developer','!!!');
echo implode(" ",$arr_implode);
?>
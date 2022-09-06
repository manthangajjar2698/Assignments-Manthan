<?php
/* 
1) Indexed Array or numeric Array
2) Associative Array
3) Multidimensional Array
*/

echo "<h3>Array :- Array is variable this used stored multiplt value and information</h3>"."<br>";

echo "Create Array Example";
$arr=array("Meet","Meet");
print_r($arr);

echo "<h2>"."1) Indexed Array or numeric Array"."</h2>".
"<p>"."This array is work key with value key display in output."."</p>";
$index=array("Meet","Manthan","Keval","Ketan");
print_r($index);


echo "<h2>"."2) Associative Array"."</h2>".
"<p>"."This array is work key assign with value."."</p>";
$associative=array("a"=>"Meet","b"=>"Manthan","c"=>"Keval","d"=>"Ketan");
print_r($associative);

echo "<h2>"."3) Multidimensional Array"."</h2>".
"<p>"."This array is work one array to another array create."."</p>";
$mult=array("name"=>array("a"=>"Meet","b"=>"Manthan","c"=>"Keval","d"=>"Ketan"),"Field"=>array("a"=>"Civil","b"=>"IT","c"=>"Mechanical","d"=>"EC"));
print_r($mult);



?>
<?php
echo "<h2>Unlink:- unlink() function used to delete FILE in folder. </h2>";
$dir="file/";
$imagepath = glob($dir."*.jpg");

foreach ($imagepath as $image) {
    echo '<img src="'.$image.'" height="110" width="110">';
 } 

$file= "pricing-img-2.jpg";

if(!unlink("file/pricing-img-2.jpg")){
    echo "File not Delete";
}
else{
    echo "File Delete";
}


?>
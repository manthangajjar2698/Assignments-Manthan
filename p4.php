<?php
$n=0;
$a=0;
$b=1;
echo "<h3>Fibonacci Series:</h3> $a,$b";

while($n<8)
{
    $c=$b+$a;
    echo ",";
    echo "$c";
    $a=$b;
    $b=$c;
    $n=$n+1; 
}

?>
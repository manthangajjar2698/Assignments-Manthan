<?php
if(isset($_POST['submit']))
{
    $phy=$_POST['phy'];
    $chm=$_POST['chm'];
    $bio=$_POST['bio'];
    $math=$_POST['math'];
    $com=$_POST['com'];
    
    $sum=$phy+$chm+$bio+$math+$com;
    echo "<h3 align='center'>"."Sum of Numbers:".$sum."</h3>";
    $gra=$sum/5;
    echo "<h3 align='center'>"."Percentage of Numbers:".$gra."%"."</h3>";

    
    if($gra>=90)
       $grade = "A"."&#128512";
    elseif($gra>=80)
       $grade = "B"."&#128515";       
    elseif($gra>=70)
       $grade = "C"."&#128522";
    elseif($gra>=60)
       $grade = "D"."&#128528";
    else
       $grade = "Fail"."&#128551";            
       
       echo "<h3 align='center'>"."Grade : ". $grade."</h3>";
      
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form method="post">
<table border="1" align="center" >
<tr><th colspan="2" align="center">P1 Calculate and Percentage of 5 Subjects</th></tr>
<tr>
    <td><label>Enter Subject Physics:</label></td>
    <td><input type="text" name="phy" required/></td>
</tr>    
<tr>
    <td><label>Enter Subject Chemistry:</label></td>
    <td><input type="text" name="chm" required/></td>
</tr>    
<tr>
    <td><label>Enter Subject Biology:</label></td>
    <td><input type="text" name="bio" required/></td>
</tr>    
<tr>
    <td><label>Enter Subject Mathematics:</label></td>
    <td><input type="text" name="math" required/></td>
</tr>    
<tr>
    <td><label>Enter Subject Computer:</label></td>
    <td><input type="text" name="com" required/></td>
</tr>    
<tr>
<td colspan="2" align="center">
 <input type="submit" name="submit" value="Addition"/>  
</td>
</tr>
</table>    
</form>    
</body>
</html>

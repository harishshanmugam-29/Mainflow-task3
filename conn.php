<?php 
$a=$_POST["n"];
$b=$_POST["e"];
$c=$_POST["p"];
$d=$_POST["cp"];

$con=mysqli_connect("localhost","root","");
mysqli_select_db( $con,"mainflow");
$sql=("insert into register(n,e,p,cp)values('$a','$b','$c','$d')");
mysqli_query($con,$sql);

echo("successfully Registerd!!!");

include("register.html");
mysqli_close($con);


?>
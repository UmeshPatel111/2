<?php 

$severname="localhost";
$username="root";
$passwored="";
//Create a Connection
$conn = mysqli_connect($severname,$username,$passwored);

//Die if connection was not succssfuly
if(!$conn)

{
    die( "Sorry We Faild to connect: ".mysqli_connect_error());
}
else
{
    echo"Connection was succsefully";
}
?>


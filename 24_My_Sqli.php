<?php 
echo "Welcome to the stage where we are ready to get conncect to a database<br>";


/*
 Ways to conect to a MYSQLI database
 1.My Sqli
 2.PDO
 */
 //connecting to the Database
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
else{
    echo"Connection was succsefully";
}
?>
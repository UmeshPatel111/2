<?php

$severname="localhost";
$username="root";
$passwored="";
$datbase="umesh";
//Create a Connection
$conn = mysqli_connect($severname,$username,$passwored,$datbase);

//Die if connection was not succssfuly
if(!$conn)

{
    die( "Sorry We Faild to connect: ".mysqli_connect_error());
}
else
{
    echo"Connection was succsefully";
}
//Creat in the table in to DB
?>



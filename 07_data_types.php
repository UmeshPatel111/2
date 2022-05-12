<?php

$name="Umesh";
$income=500;




/*  PHP Data Types
1.String
2.Integer
3.NULL
4.Array
5.Float
6.Boolean
7.Object
*/
//String Data Types
$name="Umesh";
$freinds='Siddarth';
echo"<br>";
echo"$name ka friend is a $freinds";
echo"<br>";

//Integer Data Taypes
$income=1000;
$debts=-400;
echo $income;
echo"<br>";
echo $debts;
echo"<br>";

//Float Type Data Types
$income=999.99;
$debts=-499.5;
echo $income;
echo"<br>";
echo $debts;
echo"<br>";

//Bollean Data Types
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

//Object Data Types
//Employ is a clss ---> harry can be one object
//Array - Used to store multiple values in a single variables

$friends= array("Umesh","Raj","Urvish","Ronak");
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $freinds[1];
echo "<br>";
echo $freinds[2];
echo "<br>";
echo $freinds[3];
echo "<br>";

//NULL

$name = NULL;
echo var_dump($name);











?>

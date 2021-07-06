<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'basecontrol';

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
endif;

$sql = mysqli_query($connection, "SELECT * FROM basevalues ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);


echo "RECORDING THE LAST DATA...";
echo "<br>";
echo "<br>";

echo "Direction is :  ";
echo"<hr>";

echo "id = ".$print_data[0];
echo "<br>";
echo "Forward =  ".$print_data[1];
echo "<br>";
echo "Stop =  ".$print_data[2];
echo "<br>";
echo "Right1 =  ".$print_data[3];
echo "<br>";
echo "Left1 =  ".$print_data[4];
echo "<br>";
echo "Backward =  ".$print_data[5];

echo"<br>";
echo"<br>";

?>
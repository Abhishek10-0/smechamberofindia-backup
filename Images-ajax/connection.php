
<?php
$server = "127.0.0.1";
$username = "smedii4y_smechamberofindia";
$password = "Sneha@2021";
$database = "smedii4y_smechamberofindia";
$connection = mysqli_connect("$server","$username","$password");
$select_db = mysqli_select_db($connection, $database);
if(!$select_db)
{
    echo("connection terminated");
}
?>
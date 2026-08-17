<?php
include("connection.php");
$id = $_POST['id'];
$delete_query = mysqli_query($connection, "delete from images where id='$id'");
if($delete_query>0)
{
	echo "Product Deleted Successfully.";
}
?>
<?php
include('connection.php');
if(isset($_FILES['images']))
{
	$title = $_POST['title'];
	$desc = $_POST['description'];
	
	foreach($_FILES['images']['tmp_name'] as $key => $tmp_name)
	{
       $file_name = $_FILES['images']['name'][$key];
	   $file_tmp = $_FILES['images']['tmp_name'][$key];
	   $file_destination = 'uploads/'.$file_name;
	   move_uploaded_file($file_tmp, $file_destination);
    }
        $images = implode(', ',$_FILES['images']['name']);
		$insert_image = mysqli_query($connection, "insert into tbl_product set title='$title', description='$desc', image='$images'");

        echo "Product Added Successfully.";
}
?>
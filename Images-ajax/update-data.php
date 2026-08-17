<?php
include('connection.php');
if(isset($_POST['productId'])){
	$id = $_POST['productId'];
	$title = $_POST['title'];
	$desc = $_POST['description'];
	$update_data = mysqli_query($connection, "update images set title='$title', description='$desc' where id='$id'");

	if(isset($_FILES['images'])) {
	   $select_images = mysqli_query($connection, "select image from images where id='$id'");
	   $res = mysqli_num_rows($select_images);
	   if($res>0)
	   {
	   	 $row = mysqli_fetch_array($select_images);
	   	 $existing_image_str = $row['image'];
	   	 $existing_images = explode(', ',$existing_image_str);
	   

	foreach($_FILES['images']['tmp_name'] as $key => $tmp_name)
	{
       $file_name = $_FILES['images']['name'][$key];
	   $file_tmp = $_FILES['images']['tmp_name'][$key];
	   $file_destination = 'uploads/'.$file_name;
	   move_uploaded_file($file_tmp, $file_destination);

    }
        $existing_images[] = $file_name;
        $images = implode(', ',$existing_images);
		$update_data = mysqli_query($connection, "update images set image='$images' where id='$id'");
   
        echo "Product Updated Successfully.";
    }
}
}
?>
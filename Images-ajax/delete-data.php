<?php
include("connection.php");
$image = $_POST['image_url'];
$id = $_POST['id'];
 
$select_query = mysqli_query($connection, "select image from images where id='$id'");
$row = mysqli_num_rows($select_query);
if($row>0)
{
	$res = mysqli_fetch_assoc($select_query);
	$image_list = explode(', ',$res['image']);
	$key = array_search($image, $image_list);

        if ($key !== false) {
            unset($image_list[$key]);
        }
        $updated_image_column = implode(', ',$image_list);
        $update_query = mysqli_query($connection, "UPDATE images SET image = '$updated_image_column' WHERE id='$id'");

        $image_path = 'uploads/' . $image;
    
    if (file_exists($image_path)) {
        unlink($image_path); 
    }
}
?>
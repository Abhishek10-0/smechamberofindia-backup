<?php
include("connection.php");
$fetch_query = mysqli_query($connection, "select * from pastevent_gallery");
$row = mysqli_num_rows($fetch_query);
if($row>0)
{
    while($res = mysqli_fetch_array($fetch_query))
    {?>
       <tr>
        <td><?php echo $res['idy']; ?></td>
        <td>
        <?php
            $image = explode(',',$res['yearwise_images']);
            foreach ($image as $images){
        ?>
        <img src="https://smechamberofindia.com/images/pastevent-big-images/<?php echo $images; ?>.JPG" height="200"> 
       <?php } ?>
       </td>
        <td><button type="button" class="btn btn-primary" id="edit_product" data-id="<?php echo $res['id']; ?>">Edit</button>
        <button type="button" class="btn btn-danger" id="deleteproduct" data-id="<?php echo $res['id']; ?>">Delete</button></td>
       </tr>
<?php   }
}
?>
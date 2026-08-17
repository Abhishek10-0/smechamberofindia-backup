<?php include 'config.php'; ?>  
<?php
//$year = $_GET['year'];
$sql = "SELECT * FROM `pastevent_gallery` where year_name='$year'" ;
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row

    while ($row = $result->fetch_assoc()) {

        /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
        ?>
        <div class="accordion-group">
            <div class="accordion-heading"> 
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                    <strong onclick="test(<?php echo $row['idy']; ?>)"><?php echo $row['event-date']; ?>  <?php echo $row['pastevent-name']; ?></strong>
                    <span><i class="fa fa-plus" onclick="test(<?php echo $row['idy']; ?>)"></i></span></a>
                     <div id="<?php echo $row['idy']; ?>" hidden="false">
                        <?php
                           $idy = $row['idy'];
                        ?>

                        <?php include 'pastevent_gallery_onclick.php'; ?>
                    </div>
            </div>

        </div>

        <?php
    }
} else {
    echo "<h3 style='color:red; text-align: center;'>404 Error - File or Directory Not Found </h3> 
	<p style='color: black; font-size: 1.2em; font-weight: bold; text-align: center;'>
	The resource you are looking for might have been removed or is temporarily unavailable.</p>";
}
?>

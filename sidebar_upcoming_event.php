<?php include 'config.php'; ?>  
<?php
$sql = "SELECT * from events_sme ORDER BY ide DESC LIMIT 3";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {
        /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
        ?>   

<li>
	<div class="text">
		<strong class="title"><?php echo $row["event_name"] ?></strong>
		<p><?php echo $row["event_place"] ?> - <?php echo $row["event_day"] ?>&nbsp;<?php echo $row["event_month"] ?></p>
		<a href="r-e4ad-m899778-or-asd442rdf7e-ev4532et.php?id=<?php echo $row["ide"] ?>" class="readmore">Read More</a>
	</div>
</li>
<?php 
    }
} else {
    echo "0 results";
} 
?>   
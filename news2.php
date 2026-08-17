<style>
.button {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
  padding:10px;
}

.button:hover {
  background-color: #008CBA;
  color: white !important;
}
</style>


<?php include 'config.php'; ?>  
<?php
$sql = "SELECT * from news_sme ORDER BY idn DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {
        /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
        ?>
        <li>
            <div class="news-box">
                <div class="frame">
                    <div class="caption"><i class="fa fa-plus"></i></div>
                    <img src="images/news-sme/<?php echo $row["news-image"]; ?>.jpg" >
                </div>
                <div class="text">
                    <div class="text-top-row">
                        <i class="fa fa-calendar">&nbsp;&nbsp;</i><?php echo $row["news_date"] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <i class="fa fa-newspaper-o">&nbsp;&nbsp;</i><?php echo $row["news_source"] ?></div>
                    <h2><?php echo $row["news_headline"] ?></h2>
                    <!--<p><?php //echo substr($row["news_full_description"], 0, 300) ?></p>-->
                    <a href="read_more_news.php?id=<?php echo $row["idn"] ?>" class="readmore button">Read More</a> </div>
            </div>
        </li>

        <?php
    }
} else {
    echo "0 results";
} 

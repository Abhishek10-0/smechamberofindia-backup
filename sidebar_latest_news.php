<?php include 'config.php'; ?>  
<?php
    $sql = "SELECT * from news_sme ORDER BY idn DESC LIMIT 3";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
        ?>   
        <li>
            <div class="text"> <strong class="title"><?php echo $row["news_headline"] ?></strong>
                <!--<p><?php //echo substr($row["news_full_description"], 0, 60) ?></p>-->
                <a href="read_more_news.php?id=<?php echo $row["idn"] ?>" class="readmore">Read More</a> 
            </div>
        </li>
                                         
        <?php 
    }
} else {
    echo "0 results";
} 
?>    
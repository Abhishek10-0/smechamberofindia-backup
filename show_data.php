<?php
include "config.php";

$year = isset($_GET['year']) ? $_GET['year'] : 2026;
?>

<!DOCTYPE html>
<html>
<head>

<title>Past Events Gallery</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<style>

.year-list a{
margin:5px;
font-weight:bold;
cursor:pointer;
}

.gallery{
display:flex;
flex-wrap:wrap;
}

.gallery img{
width:250px;
height:180px;
margin:10px;
border-radius:6px;
}

.nav-btn{
margin:10px;
padding:8px 15px;
background:#eee;
cursor:pointer;
display:inline-block;
}

</style>

</head>

<body>

<!-- YEAR MENU -->

<div class="year-list">

<?php
for($y=2026;$y>=1993;$y--){
echo "<a onclick='loadYear($y)'>$y</a> | ";
}
?>

</div>

<br>

<div id="gallery">Loading Events...</div>

<script>

function loadYear(year){

$("#gallery").html("Loading Events...");

$.ajax({
url:"show_data.php",
type:"GET",
data:{year:year,ajax:1},
success:function(data){
$("#gallery").html(data);
}
});

}

// first load
loadYear(2026);

</script>

<?php

if(isset($_GET['ajax'])){

$sql="SELECT * FROM pastevent_gallery WHERE year_name='$year'";
$result=$conn->query($sql);

if($result->num_rows>0){

while($row=$result->fetch_assoc()){

echo "<h3>".$row['event-date']." ".$row['pastevent-name']."</h3>";

$images=explode(",",$row["yearwise_images"]);
$titles=explode("|",$row["pastevent_image_content"]);

echo "<div class='gallery'>";

for($i=0;$i<count($images);$i++){
?>

<a data-fancybox="gallery"
data-caption="<?php echo $titles[$i]; ?>"
href="images/pastevent-big-images/<?php echo $images[$i]; ?>.JPG">

<img loading="lazy"
src="https://smedatabank.com/pastevent-image/<?php echo $images[$i]; ?>.JPG">

</a>

<?php
}

echo "</div>";

}

}else{

echo "No events found";

}


// PREVIOUS NEXT YEAR

$prev = $year + 1;
$next = $year - 1;

echo "<div style='margin-top:20px'>";

if($prev <= 2026){
echo "<span class='nav-btn' onclick='loadYear($prev)'>Previous Year</span>";
}

if($next >= 1993){
echo "<span class='nav-btn' onclick='loadYear($next)'>Next Year</span>";
}

echo "</div>";

exit;

}

?>

</body>
</html>
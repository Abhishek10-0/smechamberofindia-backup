<?php
include 'config.php';

$year = isset($_GET['year']) ? $_GET['year'] : '';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Gallery | Past Events | SME Chamber of India</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Fancybox -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<style>
.container { max-width:1170px; margin:auto; }

.span3 { width:23%; float:left; margin:1%; }
img.rounded { width:100%; height:200px; object-fit:cover; }

.accordion-item { border:1px solid #ddd; margin-bottom:10px; }

.accordion-header {
    background:#f5f5f5;
    padding:12px;
    cursor:pointer;
    display:flex;
    justify-content:space-between;
}

.accordion-body {
    display:none;
    padding:15px;
}

.row::after {
    content:"";
    display:block;
    clear:both;
}

#nav {
    height: 70px;
}

a { text-decoration:none; margin-right:5px; }
</style>
</head>

<body>

<?php include 'header.php'; ?>

<div class="container">

<h2>Past Events</h2>

<!-- 🔹 YEAR LIST -->
<b>
<?php for ($y = 2026; $y >= 1993; $y--) { ?>
    <a href="?year=<?php echo $y; ?>">
        <?php echo $y; ?>
    </a> |
<?php } ?>
</b>

<br><br>

<?php if($year != '') { ?>

    <h3>Events of Year <?php echo $year; ?></h3>
    <a href="?">← Back to All Years</a>
    <br><br>

<?php
$sql = "SELECT * FROM pastevent_gallery WHERE year_name='$year'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $images = explode(",", $row["yearwise_images"]);
        $titles = explode("|", $row["pastevent_image_content"]);
        $idy = $row['idy'];
?>

<div class="accordion-item">

    <!-- HEADER -->
    <div class="accordion-header" onclick="toggleAccordion('<?php echo $idy; ?>')">
        <strong>
            <?php echo $row['event-date']; ?> - <?php echo $row['pastevent-name']; ?>
        </strong>
        <span id="icon_<?php echo $idy; ?>">+</span>
    </div>

    <!-- BODY -->
    <div id="acc_<?php echo $idy; ?>" class="accordion-body">

        <h4><?php echo $row["past-event-full-detail"]; ?></h4>

        <div class="row">
            <?php foreach ($images as $i => $img) { 
                if(trim($img) == '') continue;
            ?>
                <div class="span3">
                    <a data-fancybox="gallery"
                       data-caption="<?php echo $titles[$i] ?? ''; ?>"
                       href="images/pastevent-big-images/<?php echo $img; ?>.JPG">

                        <img class="rounded"
                             src="https://smedatabank.com/pastevent-image/<?php echo $img; ?>.JPG">
                    </a>
                </div>
            <?php } ?>
        </div>

    </div>

</div>

<?php
    }

} else {
    echo "
    <div style='text-align:center; padding:40px;'>
        <h3 style='color:red;'>404 Error - File or Directory Not Found</h3>
        <p>The resource you are looking for might be unavailable.</p>
    </div>";
}
?>

<?php } else { ?>

    <h3>Select a Year to View Events</h3>

<?php } ?>

</div>

<?php include 'footer.php'; ?>

<script>
let currentOpen = null;

function toggleAccordion(id) {

    let body = document.getElementById("acc_" + id);
    let icon = document.getElementById("icon_" + id);

    if (currentOpen === id) {
        body.style.display = "none";
        icon.innerHTML = "+";
        currentOpen = null;
        return;
    }

    if (currentOpen !== null) {
        document.getElementById("acc_" + currentOpen).style.display = "none";
        document.getElementById("icon_" + currentOpen).innerHTML = "+";
    }

    currentOpen = id;

    body.style.display = "block";
    icon.innerHTML = "−";
}
</script>

</body>
</html>
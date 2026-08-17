<?php
include 'config.php';

/* ================= AJAX: LOAD IMAGES ================= */
if(isset($_POST['event_id'])) {

    $idy = $_POST['event_id'];

    $sql = "SELECT * FROM pastevent_gallery WHERE idy='$idy'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()) {

        $images = explode(",", $row["yearwise_images"]);
        $titles = explode("|", $row["pastevent_image_content"]);



        echo '<div id="banner"><div id="inner-banner"> <h1>'.$row["past-event-full-detail"].'</h1></div></div>';
        echo '<div class="row" style="margin-left: 5px;">';

        foreach ($images as $i => $img) {
?>
            <div class="span3">
                <a data-fancybox="gallery"
                   data-caption="<?php echo $titles[$i] ?? ''; ?>"
                   href="images/pastevent-big-images/<?php echo $img; ?>.JPG">

                    <img class="rounded"
                         loading="lazy"
                         src="https://smedatabank.com/pastevent-image/<?php echo $img; ?>.JPG">
                </a>
            </div>
<?php
        }

        echo '</div>';
    }
    exit;
}

/* ================= AJAX: LOAD EVENTS ================= */
if(isset($_POST['year'])) {

    $year = $_POST['year'];

    $sql = "SELECT idy, `event-date`, `pastevent-name` FROM pastevent_gallery WHERE year_name='$year'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo '<div class="accordion-container">';

        while ($row = $result->fetch_assoc()) {
            $idy = $row['idy'];
?>
            <div class="accordion-item">

                <div class="accordion-header" onclick="toggleAccordion('<?php echo $idy; ?>')">
                    <strong>
                        <?php echo $row['event-date']; ?> <?php echo $row['pastevent-name']; ?>
                    </strong>
                    <span class="icon" id="icon_<?php echo $idy; ?>">+</span>
                </div>

                <div id="acc_<?php echo $idy; ?>" class="accordion-body"></div>

            </div>
<?php
        }

        echo '</div>';

    } else {
        // ✅ 404 MESSAGE
        echo "
        <div style='text-align:center; padding:40px;'>
            <h3 style='color:red;'>404 Error - File or Directory Not Found</h3>
            <p style='font-size:16px; font-weight:bold;'>
                The resource you are looking for might have been removed or is temporarily unavailable.
            </p>
        </div>";
    }

    exit;
}
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

<!-- jQuery (ONLY ONCE) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Fancybox -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<style>
body { font-family: Arial; }

.span3 {
    width: 23%;
    float: left;
    margin: 1%;
}

img.rounded {
    width: 100%;
    height: 200px;
    object-fit: cover;
}
span.icon {
    font-size: 28px;
}
.accordion-item {
    
    margin-bottom: 10px;
}

.accordion-header {
    border: 1px solid #ddd;
    background: #f5f5f5;
    padding: 12px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
}

.accordion-header:hover {
    background-color: #29688a;
    color:#fff;
}

.accordion-body {
    display: none;
    
}

/* important fix */
.row::after {
    content: "";
    display: block;
    clear: both;
}
.container {
    max-width: 1170px;
    width: 100%;
    margin: 0 auto;
}
.head-topbar {
    background-color: #29688a;
}
strong.logo:before {
    position: absolute;
    left: 0;
    bottom: -20px;
    content: '';
    width: 0px;
    height: 0px;
    border-style: solid;
    border-width: 20px 165px 0 165px;
    border-color: transparent transparent transparent;
    z-index: 9;
}
strong.logo:before, #nav li.active a:before, #nav li:hover>a:before, .widget-box-inner:hover .round a.inner:before, .timeline-project-box .holder .heading-area:before, .event-heading:before, #nav li:hover>a, .color-1:before, #nav li.active>a, .color-2:before, .color-3:before, .color-4:before, .color-5:before {
    border-top-color: white;
}
.head-topbar .left ul li a {
    font: 400 12px / 12px 'Roboto Slab', serif;
}
div#inner-banner {
    background-color: #29688a;
}
.accordion-header strong {
    text-transform: uppercase;
    font: 400 18px 'Roboto Slab';
}
#inner-banner h1 {
   
    font-size: 22px;
    padding-left: 20px;
}
.accordition-box .accordion-heading .accordion-toggle:hover
</style>
</head>

<body>

<?php include 'header.php'; ?>
<div id="banner" style="height: 75px;">
                    <div id="inner-banner">
                        <div class="container">
                            <div class="row-fluid">
                                <h1 style="text-transform: none;">Past Events</h1>
                            </div>
                        </div>
                    </div>
                </div>
<ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li>Past</li>
                </ul>
<div class="container">
    

    <!-- YEAR LIST -->
    <b>
    <?php for ($year = 2026; $year >= 1993; $year--) { ?>
        <a href="javascript:void(0)" onclick="loadYear(<?php echo $year; ?>)">
            <?php echo $year; ?>
        </a> |
    <?php } ?>
    </b>

    <br><br>

    <div id="result"></div>
</div>

<?php include 'footer.php'; ?>

<script>

// LOAD EVENTS FAST
function loadYear(year) {
    $.ajax({
        url: "",
        method: "POST",
        data: {year: year},
        success: function(data) {
            $("#result").html(data);
        }
    });
}

// ACCORDION LOGIC
let currentOpen = null;

function toggleAccordion(id) {

    let body = document.getElementById("acc_" + id);
    let icon = document.getElementById("icon_" + id);

    // close same
    if (currentOpen === id) {
        body.style.display = "none";
        icon.innerHTML = "+";
        currentOpen = null;
        return;
    }

    // close previous
    if (currentOpen !== null) {
        document.getElementById("acc_" + currentOpen).style.display = "none";
        document.getElementById("icon_" + currentOpen).innerHTML = "+";
    }

    currentOpen = id;

    // LOAD IMAGES ONLY FIRST TIME
    if (body.innerHTML.trim() === "") {

        $.ajax({
            url: "",
            method: "POST",
            data: {event_id: id},
            success: function(data) {
            body.innerHTML = data;
            body.style.display = "block";
            icon.innerHTML = "−";

            // 🔥 RE-INITIALIZE FANCYBOX
            Fancybox.bind('[data-fancybox="gallery"]', {});
        }
        });

    } else {
        body.style.display = "block";
        icon.innerHTML = "−";
    }
}

// DEFAULT LOAD
$(document).ready(function(){
    loadYear(2026);
});

</script>

</body>
</html>
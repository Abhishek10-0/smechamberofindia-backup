<?php
include 'config.php';

/* ================= LOAD IMAGES (ON CLICK) ================= */
if(isset($_POST['event_id'])) {

    $idy = $_POST['event_id'];

    $sql = "SELECT * FROM pastevent_gallery WHERE idy='$idy'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()) {

        $images = explode(",", $row["yearwise_images"]);
        $titles = explode("|", $row["pastevent_image_content"]);

        echo '<h4>'.$row["past-event-full-detail"].'</h4>';
        echo '<div class="row">';

        for ($j = 0; $j < count($images); $j++) {
?>
            <div class="span3">
                <a data-fancybox="gallery"
                   data-caption="<?php echo $titles[$j] ?? ''; ?>"
                   href="images/pastevent-big-images/<?php echo $images[$j]; ?>.JPG">

                    <img class="rounded"
                         loading="lazy"
                         src="https://smedatabank.com/pastevent-image/<?php echo $images[$j]; ?>.JPG">
                </a>
            </div>
<?php
        }

        echo '</div>';
    }

    exit;
}

/* ================= LOAD EVENTS (YEAR) ================= */
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

                <!-- HEADER (FAST LOAD) -->
                <div class="accordion-header" onclick="toggleAccordion('<?php echo $idy; ?>')">
                    <strong>
                        <?php echo $row['event-date']; ?> - <?php echo $row['pastevent-name']; ?>
                    </strong>
                    <span id="icon_<?php echo $idy; ?>">+</span>
                </div>

                <!-- BODY (EMPTY FIRST) -->
                <div id="acc_<?php echo $idy; ?>" class="accordion-body"></div>

            </div>
<?php
        }

        echo '</div>';
    }

    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fast Accordion Gallery</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

    <style>
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
    </style>
</head>

<body>

<h2>Past Events</h2>

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

<script>

// LOAD EVENTS (FAST)
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

// TOGGLE ACCORDION + LOAD IMAGES
function toggleAccordion(id) {

    // close all
    document.querySelectorAll('.accordion-body').forEach(el => {
        el.style.display = 'none';
    });

    document.querySelectorAll('[id^="icon_"]').forEach(el => {
        el.innerHTML = '+';
    });

    let body = document.getElementById("acc_" + id);
    let icon = document.getElementById("icon_" + id);

    if (body.innerHTML.trim() === "") {

        // 🔥 LOAD IMAGES ONLY ON CLICK
        $.ajax({
            url: "",
            method: "POST",
            data: {event_id: id},
            success: function(data) {
                body.innerHTML = data;
                body.style.display = "block";
                icon.innerHTML = "−";
            }
        });

    } else {
        body.style.display = "block";
        icon.innerHTML = "−";
    }
}

// default load
$(document).ready(function(){
    loadYear(2026);
});
</script>

</body>
</html>
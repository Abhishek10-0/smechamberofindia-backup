<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../config.php';

$sql = "SELECT * from events_sme ORDER BY ide DESC";
$result = $conn->query($sql);

print_r($result);

if ($result->num_rows > 0) {
    
    $data =  (object) [
        'status' => 200,
        'data' => $result
    ];
    
    echo json_encode($data);
    
} else {
    echo "The resource you are looking for might have been removed or is temporarily unavailable.";
} ?>
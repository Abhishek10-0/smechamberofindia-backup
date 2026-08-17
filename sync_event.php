<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

header("Content-Type: application/json");
require_once __DIR__ . "/config.php";

$headers = array_change_key_case(getallheaders(), CASE_UPPER);
$secret = $headers['X-SYNC-SECRET'] ?? '';

define('PHP_SITE_SYNC_SECRET', 'YAHA_EK_STRONG_RANDOM_SECRET_DAAL_DO_123456');

if ($secret !== PHP_SITE_SYNC_SECRET) {
    http_response_code(401);
    echo json_encode(["error" => "Unauthorized"]);
    exit;
}

$payload = json_decode(file_get_contents("php://input"), true);
if (!$payload || !isset($payload['id'])) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid payload"]);
    exit;
}

try {
    $sourceEventId = intval($payload['id']);
    $name          = $conn->real_escape_string($payload['name'] ?? '');
    $slug		   = $conn->real_escape_string($payload['slug'] ?? '');
	if (empty($slug)) {
    $slug = 'event-' . $sourceEventId . '-' . time();
	}
    $location      = $conn->real_escape_string($payload['location'] ?? '');
    $image         = $conn->real_escape_string($payload['image'] ?? '');
    $galleryImages = json_encode($payload['galleryImages'] ?? []);
    $startDate     = !empty($payload['startDate']) ? date('Y-m-d H:i:s', strtotime($payload['startDate'])) : null;
    $startTime     = $conn->real_escape_string($payload['startTime'] ?? '');
    $status        = $conn->real_escape_string($payload['status'] ?? 'PUBLISHED');

    $stmt = $conn->prepare("SELECT id FROM sync_event WHERE source_event_id = ?");
    $stmt->bind_param("i", $sourceEventId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
       
        $row = $result->fetch_assoc();
        $eventId = $row['id'];

        $update = $conn->prepare("UPDATE sync_event SET name=?, slug=?, location=?, image=?, gallery_images=?, start_date=?, start_time=?, status=? WHERE id=?");
        $update->bind_param("ssssssssi", $name, $slug, $location, $image, $galleryImages, $startDate, $startTime, $status, $eventId);
        $update->execute();
    } else {
        $insert = $conn->prepare("INSERT INTO sync_event (source_event_id, name, slug, location, image, gallery_images, start_date, start_time, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $insert->bind_param("issssssss", $sourceEventId, $name, $slug, $location, $image, $galleryImages, $startDate, $startTime, $status);
        $insert->execute();
        $eventId = $conn->insert_id;
    }

    echo json_encode(["success" => true, "eventId" => $eventId]);
    $conn->close();

} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage(), "file" => basename($e->getFile()), "line" => $e->getLine()]);
}
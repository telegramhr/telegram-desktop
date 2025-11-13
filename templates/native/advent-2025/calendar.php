<?php
header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

$jsonFile = __DIR__ . '/assets/calendar.json';

if (file_exists($jsonFile)) {
    $data = file_get_contents($jsonFile);

    $decoded = json_decode($data, true);
    if ($decoded !== null) {
        echo json_encode($decoded);
    } else {
        echo json_encode([
            "error" => "JSON not valid",
            "raw" => $data
        ]);
    }
} else {
    echo json_encode([
        "error" => "calendar.json not exist",
        "dir" => __DIR__
    ]);
}

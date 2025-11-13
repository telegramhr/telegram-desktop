<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';

header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');


try {
    $option = get_option('advent_2025');
    $decoded = $option ? maybe_unserialize($option) : null;

    echo json_encode([
        'success' => (bool)$decoded,
        'data'    => $decoded ?? null
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
} catch (Throwable $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}

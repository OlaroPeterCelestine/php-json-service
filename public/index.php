<?php
declare(strict_types=1);

header('Content-Type: application/json');

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === '/health') {
    echo json_encode([
        'status' => 'ok',
        'service' => 'showcase-php-api',
        'time' => gmdate('c'),
    ]);
    exit;
}

if ($path === '/api/v1/hello') {
    echo json_encode(['message' => 'Hello from PHP API']);
    exit;
}

http_response_code(404);
echo json_encode(['error' => 'Not found']);

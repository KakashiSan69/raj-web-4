<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve index.html for root path if it exists
if ($uri === '/' || $uri === '') {
    if (file_exists(__DIR__ . '/index.html')) {
        require __DIR__ . '/index.html';
        exit;
    }
}

// If file exists, serve it directly
if (file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// Fallback to index.php for directory or PHP routing
if (file_exists(__DIR__ . '/index.php')) {
    require __DIR__ . '/index.php';
    exit;
}

return false;

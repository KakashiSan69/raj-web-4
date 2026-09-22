<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve index.html for root path if it exists
if ($uri === '/' || $uri === '') {
    if (file_exists(__DIR__ . '/index.html')) {
        // Add gzip for HTML
        header('Content-Type: text/html; charset=UTF-8');
        header('Cache-Control: no-cache, must-revalidate');
        readfile(__DIR__ . '/index.html');
        exit;
    }
}

// If file exists, serve it with proper caching and content-type
if (file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    $ext = pathinfo($uri, PATHINFO_EXTENSION);
    $mimeTypes = [
        'webp' => 'image/webp',
        'svg'  => 'image/svg+xml',
        'css'  => 'text/css',
        'js'   => 'application/javascript',
        'mp4'  => 'video/mp4',
        'png'  => 'image/png',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'woff2'=> 'font/woff2',
    ];

    if (isset($mimeTypes[$ext])) {
        header('Content-Type: ' . $mimeTypes[$ext]);
    }

    // Cache static assets for 1 year (immutable)
    if (in_array($ext, ['webp', 'svg', 'png', 'jpg', 'jpeg', 'mp4', 'woff2'])) {
        header('Cache-Control: public, max-age=31536000, immutable');
    } elseif ($ext === 'css' || $ext === 'js') {
        header('Cache-Control: public, max-age=86400');
    }

    return false;
}

// Fallback to index.php for directory or PHP routing
if (file_exists(__DIR__ . '/index.php')) {
    require __DIR__ . '/index.php';
    exit;
}

return false;

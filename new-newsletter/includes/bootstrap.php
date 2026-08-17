<?php
/** Shared bootstrap for every Newsletter endpoint. */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('NEWSLETTER_ROOT', dirname(__DIR__));

$settingsFile = __DIR__ . '/settings.php';
if (!is_file($settingsFile)) {
    http_response_code(500);
    exit('Newsletter configuration is missing. Copy includes/settings.example.php to includes/settings.php.');
}

$newsletterSettings = require $settingsFile;
if (!is_array($newsletterSettings)) {
    http_response_code(500);
    exit('Newsletter configuration is invalid.');
}

/* Reuse the website's established MySQLi connection; do not open another one. */
if (!isset($conn) || !($conn instanceof mysqli)) {
    $parentConfig = dirname(NEWSLETTER_ROOT) . '/config.php';
    if (!is_file($parentConfig)) {
        http_response_code(500);
        exit('The parent config.php database connection could not be found.');
    }
    require_once $parentConfig;
}

if (!isset($conn) || !($conn instanceof mysqli)) {
    http_response_code(500);
    exit('The existing database connection is unavailable.');
}

$conn->set_charset('utf8mb4');

require_once __DIR__ . '/functions.php';

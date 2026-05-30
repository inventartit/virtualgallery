<?php
/**
 * Virtual Gallery Configuration
 * Database and application settings
 */

// Environment
define('ENVIRONMENT', 'development'); // development or production

// Application settings
define('APP_NAME', 'Virtual Gallery');
define('APP_VERSION', '1.0.0');
define('APP_URL', 'http://localhost');

// Database configuration (optional - for future integration)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'virtual_gallery');

// API settings
define('API_ENABLED', true);
define('API_VERSION', 'v1');

// Gallery settings
define('GALLERY_MAX_ARTWORKS', 100);
define('GALLERY_CURRENCY', 'USD');

// Error handling
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// CORS settings
define('ALLOWED_ORIGINS', [
    'http://localhost',
    'http://localhost:8000',
    'http://localhost:3000'
]);

?>

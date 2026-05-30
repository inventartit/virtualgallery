<?php
/**
 * Virtual Gallery API
 * Handles requests for gallery data, artwork information, and user interactions
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Include configuration
require_once 'config.php';

// Get request method
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestPath = str_replace('/api.php', '', $requestPath);

// Route requests
switch($requestPath) {
    case '/artworks':
        handleArtworks($requestMethod);
        break;
    
    case '/artwork':
        handleArtworkDetail($requestMethod);
        break;
    
    case '/gallery':
        handleGalleryInfo($requestMethod);
        break;
    
    default:
        http_response_code(404);
        echo json_encode(['error' => 'Endpoint not found']);
        break;
}

/**
 * Handle artworks list request
 */
function handleArtworks($method) {
    if ($method === 'GET') {
        $artworks = [
            [
                'id' => 'artwork1',
                'title' => 'Red Horizon',
                'artist' => 'Artist One',
                'description' => 'A stunning abstract representation of sunset over mountains.',
                'year' => 2023,
                'price' => 5000,
                'medium' => 'Oil on Canvas'
            ],
            [
                'id' => 'artwork2',
                'title' => 'Ocean Dreams',
                'artist' => 'Artist Two',
                'description' => 'Ethereal waves captured in vibrant turquoise tones.',
                'year' => 2023,
                'price' => 3500,
                'medium' => 'Acrylic on Canvas'
            ],
            [
                'id' => 'artwork3',
                'title' => 'Sky Bridge',
                'artist' => 'Artist Three',
                'description' => 'A modern interpretation of connection and harmony.',
                'year' => 2024,
                'price' => 4200,
                'medium' => 'Mixed Media'
            ]
        ];
        
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'data' => $artworks,
            'count' => count($artworks)
        ]);
    } else {
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
    }
}

/**
 * Handle individual artwork detail request
 */
function handleArtworkDetail($method) {
    if ($method === 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // In production, fetch from database
        $artwork = [
            'id' => $id,
            'title' => 'Artwork Title',
            'artist' => 'Artist Name',
            'description' => 'Detailed description of the artwork',
            'year' => 2024,
            'price' => 5000,
            'medium' => 'Oil on Canvas',
            'dimensions' => '100cm x 150cm',
            'availability' => 'available'
        ];
        
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'data' => $artwork
        ]);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid request']);
    }
}

/**
 * Handle gallery information request
 */
function handleGalleryInfo($method) {
    if ($method === 'GET') {
        $galleryInfo = [
            'name' => 'Virtual Gallery',
            'description' => 'A 3D virtual art gallery built with A-Frame',
            'curator' => 'Gallery Team',
            'established' => 2024,
            'totalArtworks' => 6,
            'openingHours' => '24/7',
            'location' => 'Virtual'
        ];
        
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'data' => $galleryInfo
        ]);
    } else {
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
    }
}
?>

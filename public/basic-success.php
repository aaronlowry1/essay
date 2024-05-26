<?php
// Check the HTTP referer
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$allowed_referer = 'https://buy.stripe.com';

// Check if the user was redirected from the allowed referer
if (strpos($referer, $allowed_referer) === 0) {
    // Forward to basic-generator.php
    header('Location: basic-generator.php');
    exit;
} else {
    // Forward to forbidden.html
    header('Location: forbidden.html');
    exit;
}

<?php
// check_update.php

// Example: version data in your database or config file
$latest_version = '1.2.0'; // You can fetch this dynamically from your database

// Get the version from the request
$client_version = isset($_GET['version']) ? $_GET['version'] : '0.0.0';

// Compare versions (you can use a more sophisticated version comparison logic)
if (version_compare($client_version, $latest_version, '<')) {
    echo json_encode(['update_available' => true, 'latest_version' => $latest_version]);
} else {
    echo json_encode(['update_available' => false]);
}
?>

<?php
$conn = new mysqli('localhost', 'root', '', 'opencartly');

echo "Checking homepage modules...\n\n";

// Check banners
$result = $conn->query('SELECT COUNT(*) as total FROM oc_banner');
$row = $result->fetch_assoc();
echo "Banners in database: " . $row['total'] . "\n";

// Check layout modules
$result = $conn->query("SELECT COUNT(*) as total FROM oc_layout");
$row = $result->fetch_assoc();
echo "Layouts: " . $row['total'] . "\n";

// Check modules
$result = $conn->query("SELECT code, name FROM oc_module LIMIT 10");
echo "\nAvailable modules:\n";
while($row = $result->fetch_assoc()) {
    echo "  - " . $row['code'] . ": " . $row['name'] . "\n";
}

$conn->close();
?>

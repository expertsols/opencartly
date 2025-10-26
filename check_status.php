<?php
$conn = new mysqli('localhost', 'root', '', 'opencartly');

echo "Checking OpenCart status...\n\n";

$result = $conn->query('SELECT COUNT(*) as total FROM oc_product');
$row = $result->fetch_assoc();
echo "Products in database: " . $row['total'] . "\n";

$result = $conn->query('SELECT COUNT(*) as total FROM oc_module WHERE code = "featured"');
$row = $result->fetch_assoc();
echo "Featured modules: " . $row['total'] . "\n";

$result = $conn->query('SELECT name FROM oc_store_info WHERE store_id = 0');
if($row = $result->fetch_assoc()) {
    echo "Store name: " . $row['name'] . "\n";
}

$conn->close();
?>


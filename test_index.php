<?php
echo "Testing index.php access...\n";
echo "config.php exists: " . (file_exists('config.php') ? 'YES' : 'NO') . "\n";
echo "Storage directory exists: " . (is_dir('storage') ? 'YES' : 'NO') . "\n";
echo "Catalog directory exists: " . (is_dir('catalog') ? 'YES' : 'NO') . "\n";
echo "System directory exists: " . (is_dir('system') ? 'YES' : 'NO') . "\n";
?>


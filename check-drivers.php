<?php
echo "<h1>SQL Server Driver Check</h1>";

echo "<h2>Loaded PDO Drivers:</h2>";
echo "<pre>";
print_r(PDO::getAvailableDrivers());
echo "</pre>";

echo "<h2>All Loaded Extensions:</h2>";
$extensions = get_loaded_extensions();
sort($extensions);
echo "<ul>";
foreach ($extensions as $ext) {
    if (stripos($ext, 'sql') !== false) {
        echo "<li style='color: green; font-weight: bold;'>$ext ✓</li>";
    } else {
        echo "<li>$ext</li>";
    }
}
echo "</ul>";

echo "<h2>Looking for SQL Server Extensions:</h2>";
if (extension_loaded('pdo_sqlsrv')) {
    echo "<p style='color: green; font-weight: bold;'>✓ pdo_sqlsrv is LOADED</p>";
} else {
    echo "<p style='color: red; font-weight: bold;'>✗ pdo_sqlsrv is NOT loaded</p>";
}

if (extension_loaded('sqlsrv')) {
    echo "<p style='color: green; font-weight: bold;'>✓ sqlsrv is LOADED</p>";
} else {
    echo "<p style='color: red; font-weight: bold;'>✗ sqlsrv is NOT loaded</p>";
}

<?php
echo "PHP Version: " . phpversion() . "\n";
echo "pdo_sqlsrv: " . (extension_loaded('pdo_sqlsrv') ? 'LOADED' : 'NOT LOADED') . "\n";
echo "sqlsrv: " . (extension_loaded('sqlsrv') ? 'LOADED' : 'NOT LOADED') . "\n";

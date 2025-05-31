<?php
if ($_SERVER['REQUEST_URI'] === '/metric') {
    echo "Hola mundo desde Laravel fallback manual";
    exit;
}

require _DIR_.'/../vendor/autoload.php';
$app = require_once _DIR_.'/../bootstrap/app.php';
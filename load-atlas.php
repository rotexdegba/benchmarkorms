<?php
include './vendor/autoload.php';
ini_set('memory_limit', -1); // no memory limit

use Atlas\Orm\Atlas;

$atlasSettings  = require_once './atlas.php';
$atlas = Atlas::new(
    $atlasSettings['pdo'][0],
    $atlasSettings['pdo'][1],
    $atlasSettings['pdo'][2]
);

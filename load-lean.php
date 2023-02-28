<?php
include './vendor/autoload.php';
ini_set('memory_limit', -1); // no memory limit

$pdo_opts = include __DIR__ . DIRECTORY_SEPARATOR . 'pdo.php';

$leanArgs = $pdo_opts;
$leanArgs[1] ??= '';
$leanArgs[2] ??= '';

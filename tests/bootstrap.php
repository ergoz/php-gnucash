<?php

$vendor = realpath(__DIR__ . '/../vendor/autoload.php');

if (file_exists($vendor)) {
    $loader = include $vendor;
}

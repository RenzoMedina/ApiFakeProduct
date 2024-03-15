<?php
require "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();
require "routes/api.php";
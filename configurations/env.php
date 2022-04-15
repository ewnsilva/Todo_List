<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

$s3_bucket = getenv('APP_NAME');
<?php
session_start();
include('../app/autoloader.php');

use App\Core;

$site = new Core($_GET);

echo $site->getSite();


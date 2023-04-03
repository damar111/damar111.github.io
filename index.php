<?php

define('PATH_CONFIG', 'app/config/');
define('PATH_CONTROLLER', 'app/controller/');
define('PATH_MODEL', 'app/model/');
define('PATH_VIEW', 'resources/view/');
define('PATH_VENDOR', 'vendor/');

// Make sure you have Composer's autoload file included
require(PATH_VENDOR . 'autoload.php');

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

require('app/__controller.php');
/*
*  ---------------------------
*  Load All Your Model
*  ---------------------------
*/
/* All Model */
require('app/__model.php');
/*
* -------------------
*     MAIN ROUTES
* -------------------
*/
require 'vendor/autoload.php';

// Start ROUTE
$project_location = "/bnsp_hotel";
$me = $project_location;

// For get URL PATH
$request = strtok($_SERVER["REQUEST_URI"], '?');

switch ($request) {
    case $me . '/':
        MainController::index();
        break;
    case $me . '/home':
        MainController::index();
        break;
    case $me . '/price':
        MainController::harga();
        break;
    case $me . '/booking':
        MainController::booking();
        break;
    case $me . '/contact':
        MainController::contact();
        break;
    case $me . '/detail':
        MainController::detail();
        break;
    case $me . '/input':
        MainController::input();
        break;
    default:

        http_response_code(404);
        echo $request;
        echo '===seharusnya===';
        echo $me . '/something';
        echo "404";

        break;
}

<?php

use giordanoberwig\serenatto\Controller\AboutPageController;
use giordanoberwig\serenatto\Controller\ContactPageController;
use giordanoberwig\serenatto\Controller\HomePageController;
use giordanoberwig\serenatto\Controller\PageNotFoundController;

require_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/') {
    new HomePageController();
} else if ($uri == '/sobre') {
    new AboutPageController();
} else if ($uri == '/contato') {
    new ContactPageController();
} else if ($uri == '/404') {
    new PageNotFoundController();
} else {
    http_response_code(404);
    header("location: /404");
}

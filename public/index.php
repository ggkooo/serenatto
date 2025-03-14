<?php

require_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/') {
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'home.php';
} else if ($uri == '/sobre') {
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'about.php';
} else if ($uri == '/contato') {
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'contact.php';
}

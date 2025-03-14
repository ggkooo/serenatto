<?php

namespace giordanoberwig\serenatto\Controller;

class ContactPageController
{
    public function __construct()
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'contact.php';
    }
}
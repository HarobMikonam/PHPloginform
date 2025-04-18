<?php
namespace Loader\Core;
class ResourceLoader
{
    public function loadHeader()
    {
        require( __DIR__ . DIRECTORY_SEPARATOR .'../templates/header.php');
    }
    public function loadFooter()
    {
        require( __DIR__ . DIRECTORY_SEPARATOR .'../templates/footer.php');
    }
}
<?php
namespace Loader\Core;
class ResourceLoader
{
    /**
     * Method to return the header from /templates/
     */
    public function loadHeader()
    {
        require( __DIR__ . DIRECTORY_SEPARATOR .'../templates/header.php');
    }
    /**
     * Method to return the footer from /templates/
     */
    public function loadFooter()
    {
        require( __DIR__ . DIRECTORY_SEPARATOR .'../templates/footer.php');
    }
}
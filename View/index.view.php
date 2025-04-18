<?php
namespace Loader\Core;

$parent = dirname(__DIR__);

require($parent . '/Core/ResourceLoader.php');

$navbar = new ResourceLoader();
$navbar->loadHeader('header.php');
$navbar->loadFooter('footer.php');

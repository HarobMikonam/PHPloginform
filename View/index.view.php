<?php
namespace Loader\Core;
require_once(dirname(__DIR__) . '/Core/functions.php');
findFile('ResourceLoader.php');

$navbar = new ResourceLoader();
$navbar->loadHeader();
$navbar->loadFooter();

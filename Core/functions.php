<?php
/**
 * var_dump() and die() to get logging information.
 * @param $value
 * @return void
 */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

/**
 * Loads a file by including it from the specified directory.
 *
 * @param string $filename The name (or relative path) of the file to load.
 * @param string $directory The directory to load the file from. Defaults to the Core directory.
 *
 * @return void
 */
function findFile($filename, $directory = __DIR__){
    require($directory . '/' . $filename);
}
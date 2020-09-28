<?php

namespace App\Controllers;

abstract class Controller {

    protected function view(string $path, array $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';
        $content = ob_get_clean();
        require VIEWS . 'base.php';
    }
    function cleanString($string)
    {
        // on supprime : majuscules ; / ? : @ & = + $ , . ! ~ * ( ) les espaces multiples et les underscore
        $string = strtolower($string);
        $string = preg_replace("/[^a-z0-9_'\s-]/", "", $string);
        $string = preg_replace("/[\s-]+/", " ", $string);
        $string = preg_replace("/[\s_]/", " ", $string);
        return $string;
    }
}
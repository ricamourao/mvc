<?php

namespace Core;


class View
{
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = "../App/Views/$view"; //relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
//            echo "file not found";
            throw new \Exception("$file not found");
        }
    }

    /*Render template using Twig*/

    public static function renderTemplate($template, $args = [])
    {
        static $twig = null;

        if ($twig === null) {
            $loader = new \Twig_loader_Filesystem('../App/Views');
            $twig = new \Twig_Environment($loader);
        }

        echo $twig->render($template, $args);
    }
}

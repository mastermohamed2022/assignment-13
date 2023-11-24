<?php

class View
{
    public static function load($page_name, $data = [])
    {
        $file = VIEWS . $page_name . ".php";
        if (file_exists($file)) {
            extract($data);
            ob_start();
            require($file);
            ob_end_flush();
        } else {
            echo "This Views " . $page_name . " Does Not Exist";
        }
    }
}
<?php

    function autoload($class) {
        
        //echo $class."<br>";
        $url="".str_replace("\\","/",$class.".php");
        //echo $url."<br>";
        require_once($url);
        //echo $class.".php"."<br>";
    }
    spl_autoload_register("autoload");
?>
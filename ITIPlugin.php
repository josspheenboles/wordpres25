<?php 

    /*
        Plugin Name: ITI
        Description: plugin for testing
        Author: ITI  
    */

    add_action("the_content", "thankyou");

    function thankyou($content){
        return $content .= "thank you for reading";
    }


    add_action("the_title", "checkMyWords");

    function checkMyWords($content){
        $arr1 = ["iti", "WordPress", 1];

        $arr2 = ["ITI", "WORDPRESS", "one"];

        return str_replace($arr1, $arr2, $content);
    }
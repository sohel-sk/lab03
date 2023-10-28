<?php
namespace company\Utility;
use company\Utility\myController;
class App{
    public static function init(){
        echo"App is working";
        $mycontroll = new myController();
        $mycontroll->show();
    }
}
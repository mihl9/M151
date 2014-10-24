<?php
/**
 * Created by PhpStorm.
 * User: Anwender
 * Date: 24.10.2014
 * Time: 09:55
 */

class autoload {
/*
 *  Autor: Michael Huber
 *  Date: 24.10.2014
 *  Access: public
 *  Purpose:
 */
    public static function register($autoloader = null){
        if($autoloader == null){
            spl_autoload_register(array('FW_Autoload', 'load'));
        }else{
            spl_autoload_register($autoloader);
        }
    }
} 
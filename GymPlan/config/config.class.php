<?php
/**
 * Created by PhpStorm.
 * User: Anwender
 * Date: 24.10.2014
 * Time: 09:30
 */

class config {
    private static $instance;
    private $config = array();

    /*
     * Class is in singleton
     *
     */
    private function __construct() {
        $this->readIni("config.ini");
    }

    private function __clone(){}

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Config();
        }

        return self::$instance;
    }

    private function readIni($path) {
        $iniFile = parse_ini_file($path);

        if (!$iniFile) {
            return false;
        }

        foreach ($iniFile as $key => $ini) {
            $this->config[$key] = $ini;
        }
        return true;
    }

    public function setConfig($key, $value) {
        //TODO: implement
    }

    public function getConfig($key) {
        if (array_key_exists($key, $this->config)) {
            return $this->config[$key];
        }
        return false;
    }
} 
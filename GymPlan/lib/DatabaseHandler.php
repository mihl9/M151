<?php
/**
 * Created by PhpStorm.
 * User: Anwender
 * Date: 23.10.2014
 * Time: 14:22
 */

class DatabaseHandler {
    private $SQLCon;
    /**
     * @var mysqli
     */
    private $mysql;
    private $mysqlHost;
    private $mysqlUser;
    private $mysqlPw;
    private $mysqlDB;
    public function __construct() {
        // sdfasfd config ini
        $config = Config::getInstance();
        $this->mysqlHost=$config->getConfig("host");
        $this->mysqlUser=$config->getConfig("user");
        $this->mysqlPw=$config->getConfig("pass");
        $this->mysqlDB=$config->getConfig("db");
    }

    private function open(){
        $result=true;

        $this->mysql = new mysqli($this->mysqlHost, $this->mysqlUser,$this->mysqlPw,$this->mysqlDB);

        if ($this->mysql->connect_error) {
            echo "fail error no: " . $this->mysql->connect_errno;
            exit;
        }

        return $result;
}

    private function close(){
        $result=true;
        if (!$this->mysql->get_connection_stats()) {
            $this->mysql->close();
        }
        return $result;
    }

    public function execute($sql){
        $successful=false;
        $this->open();
        $statement=$this->mysql->prepare($sql);
        if($statement){
            $successful = $statement->execute();
            if($successful){
                $test =$statement->fetch();
            }else{
                //error executing the query
                $successful = false;
            }
        }else{
            $successful = false;
        }
        $this->close();
        return $successful;
    }

    public function executeWithResult($sql){
        $result=array();
        $success=true;
        $this->open();
        $statement=$this->mysql->prepare($sql);
        if($statement){
            $success=$statement->execute();
            if($success){
                $tmpResult = $statement->get_result();
                while($row = $tmpResult->fetch_array()){
                    $result[] = $row;
                }
            }else{
                //failed to execute
                //return false;
                $result = false;
            }
        }else{
            //error within the sql string
            //return false;
            $result = false;
        }
        $this->close();
        return $result;
    }

    public function GetLastID(){
        $result=0;

        return $result;
    }

    public function GetNumberOfRows(){
        $result=0;

        return $result;
    }
} 
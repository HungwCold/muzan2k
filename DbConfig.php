<?php
class Dbconfig {
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    function Dbconfig() {
        $this ->serverName = 'localhost';
        $this ->userName = 'root';
        $this ->passCode = 'root123';
        $this ->dbName = 'demo';
        echo "mai la ae ";
    }
}
?>
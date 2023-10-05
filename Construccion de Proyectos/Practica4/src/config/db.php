<?php   
    class db{
        private $dbhost = '';
        private $dbuser = '';
        private $dbpass = '';
        private $dbname = '';

        public function connect(){
            $mysql_connect_srt = "mysql:host=$this->dbhost;dbname=$this->dbname";

            dd(mysql_connect_srt)

            $dbConnection = new PDO($mysql_connect_srt, $this->dbuser, $this->dbpass);

            $dbConnection->setSAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
            return $dbConnection;
        }
    }
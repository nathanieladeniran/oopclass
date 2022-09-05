<?php 
    
    class DB {

        private $dbname;
        private $dbserver;
        private $username;
        private $password;

        protected function connect() {

            $this->dbname = "sms";
            $this->dbserver = "localhost";
            $this->username = "nathaniel";
            $this->password = "ibiyosi141";

            $konet = new mysqli($this->dbserver, $this->username, $this->password, $this->dbname);
            return $konet;
        }
        


    }

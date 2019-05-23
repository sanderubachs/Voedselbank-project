<?php
    class Connection {
        protected $host     = '';
        protected $database = '';
        protected $username = '';
        protected $password = '';
        protected $conn;

        function __construct() {
            try {
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function closeConnection() {
            $this->conn = null;
        }
    }


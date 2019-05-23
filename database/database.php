<?php
    require_once 'connection.php';

    class Database extends Connection {

        // Select all from given database table
        public function selectAll($table) {
            $query = $this->conn->prepare("SELECT * FROM $table");
            if ($query->execute()) {
                return $query->fetchAll();
            } else {
                return false;
            }
        }

        // Select one from given table where conditions
        public function selectOne($table, $column, $condition, $value) {
            $query = $this->conn->prepare("SELECT * FROM $table WHERE $column $condition $value");
            if ($query->execute()) {
                return $query->fetchAll();
            } else {
                return false;
            }
        }

    }

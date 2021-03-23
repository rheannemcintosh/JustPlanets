<?php

    namespace Database;

    class Connection
    {
        private $pdo;

        public function connect() {
            if ($this->pdo == null) {
                $this->pdo = new \PDO("sqlite:".__DIR__."/database.db");
            }
            return $this->pdo;
        }
    }

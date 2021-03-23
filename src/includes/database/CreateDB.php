<?php

    namespace Database;

    class CreateDB {

        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        /**
         * create tables 
         */
        public function createTables() {
            $commands = [
                'CREATE TABLE IF NOT EXISTS planetary_systems (
                    id INTEGER PRIMARY KEY,
                    name TEXT NOT NULL,
                    estimated_mass INTEGER,
                    estimated_diameter INTEGER
                )',
                'CREATE TABLE IF NOT EXISTS entities (
                    id INTEGER PRIMARY KEY,
                    name TEXT NOT NULL,
                    mass INTEGER,
                    distance INTEGER,
                    colour TEXT,
                    planetary_system_id VARCHAR (255),
                    FOREIGN KEY (planetary_system_id)
                    REFERENCES planetary_systems(id) ON UPDATE CASCADE ON DELETE CASCADE
                )'
            ];
                
            // execute the sql commands to create new tables
            foreach ($commands as $command) {
                $this->pdo->exec($command);
            }
        }
    }

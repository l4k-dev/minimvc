<?php

namespace App\Core;

class Migration
{

    private Database $database;


    public function __construct()
    {
        $this->database = new Database();
    }


    public function run(): void
    {
        $pdo = $this->database->connection();


        $files = glob(
            BASE_PATH . '/database/migrations/*.php'
        );


        sort($files);


        foreach ($files as $file) {

            $migration = require $file;


            echo "Executando: " . basename($file) . PHP_EOL;


            $pdo->exec($migration['up']);


            echo "OK\n\n";
        }
    }
    public function fresh(): void
    {
        $pdo = $this->database->connection();

        $tables = $pdo->query("SHOW TABLES")->fetchAll(\PDO::FETCH_COLUMN);

        $pdo->exec("SET FOREIGN_KEY_CHECKS = 0");

        foreach ($tables as $table) {
            $pdo->exec("DROP TABLE IF EXISTS `$table`");
        }

        $pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

        $this->run();
    }

}
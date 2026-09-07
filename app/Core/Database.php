<?php

namespace App\Core;

use PDO;
use PDOException;
use RuntimeException;

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $config = require BASE_PATH . '/config/database.php';

        $dsn = sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=%s',
            $config['host'],
            $config['port'],
            $config['database'],
            $config['charset']
        );

        try {
            $this->pdo = new PDO(
                $dsn,
                $config['username'],
                $config['password']
            );

            $this->pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $this->pdo->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

        } catch (PDOException $e) {

            error_log(
                'Erro de conexão com o banco de dados: ' .
                $e->getMessage()
            );

            throw new RuntimeException(
                'Não foi possível conectar ao banco de dados. ' .
                'Verifique as configurações do arquivo .env.'
            );
        }
    }

    public function connection(): PDO
    {
        return $this->pdo;
    }
}
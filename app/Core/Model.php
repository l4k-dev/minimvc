<?php

namespace App\Core;

use App\Core\Database;
use PDO;

abstract class Model
{
    protected static string $table;


    protected static function connection(): PDO
    {
        return (new Database())->connection();
    }


    public static function all(): array
    {
        $sql = "SELECT * FROM " . static::$table;

        return self::connection()
            ->query($sql)
            ->fetchAll();
    }


    public static function find(int $id): ?array
    {
        $sql = "SELECT * FROM " . static::$table . " WHERE id = :id";

        $stmt = self::connection()->prepare($sql);

        $stmt->execute([
            'id' => $id
        ]);

        $result = $stmt->fetch();

        return $result ?: null;
    }


    public static function first(): ?array
    {
        $sql = "SELECT * FROM " . static::$table . " LIMIT 1";

        $result = self::connection()
            ->query($sql)
            ->fetch();

        return $result ?: null;
    }
    public static function where(string $column, mixed $value): array
    {
        $sql = "SELECT * FROM " . static::$table . " WHERE {$column} = :value";

        $stmt = self::connection()->prepare($sql);

        $stmt->execute([
            'value' => $value
        ]);

        return $stmt->fetchAll();
    }
    public static function whereOrderBy(
        string $column,
        mixed $value,
        string $orderBy,
        string $direction = 'ASC'
    ): array {

        $direction = strtoupper($direction);

        if (!in_array($direction, ['ASC', 'DESC'], true)) {
            $direction = 'ASC';
        }

        $sql = "SELECT * FROM " . static::$table . "
            WHERE {$column} = :value
            ORDER BY {$orderBy} {$direction}";

        $stmt = self::connection()->prepare($sql);

        $stmt->execute([
            'value' => $value
        ]);

        return $stmt->fetchAll();
    }
}
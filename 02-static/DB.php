<?php

class DB
{
    private const HOST = 'localhost';
    private const NAME = 'webflix';
    private const USER = 'root';
    private const PASSWORD = '';
    private static $db;

    private static function db()
    {
        if (!self::$db) {
            self::$db = new PDO('mysql:host='.DB::HOST.';port=3306;dbname='.DB::NAME, DB::USER, DB::PASSWORD, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        }

        return self::$db;
    }

    public static function select($sql, $bindings = [])
    {
        $query = self::db()->prepare($sql);
        $query->execute($bindings);

        return $query->fetchAll();
    }

    public static function insert($sql, $bindings = [])
    {
        return self::db()->prepare($sql)->execute($bindings);
    }
}

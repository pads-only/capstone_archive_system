<?php

namespace Config;

use PDO;
use PDOException;

class Database
{
    private $connection;

    public function __construct($config, $user = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        try {
            $this->connection = new PDO($dsn, $user, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, /// shows the error properly
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //fetch result as assoc array
                PDO::ATTR_EMULATE_PREPARES => false, // use real prepared statement
            ]);
        } catch (PDOException $e) {
            // die("Database Error: " . $e->getMessage());
            http_response_code(500);

            view("http_codes/500.php");

            die();
        }
    }

    public function query($query, $param = [])
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($param);
        return $stmt;
    }

    public function lastInsertedId()
    {
        return $this->connection->lastInsertId();
    }
}

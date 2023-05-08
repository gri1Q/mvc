<?php

namespace Project\Services;

use PDO;

class Db
{
    private  $host = 'localhost';
    private $dbName = 'diplom';
    private $user = 'root';
    private $password = 'root';
    private $pdo;
    private static $instance;
    public function __construct()
    {
        $this->pdo = new PDO(
            'mysql:host=' . $this->host . ';dbname=' . $this->dbName,
            $this->user,
            $this->password
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, $params = [], $className = 'stdClass'): ?array
    {
        $sth = $this->pdo->prepare($sql);
        var_dump($sth);
        $result = $sth->execute($params);
        var_dump($result);

        if (false === $result) {
            return null;
        }

        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
    }
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

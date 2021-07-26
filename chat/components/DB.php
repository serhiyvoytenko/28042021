<?php


namespace components;

use PDO;

class DB
{
    private string $host;
    private string $login;
    private string $password;
    public string $db;

    private ?PDO $connection = null;

    public function __construct(string $db, string $host, string $login, string $password)
    {
        $this->db = $db;
        $this->password = $password;
        $this->login = $login;
        $this->host = $host;
    }

    public function getConnect(): PDO
    {
        if ($this->connection === null) {
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->db}",
                $this->login,
                $this->password
            );
        }

        return $this->connection;
    }


}
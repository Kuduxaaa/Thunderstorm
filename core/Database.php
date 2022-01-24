<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package Thunderstorm
 */

namespace Thunderstorm;

use Thunderstorm\Application;
use PDO;

class Database {
    protected $pdo;
    protected $stmt;

    public function __construct()
    {
        $dbhost = Application::config('DB_HOST');
        $dbport = Application::config('DB_PORT');
        $dbname = Application::config('DB_NAME');
        $dbuser = Application::config('DB_USERNAME');
        $dbpass = Application::config('DB_PASSWORD');

        $this->pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$dbname, $dbuser, $dbpass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->exec('set names utf8');
    }

    public function __destruct()
    {
        if ($this->pdo !== null) {
            $this->pdo = null;
        }

        if ($this->stmt !== null) {
            $this->stmt = null;
        }
    }

    /**
     * @param $sql
     */
    public function query($sql)
    {
        $this->stmt = $this->pdo->prepare($sql);
        return $this;
    }

    public function fetch_all()
    {
        if (!is_null($this->stmt))
        {
            $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
            $this->stmt->execute();

            return $this->stmt->fetchAll();
        }
    }

    /**
     * @param $param
     * @param $val
     */
    public function bind_param($param, $val)
    {
        $this->stmt->BindParam($param, $val);

        return $this;
    }

    public function row_count()
    {
        $this->stmt->execute();

        return $this->stmt->fetchColumn();
    }

    public function execute()
    {
        return $this->stmt->Execute();
    }
}

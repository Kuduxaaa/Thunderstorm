<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package Thunderstorm
 */

namespace Thunderstorm;
use PDO;

class Database extends \Thunderstorm\Request
{
    protected $pdo;
    protected $stmt;

    public function __construct()
    {
        include_once dirname(__DIR__).'/config.php';
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
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

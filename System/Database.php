<?php

/**
 * @author Kuduxaaa <nikakuduxashvii0@gmail.com>
 * @package App
*/

namespace Thunderstorm;
use PDO;

class Database
{
	protected $pdo;
	protected $stmt;
	
	function __construct()
	{
		include_once dirname(__DIR__) . '/Config.php';
		$this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->pdo->exec("set names utf8");
	}

	function __destruct()
	{
		if ($this->pdo !== null)
		{
			$this->pdo = null;
		}

		if ($this->stmt !== null)
		{
			$this->stmt = null;
		}
	}

	public function query($sql)
	{
		$this->stmt = $this->pdo->prepare($sql);
	}

	public function fetchAll()
	{
		if (!is_null($this->stmt))
		{			
			$this->stmt->setFetchMode(PDO::FETCH_ASSOC);
			$this->stmt->execute();
			return $this->stmt->fetchAll();
		}
	}

	public function bindParam($param, $val){
		$this->stmt->BindParam($param, $val);
	}

	public function rowCount()
	{
		$this->stmt->execute();
		return $this->stmt->fetchColumn();
	}

	public function execute()
	{
		return $this->stmt->Execute();
	}
}

<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package Framework\Firewall
 * Powered By NSS 🛡️
*/

namespace Thunderstorm;
require_once __DIR__ . '/Core/Denylist.php';
use Thunderstorm\Router;

class Firewall {
	private $DetectTOR = true;
	private $ProtectSQLi = true;
	private $ProtectXSS = true;
	private $ProtectLFI = true;
	private $ProtectRFI = true;
	private $ProtectRCE = true;
	private $BlockBots = true;
	private $QueryParams;
	private $deny;

	function __construct()
	{
		@header("X-Powered-By: Nerve");
		@header("X-XSS-Protection: 1; mode=block");
		$this->QueryParams = strtolower($_SERVER['QUERY_STRING'] ?? null);
		$this->deny = new Denylist();
	}

	function Check($arr, $reason='Error')
	{
		if (is_array($arr))
		{
			$temp = str_replace($arr, '~#1NF1CI3D', $this->QueryParams);
			if (strrpos($temp, '~#1NF1CI3D'))
			{
				http_response_code(403);
				Router::renderTemplate ('err.html.twig', [
					'code' => 403,
					'msg' => $reason
				]);
				exit;
			}
		}
	}

	function BlockBadBots($arr)
	{
		$userAgent = $_SERVER['HTTP_USER_AGENT'];
		if (is_array($arr))
		{
			$temp = str_replace($arr, '~#1NF1CI3D', $userAgent);
			if (strpos($temp, '~#1NF1CI3D') !== false)
			{
				die('[IDITE NAXUI]');
			}
		}
	}

	function DetectTOR()
	{
		$client_ip = $_SERVER['REMOTE_ADDR'];
		$temp_ip = str_replace($this->deny::$tor, '~#1NF1CI3D', $client_ip);
		if ($temp_ip !== $client_ip){
			Router::render_error(403, 'TOR');
		}
	}

	function ProtectSQLi()
	{
		$this->Check($this->deny::$sql, 'SQL Injection');
	}

	function ProtectXSS()
	{
		$this->Check($this->deny::$xss, 'XSS Attemp');
	}

	function ProtectLFI()
	{
		$this->Check($this->deny::$lfi, 'LFI Attemp');
	}

	function ProtectRFI()
	{
		$this->Check($this->deny::$rfi, 'RFI Attemp');
	}

	function ProtectRCE()
	{
		$this->Check($this->deny::$rce, 'RCE Attemp');
	}

	function BlockBots()
	{
		$this->BlockBadBots($this->deny::$bot);
	}

	public function Run()
	{
		if (strlen($_SERVER['REQUEST_URI']) > 2000)
		{
			Views::RenderError(403, 'Too long URL');
		}

		if ($this->DetectTOR)
		{
			$this->DetectTOR();
		}

		if ($this->ProtectSQLi)
		{
			$this->ProtectSQLi();
		}

		if ($this->ProtectXSS)
		{
			$this->ProtectXSS();
		}

		if ($this->ProtectLFI)
		{
			$this->ProtectLFI();
		}

		if ($this->ProtectRFI)
		{
			$this->ProtectRFI();
		}

		if ($this->ProtectRCE)
		{
			$this->ProtectRCE();
		}

		if ($this->BlockBots)
		{
			$this->BlockBots();
		}
	}
}
<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package Thunderstorm
 */

namespace Thunderstorm\Modules;

class Utils
{
	public static function encrypt($p, $s='_thunder^_^token_')
	{
		$x = hash('sha256', $p);
		$y = md5($x . $s . $x);
		return $y;
	}
	
	public static function redirect($u)
	{
		header('Location: ' . $u);
		exit;
	}
	
	public static function flash($m)
	{
		$_SESSION['flash'] = $m;
	}
	
	public static function render_flash()
	{
		if (isset($_SESSION['flash'])) {
			$f = $_SESSION['flash'];
			if (is_array($f))
			{
				if (!empty($f))
				{
					foreach($f as $e)
					{
					    echo "$e";
					}
				}
			}
			else
			{
				echo "$f";
			}
			
			unset($_SESSION['flash']);
		}
	}
	
	function random_string($len, $chars = 'qwertyuiopasdfghjklzxcvbnm1234567890')
	{
		$output = '';
		while (strlen($output) !== (int)$len)
		{
			$output .= $chars[rand(0, strlen($chars))];
		}
		return $output;
	}
}
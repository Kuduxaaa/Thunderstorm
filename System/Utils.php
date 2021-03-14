<?php

/**
 * @author Kuduxaaa <nikakuduxashvii0@gmail.com>
 * @package App
*/

namespace Thunderstorm;

class Utils {
	function encrypt($data)
	{
		return md5(hash("sha256", password_hash($data, PASSWORD_DEFAULT)));
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

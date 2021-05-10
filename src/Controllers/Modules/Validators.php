<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package Thunderstorm
 */

namespace Thunderstorm\Modules;

class Validators
{
    public static function validate_email($e)
    {
    	if (filter_var($e, FILTER_VALIDATE_EMAIL)) {
   			return true;
  	  	}
		else
    	{
    		return false;
    	}
    }
    
    public static function validate_phone_number($n)
    {
    	if (strlen(strval($n)) == 9 && $n[0] == "5")
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
}
<?php

/**
 * @author Kuduxaaa <nikakuduxashvii0@gmail.com>
 * @package App
*/

namespace App\Modules;
use App\Modules\Router;

class ErrorHandler
{
    
    function __construct()
    {
        date_default_timezone_set("Asia/Tbilisi");
        set_error_handler([$this, 'ErrorHandler']);
        register_shutdown_function([$this, 'FatalHandler']);
        set_exception_handler([$this, 'ExceptionHandler']);
    }

    function ErrorHandler($errno, $errstr, $errfile, $errline)
    {
        if (!(error_reporting() & $errno))
        {
            return false;
        }

        $errstr = htmlspecialchars($errstr);

        $data = [
            'err_code' => $errno,
            'err_msg' => $errstr,
            'err_file' => $errfile,
            'err_line' => $errline
        ];

        Router::render_code_error($data);
        return true;
    }

    function FatalHandler() { 
        $error = error_get_last();


        $data = [
            'err_code' => 0,
            'err_msg' => $error['message'],
            'err_file' => $error['file'],
            'err_line' =>  $error['line']
        ];

        if ($error && ($error['type'] == E_PARSE)) {
           Router::render_code_error($data);
        } 
    }

    function ExceptionHandler($e)
    {
        $data = [
            'err_code' => 0,
            'err_msg' => $e->getMessage(),
            'err_file' => $e->getFile(),
            'err_line' =>  $e->getLine()
        ];

        Router::render_code_error($data);
    }
}
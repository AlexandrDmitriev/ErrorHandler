<?php

namespace ErrorHandler;

use ErrorHandler\Exception\ErrorException;

class ErrorHandler
{
    public function __construct(){
        set_error_handler(array($this, 'handle'));
    }

    public function handler($number, $message, $file = '', $line = 0, array $context = array())
    {
        throw new ErrorException($number, $message, $file, $line, $context);
    }
} 

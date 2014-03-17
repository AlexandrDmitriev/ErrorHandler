<?php

namespace ErrorHandler\Exception;

class ErrorException extends \Exception
{
    const ERROR_CODE = 601;

    protected $errorNumber;

    protected $context;

    /**
     * @param string     $number
     * @param int        $message
     * @param string     $file
     * @param string     $line
     * @param array      $context
     */
    public function __construct($number, $message, $file, $line, $context)
    {
        parent::__construct();

        $this->message = "Error Handler Exception: '{$message}' number: {$number}";
        $this->code = ErrorException::ERROR_CODE;
        $this->errorNumber = $number;
        $this->file = $file;
        $this->line = $line;
        $this->context = $context;
    }
}

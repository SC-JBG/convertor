<?php
namespace Vinolog\Convertor\Exceptions;

use Exception;
use Throwable;

class ConvertorException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}
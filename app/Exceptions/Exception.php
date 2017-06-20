<?php

namespace App\Exceptions;

use \Exception as PHPException;
use Throwable;
use Ramsey\Uuid\Uuid;
use \Log;


class Exception extends PHPException
{

    private $uuid;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {

        $this->uuid = Uuid::uuid4();
        $message = $this->uuid . ": " . $message;
        parent::__construct($message, $code, $previous);

        Log::error($this->getMessage());
        Log::error($this->getTraceAsString());

    }


}
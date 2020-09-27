<?php


namespace App\Domain\Exceptions;


class EmptyNameException extends \Exception
{
    public function __construct()
    {
        parent::__construct();
        $this->message = 'Error! The name passed is empty';
    }
}

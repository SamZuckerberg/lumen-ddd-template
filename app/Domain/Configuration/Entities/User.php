<?php


namespace App\Domain\Configuration\Entities;


use App\Domain\Exceptions\EmptyNameException;

class User
{
    protected string $name;
    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @throws EmptyNameException
     */
    public function setName(string $name) : void
    {
        if(empty($name)){
            throw new EmptyNameException();
        }

        $this->name = $name;
    }
}

<?php

namespace Nirmala\Belajar;

class Customer
{

    public function __construct(private String $name)
    {
    }

    public function sayHello($name): mixed
    {
        return "Hello $name, my name is $this->name";
    }
}

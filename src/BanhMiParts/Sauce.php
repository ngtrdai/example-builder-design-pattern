<?php

namespace App\BanhMiParts;

class Sauce
{
    public ?string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
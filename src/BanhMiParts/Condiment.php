<?php

namespace App\BanhMiParts;

class Condiment
{
    public ?string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

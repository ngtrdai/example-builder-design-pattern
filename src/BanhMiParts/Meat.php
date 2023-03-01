<?php

namespace App\BanhMiParts;

class Meat
{
    public ?string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

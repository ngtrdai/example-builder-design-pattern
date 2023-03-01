<?php

namespace App\BanhMiParts;

class Vegetable
{
    public ?string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

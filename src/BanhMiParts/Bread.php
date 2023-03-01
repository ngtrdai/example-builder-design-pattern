<?php

namespace App\BanhMiParts;

use App\Interfaces\IngredientInterface;

class Bread
{
    public ?string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
<?php

namespace App\Classes;

use App\BanhMiParts\Bread;
use App\BanhMiParts\Condiment;
use App\BanhMiParts\Meat;
use App\BanhMiParts\Sauce;
use App\BanhMiParts\Vegetable;

class BanhMi
{
    public ?Bread $bread;
    public ?Meat $meat;
    public ?Vegetable $vegetable;
    public ?Sauce $sauce;
    public ?Condiment $condiment;

    public function __construct(Bread $bread, Meat $meat, Vegetable $vegetable, Sauce $sauce, Condiment $condiment)
    {
        $this->bread = $bread;
        $this->meat = $meat;
        $this->vegetable = $vegetable;
        $this->sauce = $sauce;
        $this->condiment = $condiment;
    }

    public function toString()
    {
        $content = "--------------------------------------------\r\n";
        $content .= "Bread: {$this->bread->name}\r\n";
        $content .= "Meat: {$this->meat->name}\r\n";
        $content .= "Vegetable: {$this->vegetable->name}\r\n";
        $content .= "Sauce: {$this->sauce->name}\r\n";
        $content .= "Condiment: {$this->condiment->name}\r\n";
        $content .= "--------------------------------------------\r\n";

        return $content;
    }
}
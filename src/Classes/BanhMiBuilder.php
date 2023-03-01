<?php

namespace App\Classes;

use App\Classes\BanhMi;
use App\BanhMiParts\Meat;
use App\BanhMiParts\Bread;
use App\BanhMiParts\Sauce;
use App\BanhMiParts\Condiment;
use App\BanhMiParts\Vegetable;
use App\Interfaces\BanhMiBuilderInterface;

class BanhMiBuilder implements BanhMiBuilderInterface
{
    public Bread $bread;
    public Meat $meat;
    public Vegetable $vegetable;
    public Sauce $sauce;
    public Condiment $condiment;

    public function addBread(Bread $bread): BanhMiBuilderInterface
    {
        $this->bread = $bread;
        return $this;
    }

    public function addMeat(Meat $meat): BanhMiBuilderInterface
    {
        $this->meat = $meat;
        return $this;
    }

    public function addVegetable(Vegetable $vegetable): BanhMiBuilderInterface
    {
        $this->vegetable = $vegetable;
        return $this;
    }

    public function addSauce(Sauce $sauce): BanhMiBuilderInterface
    {
        $this->sauce = $sauce;
        return $this;
    }

    public function addCondiment(Condiment $condiment): BanhMiBuilderInterface
    {
        $this->condiment = $condiment;
        return $this;
    }

    public function getBanhMi(): BanhMi
    {
        return new BanhMi($this->bread, $this->meat, $this->vegetable, $this->sauce, $this->condiment);
    }


}
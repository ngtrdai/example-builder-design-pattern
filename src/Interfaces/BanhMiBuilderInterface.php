<?php

namespace App\Interfaces;

use App\BanhMiParts\Bread;
use App\BanhMiParts\Condiment;
use App\BanhMiParts\Meat;
use App\BanhMiParts\Sauce;
use App\BanhMiParts\Vegetable;
use App\Classes\BanhMi;

interface BanhMiBuilderInterface
{
    public function addBread(Bread $bread): BanhMiBuilderInterface;
    public function addMeat(Meat $meat): BanhMiBuilderInterface;
    public function addVegetable(Vegetable $vegetable): BanhMiBuilderInterface;
    public function addSauce(Sauce $sauce): BanhMiBuilderInterface;
    public function addCondiment(Condiment $condiment): BanhMiBuilderInterface;
    public function getBanhMi(): BanhMi;
}
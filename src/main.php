<?php

require_once 'vendor/autoload.php';

use App\BanhMiParts\Bread;
use App\BanhMiParts\Condiment;
use App\BanhMiParts\Meat;
use App\BanhMiParts\Sauce;
use App\BanhMiParts\Vegetable;
use App\Classes\BanhMiBuilder;

class Main
{
    public function __construct()
    {
        $this->run();
    }

    public function run()
    {
        $banhMiBuilder = new BanhMiBuilder();
        $banhMiBuilder
            ->addBread(new Bread("Banh Mi"))
            ->addMeat(new Meat("Thit"))
            ->addVegetable(new Vegetable("Rau"))
            ->addSauce(new Sauce("Nuoc"))
            ->addCondiment(new Condiment("Pho Mai"));
        $banhMi = $banhMiBuilder->getBanhMi();
        echo $banhMi->toString();
    }
}

$main = new Main();
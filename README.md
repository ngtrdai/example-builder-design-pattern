# Builder design pattern in PHP

This is a simple implementation of the builder design pattern in PHP.

## UML diagram
```mermaid
classDiagram
    BanhMiBuilder --|> BanhMiBuilderInterface
    Bread ..|> BanhMiBuilderInterface
    Meat ..|> BanhMiBuilderInterface
    Vegetable ..|> BanhMiBuilderInterface
    Sauce ..|> BanhMiBuilderInterface
    Condiment ..|> BanhMiBuilderInterface

    class BanhMi {
        +Bread bread
        +Meat meat
        +Vegetable vegetable
        +Sauce sauce
        +Condiment condiment

        +toString() string
    }

    class BanhMiBuilderInterface {
        addBread(Bread bread) BanhMiBuilderInterface
        addMeat(Meat meat) BanhMiBuilderInterface
        addVegetable(Vegetable vegetable) BanhMiBuilderInterface
        addSauce(Sauce sauce) BanhMiBuilderInterface
        addCondiment(Condiment condiment) BanhMiBuilderInterface
        getBanhMi() BanhMi
    }

    class BanhMiBuilder {
        +Bread bread
        +Meat meat
        +Vegetable vegetable
        +Sauce sauce
        +Condiment condiment

        addBread(Bread bread) BanhMiBuilderInterface
        addMeat(Meat meat) BanhMiBuilderInterface
        addVegetable(Vegetable vegetable) BanhMiBuilderInterface
        addSauce(Sauce sauce) BanhMiBuilderInterface
        addCondiment(Condiment condiment) BanhMiBuilderInterface
        getBanhMi() BanhMi
    }

    class Bread {
        +String name
    }

    class Meat {
        +String name
    }

    class Vegetable {
        +String name
    }

    class Sauce {
        +String name
    }

    class Condiment {
        +String name
    }
```


## Installation and run
1. Clone the repository
2. Run `composer install`
3. Run `php src/main.php`

## Usage
```php
$banhMiBuilder = new BanhMiBuilder();
$banhMiBuilder
    ->addBread(new Bread("Banh Mi"))
    ->addMeat(new Meat("Thit"))
    ->addVegetable(new Vegetable("Rau"))
    ->addSauce(new Sauce("Nuoc"))
    ->addCondiment(new Condiment("Pho Mai"));
$banhMi = $banhMiBuilder->getBanhMi();
echo $banhMi->toString();
```

## Output
```bash
--------------------------------------------
Bread: Banh Mi
Meat: Thit
Vegetable: Rau
Sauce: Nuoc
Condiment: Pho Mai
--------------------------------------------
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class Product
    {
      private $name;
      private $price;

      public function __construct($name, $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      public function getName()
      {
        return $this->name;
      }

      public function getPrice()
      {
        return $this->price;
      }

      public function setPrice($price)
      {
        $this->price = $price;
      }

      abstract function calcPrice();
    }

    class PhysicalProduct extends Product
    {
      public function __construct($name, $price)
      {
        parent::__construct($name, $price);
      }

      public function calcPrice()
      {
        return $this->getPrice() + 5;
      }
    }

    class DigitalProduct extends Product
    {
      private $discount;

      public function __construct($name, $price)
      {
        parent::__construct($name, $price);
        $this->discount = 0.9;
      }

      // public function getDiscount()
      // {
      //   return $this->discount;
      // }

      public function calcPrice()
      {
        return $this->getPrice() * $this->discount;
      }
    }

    class SecondHandProduct extends DigitalProduct
    {
      public function __construct($name, $price)
      {
        parent::__construct($name, $price);
        $discount = 0.8;
      }

      // public function getDiscount()
      // {
      //   return 0.8;
      // }

      public function calcPrice()
      {
        return parent::calcPrice() + 3;
      }
    }
    $p1 = new PhysicalProduct("tshirt", 10);
    $d1 = new DigitalProduct("song", 10);
    $s1 = new SecondHandProduct("shoes", 10);
    $products[] = $p1;
    $products[] = $d1;
    $products[] = $s1;

    foreach ($products as $p) {
      echo $p->getName() . " price is " . $p->calcPrice() . "<br>";
    }
    ?>
</body>
</html>
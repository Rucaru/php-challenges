<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Circle
    {
      private $radius;

      public function __construct($radius)
      {
        $this->radius = $radius;
      }

      public function getRadius()
      {
        return $this->radius;
      }

      public function calcPerimeter()
      {
        return 2 * M_PI * $this->radius;
      }

      public function calcArea()
      {
        return M_PI * ($this->radius * $this->radius);
      }
    }
    class Cilinder extends Circle
    {
      private $height;

      public function __construct($radius, $height)
      {
        parent::__construct($radius);
        $this->height = $height;
      }
      public function calcVolume()
      {
        return parent::calcArea() * $this->height;
      }

      public function calcArea()
      {
        return parent::calcArea() +
          parent::calcArea() +
          $this->calcPerimeter() * $this->height;
      }
    }

    $c1 = new Circle(3);
    $c2 = new Circle(4);
    $circles[] = $c1;
    $circles[] = $c2;

    foreach ($circles as $c) {
      echo round($c->calcArea(), 2) . "<br>";
      echo round($c->calcPerimeter(), 2) . "<br>";
    }

    $cil1 = new Cilinder(4, 8);
    echo round($cil1->calcVolume(), 2) . "<br>";
    echo round($cil1->CalcArea(), 2) . "<br>";
    ?>
</body>
</html>
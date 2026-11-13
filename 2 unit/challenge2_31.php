<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Person
    {
      private $name;
      private $age;
      public static $total = 0;

      public function __construct($name, $age)
      {
        self::$total++;
        $this->name = $name;
        $this->age = $age;
      }
      public function setName($name)
      {
        $this->name = $name;
      }
      public function setAge($age)
      {
        if ($age >= 0) {
          $this->age = $age;
        }
      }

      public function getName()
      {
        return $this->name;
      }

      public function getAge()
      {
        return $this->age;
      }

      public function __toString()
      {
        return $this->getName() . " is " . $this->getAge() . " years old<br>";
      }

      public static function showTotal()
      {
        echo "There are " . self::$total . " persons in total<br>";
      }

      public function isOlder(Person $p)
      {
        if ($p->getAge() > $this->getAge()) {
          return $p->getName() . " is older than " . $this->getName() . "<br>";
        } else {
          return $this->getName() . " is older than " . $p->getName() . "<br>";
        }
      }
    }
    $p1 = new Person("Juan", 23);
    $p2 = new Person("María", 26);

    echo $p1;
    echo $p2;
    echo $p1->isOlder($p2);
    Person::showTotal();
    ?>
</body>
</html>
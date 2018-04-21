<!DOCTYPE html>
<!--
To change $this license header, choose License Headers in Project Properties.
To change $this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    class Car
    {
        const MAXPRICE = 10000000;
        private $brandName = 'unknown brand';
        private $modelName = 'unknown model';
        private $colors = ['white', 'black', 'red', 'gray', 'silver', 'blue'];
        private $color = 'white';
        private $price = 0;

        public function setBrand($brandName)
        {
            if ((trim($brandName)) !== null) {
                $this->brandName = trim($brandName);
            }
        }

        public function setModel($modelName)
        {
            if ((trim($modelName)) !== null) {
                $this->modelName = trim($modelName);
            }
        }

        public function setColor($color)
        {
            if (((trim($color)) !== null) && (in_array($color, $this->colors))) {
                $this->color = trim($color);
            }
        }

        public function setPrice($price)
        {
            if (($price > 0) && ($price < (Car::MAXPRICE))) {
                $this->price = $price;
            }
        }

        public function getBrand()
        {
            return $this->brandName;
        }

        public function getModel()
        {
            return $this->modelName;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function printInfo()
        {
            $info = $this->getBrand()."\t".$this->getModel()."\t".$this->getColor()."\t ".$this->getPrice()."<br>";
            echo $info;
        }

        public function __construct ($brandName, $modelName, $color, $price)
        {
            $this->setBrand($brandName);
            $this->setModel($modelName);
            $this->setColor($color);
            $this->setPrice($price);
            echo "Car created: ";
            $this->printInfo();
        }

    } //end class Car

//================

    class ProductList
    {
        private $items = [];
        private $count = 0;

        public function __construct()
        {

        }

        public function add(&$item)
        {
            if (isset($item)) {
                $this->count++;
                $key = $this->count;
                $this->items[$key] = &$item;
            }
        }

        public function delete($key)
        {
            if (isset($key, $this->items)) {
                unset($this->items[$key]);
                $this->count--;
            }
        }

        public function printList()
        {
            foreach ($this->items as $key => $item) {
                $item->printInfo();
            }
        }

    }//end class List

//================

    class Product
    {
      const MAXPRICE = 100000;
      private $brandName = 'unknown brand';
      private $modelName = 'unknown model';
      private $type = 'unknown type';
      private $price = 0;

      public function setBrand($brandName)
      {
          if ((trim($brandName)) !== null) {
              $this->brandName = trim($brandName);
          }
      }

      public function setModel($modelName)
      {
          if ((trim($modelName)) !== null) {
              $this->modelName = trim($modelName);
          }
      }

      public function setType($type)
      {
          if ((trim($type)) !== null) {
              $this->type = trim($type);
          }
      }

      public function setPrice($price)
      {
          if (($price > 0) && ($price < (Product::MAXPRICE))) {
              $this->price = $price;
          }
      }

      public function getBrand()
      {
          return $this->brandName;
      }

      public function getModel()
      {
          return $this->modelName;
      }

      public function getType()
      {
          return $this->type;
      }

      public function getPrice()
      {
          return $this->price;
      }

      public function printInfo()
      {
          $info = $this->getBrand()."\t".$this->getModel()."\t".$this->getType()."\t ".$this->getPrice()."<br>";
          echo $info;
      }

      public function __construct ($brandName, $modelName, $type, $price)
      {
          $this->setBrand($brandName);
          $this->setModel($modelName);
          $this->setType($type);
          $this->setPrice($price);
          echo "Product created: ";
          $this->printInfo();
      }

    }//end class Product

//================

    class Pen
    {
        private $color = 'blue';
        private $type = 'automatic';
        private $material = 'plastic';

        public function setColor($color)
        {
            if ((trim($color)) !== null) {
                $this->color = trim($color);
            }
        }

        public function setType($type)
        {
            if ((trim($type)) !== null) {
                $this->type = trim($type);
            }
        }

        public function setMaterial($material)
        {
            if ((trim($material)) !== null) {
                $this->material = trim($material);
            }
        }

        public function getColor()
        {
            return $this->color;
        }

        public function getType()
        {
            return $this->type;
        }

        public function getMaterial()
        {
            return $this->material;
        }

        public function printInfo()
        {
            $info = $this->getColor()."\t".$this->getType()."\t".$this->getMaterial()."<br>";
            echo $info;
        }

        public function __construct ($color, $type, $material)
        {
            $this->setColor($color);
            $this->setType($type);
            $this->setMaterial($material);
            echo "Pen created: ";
            $this->printInfo();
        }

    }//end class Pen

//================

    class Duck
    {
        private $name = 'duck';

        public function __construct($name)
        {
            echo "Duck created: ";
            $this->printInfo();

        }

        public function makeSound()
        {
            echo " Kra-kra! ";
        }

        public function setName($name)
        {
          if ((trim($name)) !== null) {
              $this->name = trim($name);
          }
        }

        public function printInfo()
        {
          $info = $this->name."\t".$this->makeSound()."<br>";
          echo $info;
        }
    }//end class Duck

//================

    class TVset
    {
      const MAXDIAG = 120;
      private $brandName = 'unknown brand';
      private $modelName = 'unknown model';
      private $type = 'LCD';
      private $types = ['LCD', 'plasma', 'OLED', 'tube'];
      private $diagSize = 32;

      public function setBrand($brandName)
      {
          if ((trim($brandName)) !== null) {
              $this->brandName = trim($brandName);
          }
      }

      public function setModel($modelName)
      {
          if ((trim($modelName)) !== null) {
              $this->modelName = trim($modelName);
          }
      }

      public function setType($type)
      {
          if (((trim($type)) !== null) && (in_array($type, $this->types))) {
              $this->type = trim($type);
          }
      }

      public function setDiag($diag)
      {
          if (($diag > 0) && ($diag < (TVset::MAXDIAG))) {
              $this->diagSize = $diag;
          }
      }
      public function getBrand()
      {
          return $this->brandName;
      }

      public function getModel()
      {
          return $this->modelName;
      }

      public function getType()
      {
          return $this->type;
      }

      public function getDiag()
      {
          return $this->diagSize;
      }

      public function printInfo()
      {
          $info = $this->getBrand()."\t".$this->getModel()."\t".$this->getType()."\t ".$this->getDiag().'"'."<br>";
          echo $info;
      }

      public function __construct ($brandName, $modelName, $type, $diag)
      {
          $this->setBrand($brandName);
          $this->setModel($modelName);
          $this->setType($type);
          $this->setDiag($diag);
          echo "TVset created: ";
          $this->printInfo();
      }

    }//end class TVset

    //создаем объекты
    $bmw = new Car('BMW', 'X3', 'black', 40000);
    $toyota = new Car('Toyota', 'Hilux', 'blue', 50000);
    $tv1 = new TVset('Samsung', 'm123', 'OLED', 42);
    $tv2 = new TVset('LG', 'mod456', 'LCD', 47);
    $duck = new Duck('Duck');
    $scrooge = new Duck('Scrooge McDuck');
    $duck->makeSound();
    $scrooge->makeSound();
    $pen1 = new pen('black', 'not auto', 'plastic');
    $pen2 = new Pen('red', 'auto', 'metall');
    $product1 = &$bmw;
    $product2 = &$tv2;
    $product3 = new Product('Some Brand', 'Some Model', 'New type', 100);
    $list = new ProductList();
    $list->add($product1);
    $list->add($product2);
    $list->add($product3);
    $list->add($scrooge);
    $list->printList();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Classes</title>
        
    </head>
    <body>
        <?ph
            $list->printList();
        ?>
    </body>
</html>

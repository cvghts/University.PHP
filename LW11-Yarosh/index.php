<?php
class Beverage {
    private $color, $temperature;
    protected $opacity;
    function __construct($temperature, $color) {
        $this->temperature = $temperature;
        $this->color = $color;
    }
    function getInfo() {
        return "This beverage is " . $this->temperature . " and " . $this->color;
    }
    function setColor($color) {
        $this->color = strtolower($color);
    }
    
    function getColor() {
        return $this->color;
    }
}

class Milk extends Beverage {
    function __construct($color) {
        parent::__construct('cold', $color);
    }
    function getInfo() {
        return parent::getInfo() . ". I like my milk this way.";
    }
}

class AdamsUtils {
    public static $the_answer = 42;
    public static function addTowel($string) {
        return $string . " and  a towel";
    }
}

/*$soda = new Beverage();
$soda->color = 'white';
$soda->temperature = 'cold';
echo $soda->getInfo();

$tea = new Beverage();
$tea->temperature = 'hot';
echo $tea->temperature;*/

$coffee = new Beverage('cold', 'black');
echo $coffee->getInfo() . "<br>";

$milk = new Milk('white');
echo $milk->getInfo() . "<br>";

$items = "I brought apples";
echo AdamsUtils::$the_answer . "<br>";
echo AdamsUtils::addTowel($items);
?>
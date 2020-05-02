<?php


class Drink extends Food
{
protected $volume = 0;

public function __construct($name, $price, $ingredients, $weight, $volume)
{
    parent::__construct($name, $price, $ingredients, $weight);
    $this->volume = $volume;
}

    public function setDrinkName($name){
    $this->name = $name;
}

public function getDrinkName(){
    $inf = '<div>';
    $inf .= '<ul>'.'<li>'.$this->name.'</li>'.'</ul>';
    $inf .= '</div>';
    return $inf;
}
}
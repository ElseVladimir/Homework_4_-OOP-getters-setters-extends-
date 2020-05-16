<?php


class Drink extends Menu
{
    protected $volume = 0;

public function __construct($name, $price, $volume)
{
    parent::__construct($name, $price);
    $this->volume = $volume;
}
public function getfullName(){
    return $this->name;
}
public function getVolume(){
    return $this->volume;
}

    public function getPrice(){
    $this->price = $price;
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
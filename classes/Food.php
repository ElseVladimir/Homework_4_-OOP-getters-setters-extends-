<?php


class Food
{
protected $name = '';
protected $price = 0;
protected $ingredients = '';
protected $weight = 0;
protected $vegan = false;

public function setFoodName($name){
    $this->name = $name;
}

public function getFoodName(){
    $inf = '<div>';
    $inf .= '<ul>'.'<li>'.$this->name.'</li>'.'</ul>';
    $inf .= '</div>';
    return $inf;
}
}
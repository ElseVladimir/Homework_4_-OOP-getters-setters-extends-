<?php


class Menu
{
    protected $name = '';
    protected $price = 0;

public function __construct($name, $price)
{
    $this->name = $name;
    $this->price = $price;
}
}
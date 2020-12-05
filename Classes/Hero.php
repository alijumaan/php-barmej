<?php
include_once "Human.php";

class Hero extends Human
{

    public function __construct($name, $power, $health)
    {
        parent::__construct($name, $power, $health, true, false);
    }
}
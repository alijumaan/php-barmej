<?php
include_once "Human.php";

class Villain extends Human
{

    public function __construct($name, $power, $health)
    {
        parent::__construct($name, $power, $health, false, true);
    }

}
<?php

class Human
{
    public $name;
    public $power;
    public $health;
    public $earlyFight = false;
    public $escapeFight = false;

    public function __construct($name, $power, $health, $earlyFight, $escapeFight)
    {
        $this->name = $name;
        $this->power = $power;
        $this->health = $health;
        $this->earlyFight = $earlyFight;
        $this->escapeFight = $escapeFight;
    }

    public function startFight($distance, $target)
    {
        if ($this->isToFarDistance($distance) === true || $this->escapeFight === true){
            return "هرب ". $target->name . "! وذلك بسبب ان المسافة اكثر من 100 م وهي " . $distance . "م";
        } elseif ($this->isToFarDistance($distance) === false || $this->escapeFight === true) {
            echo "حاول الشرير الهرب لكنه فشل وبدأت المعركة!". "<br>";

            while (true){
                $target->health -= $this->power;
                if ($target->health <= 0) { return "انتهت بفوز المحارب ". $this->name; }

                $this->health -= $target->power;
                if ($this->health <= 0) { return "انتهت بفوز المحارب ". $target->name; }
            }

        } else {
            while (true){
                $target->health -= $this->power;
                if ($target->health <= 0) { return "فاز المحارب ". $this->name; }
            }
        }
    }

    public function isToFarDistance($distance)
    {
        if ($distance <= 100){
            $tryEsc = false;
        } else {
            $tryEsc = true;
        }
        return $tryEsc;
    }
}

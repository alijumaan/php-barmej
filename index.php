<?php
include_once "Classes/Hero.php";
include_once "Classes/Villain.php";

$hero = new Hero('البطل', 400, 600);
$villain = new Villain('الشرير', 500, 400);

echo $hero->startFight(101, $villain);
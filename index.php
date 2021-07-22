<?php

require_once 'ConcreteButton.php';
require_once 'ConcreteClicker.php';
require_once 'ConcreteFancyButton.php';
require_once 'ConcreteFancyClicker.php';
require_once './Factory/ConcreteFactory.php';
require_once './Factory/ConcreteFancyFactory.php';

function build(AbstractFactory $factory)
{
    $button = $factory->createButton();
    $clicker = $factory->createClicker();

    echo '<h2> button name: '  . $button->getName() . '</h2>';
    echo '<h2> clicker name: ' . $clicker->getName() . '</h2>';
    echo '<h2> action: ' .  $button->collaborate($clicker) . '</h2>';
}

echo '<h1> boring </h1>';
build(new ConcreteFactory());

echo '<h1> fancy </h1>';
build(new ConcreteFancyFactory());

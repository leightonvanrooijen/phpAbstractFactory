<?php
require_once 'AbstractFactory.php';

class ConcreteFancyFactory implements AbstractFactory
{
    public function createButton(): AbstractButton
    {
        return new ConcreteFancyButton();
    }

    public function createClicker(): AbstractClicker
    {
        return new ConcreteFancyClicker();
    }
}


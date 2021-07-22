<?php
require_once 'AbstractFactory.php';

class ConcreteFactory implements AbstractFactory
{
    public function createButton(): AbstractButton
    {
        return new ConcreteButton();
    }

    public function createClicker(): AbstractClicker
    {
        return new ConcreteClicker();
    }
}

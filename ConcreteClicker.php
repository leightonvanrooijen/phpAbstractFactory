<?php
require_once 'AbstractClicker.php';

class ConcreteClicker implements AbstractClicker
{
    public function getName(): string
    {
        return 'Clicker';
    }

    public function click(): string
    {
        return 'Clicked';
    }
}

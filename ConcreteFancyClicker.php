<?php
require_once 'AbstractClicker.php';

class ConcreteFancyClicker implements AbstractClicker
{
    public function getName(): string
    {
        return 'oooo a fancy Clicker';
    }

    public function click(): string
    {
        return 'Clicked but fancier';
    }
}

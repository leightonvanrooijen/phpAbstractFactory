<?php
require_once 'AbstractButton.php';
require_once 'AbstractClicker.php';

class ConcreteButton implements AbstractButton
{
    public function getName(): string
    {
        return 'Button';
    }

    public function collaborate(AbstractClicker $clicker): string {
       return 'The button was ' . $clicker->click();
    }
}

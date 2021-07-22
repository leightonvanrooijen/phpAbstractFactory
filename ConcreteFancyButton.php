<?php
require_once 'AbstractButton.php';

class ConcreteFancyButton implements AbstractButton
{
    public function getName(): string
    {
        return 'ooo a Fancy Button';
    }

    public function collaborate(AbstractClicker $clicker): string {
        return 'The button was ' . $clicker->click();
    }
}

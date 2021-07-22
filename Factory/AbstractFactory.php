<?php

interface AbstractFactory
{
    public function createButton(): AbstractButton;

    public function createClicker(): AbstractClicker;
}

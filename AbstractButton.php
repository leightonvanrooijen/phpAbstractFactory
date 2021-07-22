<?php

interface AbstractButton
{
    public function getName(): string;

    public function collaborate(AbstractClicker $clicker): string;
}

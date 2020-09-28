<?php

namespace Baronet\Strategy;

class StrategyCaps implements StrategyInterface
{
    public function showTitle($book): string
    {
        return strtoupper($book->getTitle());
    }
}

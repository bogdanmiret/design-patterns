<?php

namespace Baronet\Strategy;

class StrategyStars implements StrategyInterface
{
    public function showTitle($book): string
    {
        return str_replace(' ', '*', $book->getTitle());
    }
}

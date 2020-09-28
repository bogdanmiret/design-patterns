<?php

namespace Baronet\Strategy;

class StrategyExclaim implements StrategyInterface
{
    public function showTitle($book): string
    {
        return str_replace(' ', '!', $book->getTitle());
    }
}

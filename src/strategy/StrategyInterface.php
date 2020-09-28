<?php declare(strict_types=1);

namespace Baronet\Strategy;

interface StrategyInterface
{
    public function showTitle($book): string;
}

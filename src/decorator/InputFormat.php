<?php declare(strict_types=1);

namespace Baronet\Decorator;

interface InputFormat
{
    public function formatText(string $text): string;
}

<?php declare(strict_types=1);

namespace Baronet\Decorator;

class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}

<?php

namespace Baronet\Decorator;

class TextFormat implements InputFormat
{
    /**
     * @var InputFormat
     */
    protected InputFormat $inputFormat;

    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    /**
     * Decorator delegates all work to a wrapped component.
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        return $this->inputFormat->formatText($text);
    }
}

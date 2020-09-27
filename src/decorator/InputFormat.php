<?php

namespace Baronet\Decorator;

interface InputFormat
{
    public function formatText(string $text): string;
}

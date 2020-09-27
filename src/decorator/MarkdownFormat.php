<?php

namespace Baronet\Decorator;

/**
 * This Concrete Decorator provides a rudimentary Markdown → HTML conversion.
 */
class MarkdownFormat extends TextFormat
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        $chunks = preg_split('|\n\n|', $text);

        foreach ($chunks as &$chunk) {
            if (preg_match('|^#+|', $chunk)) {
                $chunk = preg_replace_callback('|^(#+)(.*?)$|', function ($matches) {
                    $heading = strlen($matches[1]);
                    return "<h$heading>" . trim($matches[2]) . "</h$heading>";
                }, $chunk);
            } else {
                $chunk = "<p>$chunk</p>";
            }
        }
        $text = implode("\n\n", $chunks);

        $text = preg_replace("|__(.*?)__|", '<strong>$1</strong>', $text);
        $text = preg_replace("|\*\*(.*?)\*\*|", '<strong>$1</strong>', $text);
        $text = preg_replace("|_(.*?)_|", '<em>$1</em>', $text);
        $text = preg_replace("|\*(.*?)\*|", '<em>$1</em>', $text);

        return $text;
    }
}


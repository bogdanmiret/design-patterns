<?php declare(strict_types=1);

namespace Tests;

use Baronet\Decorator\DangerousHTMLTagsFilter;
use Baronet\Decorator\MarkdownFormat;
use Baronet\Decorator\PlainTextFilter;
use Baronet\Decorator\TextInput;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testPlaintTextInputFilter(): void
    {
        $dangerousComment = <<<HERE
            Hello! Nice blog post!
            Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
            <script src="http://www.iwillhackyou.com/script.js">
              performXSSAttack();
            </script>
        HERE;

        $naiveInput = new TextInput();

        $filteredInput = new PlainTextFilter($naiveInput);

        $safeComment = strip_tags($dangerousComment);

        $this->assertSame(
            $safeComment,
            $filteredInput->formatText($dangerousComment)
        );
    }

    public function testDangerousTagsFilterFormatted(): void
    {
        $dangerousForumPost = <<<HERE
            # Welcome
            
            This is my first post on this **gorgeous** forum.
            
            <script src="http://www.iwillhackyou.com/script.js">
              performXSSAttack();
            </script>
            HERE;

        $text = new TextInput();
        $markdown = new MarkdownFormat($text);
        $filteredInput = new DangerousHTMLTagsFilter($markdown);

        $this->assertSame(
            '# Welcome

This is my first post on this <strong>gorgeous</strong> forum.

',
            $filteredInput->formatText($dangerousForumPost)
        );
    }
}

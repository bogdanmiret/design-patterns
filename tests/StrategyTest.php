<?php declare(strict_types=1);

namespace Tests;

use Baronet\Strategy\Book;
use Baronet\Strategy\Context;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testCapsContext(): void
    {
        $title = 'Clean Code';
        $author = 'Robert C Martin';

        $book = new Book($title, $author);

        $strategyContextCaps = new Context('C');

        $this->assertSame(
            strtoupper($title),
            $strategyContextCaps->showBookTitle($book)
        );
    }

    public function testExclaimContext(): void
    {
        $title = 'Clean Code';
        $author = 'Robert C Martin';

        $book = new Book($title, $author);

        $strategyContextCaps = new Context('E');

        $this->assertSame(
            str_replace(' ', '!', $title),
            $strategyContextCaps->showBookTitle($book)
        );
    }

    public function testStarsContext(): void
    {
        $title = 'Clean Code';
        $author = 'Robert C Martin';

        $book = new Book($title, $author);

        $strategyContextCaps = new Context('S');

        $this->assertSame(
            str_replace(' ', '*', $title),
            $strategyContextCaps->showBookTitle($book)
        );
    }
}

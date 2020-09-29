<?php declare(strict_types=1);

namespace Baronet\Strategy;

require '../../vendor/autoload.php';

$book = new Book('Clean Code', 'Robert C Martin');

$strategyContextCaps = new Context('C');
$strategyContextExclaim = new Context('E');
$strategyContextStars = new Context('S');

writeln('test 1 - show name context C');
writeln($strategyContextCaps->showBookTitle($book));
writeln('');

writeln('test 2 - show name context E');
writeln($strategyContextExclaim->showBookTitle($book));
writeln('');

writeln('test 3 - show name context S');
writeln($strategyContextStars->showBookTitle($book));
writeln('');

function writeln($line)
{
    echo $line . "<br/>";
}

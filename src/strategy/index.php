<?php

namespace Baronet\Strategy;

require '../../vendor/autoload.php';

$book = new Book('Clean Code', 'Robert C Martin');

$strategyContextC = new Context('C');
$strategyContextE = new Context('E');
$strategyContextS = new Context('S');

writeln('test 1 - show name context C');
writeln($strategyContextC->showBookTitle($book));
writeln('');

writeln('test 2 - show name context E');
writeln($strategyContextE->showBookTitle($book));
writeln('');

writeln('test 3 - show name context S');
writeln($strategyContextS->showBookTitle($book));
writeln('');

function writeln($line)
{
    echo $line . "<br/>";
}

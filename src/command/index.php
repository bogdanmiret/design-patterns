<?php

namespace Baronet\Command;

require '../../vendor/autoload.php';

$invoker = new Invoker();
$receiver = new Receiver();

$invoker->setCommand(new HelloCommand($receiver));
$invoker->run();

echo $receiver->getOutput() . '\n';

$messageDateCommand = new AddMessageDateCommand($receiver);
$messageDateCommand->execute();

$invoker->run();

echo $receiver->getOutput() . '\n';

$messageDateCommand->undo();

$invoker->run();

echo $receiver->getOutput();

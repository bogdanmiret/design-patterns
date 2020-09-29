<?php declare(strict_types=1);

namespace Tests;

use Baronet\Adapter\SlackApi;
use Baronet\Adapter\SlackNotification;
use Baronet\Command\AddMessageDateCommand;
use Baronet\Command\HelloCommand;
use Baronet\Command\Invoker;
use Baronet\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testHelloCommand(): void
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();

        $this->assertSame(
            "Hello World",
            $receiver->getOutput()
        );
    }

    public function testUndoableCommand(): void
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();

        $this->assertSame('Hello World', $receiver->getOutput());

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();

        $invoker->run();

        $this->assertSame("Hello World\nHello World [".date('Y-m-d').']', $receiver->getOutput());

        $messageDateCommand->undo();

        $invoker->run();

        $this->assertSame("Hello World\nHello World [".date('Y-m-d')."]\nHello World", $receiver->getOutput());
    }
}

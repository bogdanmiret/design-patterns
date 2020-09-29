<?php declare(strict_types=1);

namespace Baronet\Command;

class Invoker
{
    private Command $command;

    /**
     * in the invoker we find this kind of method for subscribing the command
     * There can be also a stack, a list, a fixed set ...
     * @param Command $command
     */
    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    /**
     * executes the command; the invoker is the same whatever is the command
     */
    public function run(): void
    {
        $this->command->execute();
    }
}

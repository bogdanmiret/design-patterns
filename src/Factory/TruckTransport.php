<?php declare(strict_types=1);

namespace Baronet\Factory;

class TruckTransport implements Transport
{
    public function ready(): string
    {
        return "Courier ready to be sent to the truck \n";
    }

    public function dispatch(): string
    {
        return "Courier is on your way on the truck \n";
    }

    public function deliver(): string
    {
        return "Courier from the truck is delivered to you \n";
    }
}

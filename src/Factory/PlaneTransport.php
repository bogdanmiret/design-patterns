<?php declare(strict_types=1);

namespace Baronet\Factory;

class PlaneTransport implements Transport
{
    public function ready(): string
    {
        return "Courier ready to be sent to the plane \n";
    }

    public function dispatch(): string
    {
        return "Courier is on your way on the plane \n";
    }

    public function deliver(): string
    {
        return "Courier from the plane is delivered to you \n";
    }
}

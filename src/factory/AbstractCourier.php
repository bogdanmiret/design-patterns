<?php

namespace Baronet\Factory;

abstract class AbstractCourier
{
    abstract public function getCourierTransport(): Transport;

    public function sendCourier(): void
    {
        $transport = $this->getCourierTransport();
        $transport->ready();
        $transport->dispatch();
        $transport->deliver();
    }
}

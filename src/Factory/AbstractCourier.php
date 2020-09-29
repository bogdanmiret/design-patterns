<?php declare(strict_types=1);

namespace Baronet\Factory;

abstract class AbstractCourier
{
    abstract public function getCourierTransport(): Transport;

    public function sendCourier(): string
    {
        $transport = $this->getCourierTransport();

        $message = '';

        $message .= $transport->ready();
        $message .= $transport->dispatch();
        $message .= $transport->deliver();

        return $message;
    }
}

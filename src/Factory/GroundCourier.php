<?php declare(strict_types=1);

namespace Baronet\Factory;

class GroundCourier extends AbstractCourier
{
    public function getCourierTransport(): Transport
    {
        return new TruckTransport();
    }
}

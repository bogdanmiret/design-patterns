<?php

namespace Baronet\Factory;

class GroundCourier extends AbstractCourier
{
    public function getCourierTransport(): Transport
    {
        return new TruckTransport();
    }
}

<?php

namespace Baronet\Factory;

class AirCourier extends AbstractCourier
{
    public function getCourierTransport(): Transport
    {
        return new PlaneTransport();
    }
}

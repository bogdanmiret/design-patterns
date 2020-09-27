<?php

namespace Baronet\Factory;

require '../../vendor/autoload.php';

function deliverCourier(AbstractCourier $courier)
{
    $courier->sendCourier();
}

echo "Test Courier \n";
deliverCourier(new GroundCourier());

echo "Test Courier \n";
deliverCourier(new AirCourier());

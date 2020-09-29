<?php declare(strict_types=1);

namespace Baronet\Factory;

require '../../vendor/autoload.php';

function deliverCourier(AbstractCourier $courier)
{
    echo $courier->sendCourier();
}

echo "Test Courier \n";
deliverCourier(new GroundCourier());

echo "Test Courier \n";
deliverCourier(new AirCourier());

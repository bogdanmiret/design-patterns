<?php declare(strict_types=1);

namespace Tests;

use Baronet\Factory\AirCourier;
use Baronet\Factory\GroundCourier;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testCanCreateGroundCourier(): void
    {
        $groundCourier = new GroundCourier();

        $this->assertSame(
            "Courier ready to be sent to the truck \nCourier is on your way on the truck \nCourier from the truck is delivered to you \n",
            $groundCourier->sendCourier()
        );
    }

    public function testCanCreateAirCourier(): void
    {
        $groundCourier = new AirCourier();

        $this->assertSame(
            "Courier ready to be sent to the plane \nCourier is on your way on the plane \nCourier from the plane is delivered to you \n",
            $groundCourier->sendCourier()
        );
    }
}

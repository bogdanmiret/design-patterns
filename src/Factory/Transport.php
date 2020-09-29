<?php declare(strict_types=1);

namespace Baronet\Factory;

interface Transport
{
    public function ready(): string;

    public function dispatch(): string;

    public function deliver(): string;
}

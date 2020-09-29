<?php declare(strict_types=1);

namespace Baronet\Factory;

interface Transport
{
    public function ready(): void;

    public function dispatch(): void;

    public function deliver(): void;
}
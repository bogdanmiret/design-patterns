<?php declare(strict_types=1);

namespace Baronet\Adapter;

interface Notification
{
    public function send(string $title, string $message);
}

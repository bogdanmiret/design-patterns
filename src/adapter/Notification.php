<?php

namespace Baronet\Adapter;

interface Notification
{
    public function send(string $title, string $message);
}

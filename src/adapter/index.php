<?php declare(strict_types=1);

namespace Baronet\Adapter;

require '../../vendor/autoload.php';

function sendNotification(Notification $notification, string $title, string $message)
{
    $notification->send($title, $message);
}

echo "Client code is designed correctly and works with email notifications:\n";
$notification = new EmailNotification("developers@example.com");

sendNotification($notification, 'Email Title', 'Email Body');

echo "\n\n";

$slackApi = new SlackApi("example.com", "XXXXXXXX");

$notification = new SlackNotification($slackApi, "Example.com Developers");

sendNotification($notification, 'Slack Title', 'Slack Message');

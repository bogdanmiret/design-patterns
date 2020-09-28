<?php declare(strict_types=1);

namespace Tests;

use Baronet\Adapter\EmailNotification;
use Baronet\Adapter\SlackApi;
use Baronet\Adapter\SlackNotification;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testSendEmailNotification()
    {
        $notification = new EmailNotification("developers@example.com");

        $notification->send('Email Title', 'Email Body');

        $this->expectOutputString(
            "Sent email with title 'Email Title' to 'developers@example.com' that says 'Email Body'."
        );
    }

    public function testSendSlackNotification()
    {
        $slackApi = new SlackApi("example.com", "XXXXXXXX");

        $notification = new SlackNotification($slackApi, "Example.com Developers");

        $notification->send('Slack Title', 'Slack Message');

        $slackMessage = "#Slack Title# " . strip_tags("Slack Message");

        $this->expectOutputString(
            "Logged in to a slack account 'example.com'.\nPosted following message into the 'Example.com Developers' chat: '$slackMessage'.\n"
        );
    }
}

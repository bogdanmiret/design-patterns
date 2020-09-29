<?php declare(strict_types=1);

namespace Tests;

use Baronet\Adapter\EmailNotification;
use Baronet\Adapter\SlackApi;
use Baronet\Adapter\SlackNotification;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testSendEmailNotification(): void
    {
        $notification = new EmailNotification("developers@example.com");

        $this->assertSame(
            "Sent email with title 'Email Title' to 'developers@example.com' that says 'Email Body'.",
            $notification->send('Email Title', 'Email Body')
        );
    }

    public function testSendSlackNotification(): void
    {
        $slackApi = new SlackApi("example.com", "XXXXXXXX");

        $notification = new SlackNotification($slackApi, "Example.com Developers");

        $slackMessage = "#Slack Title# " . strip_tags("Slack Message");

        $this->assertSame(
            "Posted following message into the 'Example.com Developers' chat: '$slackMessage'.\n",
            $notification->send('Slack Title', 'Slack Message')
        );
    }
}

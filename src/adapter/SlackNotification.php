<?php

namespace Baronet\Adapter;

class SlackNotification implements Notification
{
    private SlackApi $slack;
    private string $chatId;

    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    /**
     * An Adapter is not only capable of adapting interfaces, but it can also
     * convert incoming data to the format required by the Adaptee.
     * @param string $title
     * @param string $message
     */
    public function send(string $title, string $message): void
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);

        $this->slack->logIn();
        $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}

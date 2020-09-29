<?php declare(strict_types=1);

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
     * @return string
     */
    public function send(string $title, string $message): string
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);

        $this->slack->logIn();

        return $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}

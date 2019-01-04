<?php
namespace kjBotModule\kjBot_Dev\Demo;

use kjBot\Framework\Plugin;
use kjBot\Framework\Message;
use kjBot\Framework\Event\MessageEvent;

class DemoPlugin extends Plugin{
    public $handleDepth = 3; //捕获到最底层的事件
    public function beforePostMessage($queue){}

    //此处以正常群聊消息举例
    public function message_group_normal(MessageEvent $event): Message{
        return sendBack('Hello, world!', $event);
    }
}

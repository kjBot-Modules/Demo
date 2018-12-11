<?php
namespace kjBotModule\kjBot_Dev\Demo;

use kjBot\Framework\Module;
use kjBot\Framework\Event\MessageEvent;
use kjBot\Framework\Message;

class DemoModule extends Module{

    public function process(array $args, MessageEvent $event): Message{
        return sendBack('Hello, world!', $event);
    }

}

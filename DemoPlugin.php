<?php
namespace kjBotModule\kjBot_Dev\Demo;

use kjBot\Framework\Plugin;
use kjBot\Framework\Message;
use kjBot\Framework\Event\MessageEvent;

class DemoPlugin extends Plugin{
    public $handleDepth = 3; //捕获到最底层的事件
    public $handleQueue = true; //声明是否要捕获消息队列

    public function beforePostMessage(&$queue){} //若声明不需要捕获消息队列可不实现本方法
    //此处以正常群聊消息举例
    public function message_group_normal(MessageEvent $event): ?Message{
        if(strpos($event->getMsg(), '你好') return $event->sendBack('Hello, world!');
        else return NULL;
    }
}

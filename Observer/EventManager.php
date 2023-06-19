<?php
namespace Observer;

require_once  __DIR__ . '/Observable.php';
require_once  __DIR__ . '/Subscriber.php';

use Observer\Observable;
use Observer\Subscriber;

class EventManager implements Observable {

    private array $subscribers = [];
    private $state;
    public function attach(Subscriber $subscriber)
    {
        array_push($this->subscribers, $subscriber);
    }

    public function deattach(Subscriber $subscriber)
    {
        
    }

    public function notify()
    {
        /** @var Subscriber $subscriber */
        foreach($this->subscribers as $subscriber){
            $subscriber->update($this->state);
        }
    }


    public function changeState(string $state) {
        $this->state = $state;
        $this->notify();
    }

}
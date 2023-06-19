<?php 

namespace Observer;

Interface Observable {
    public function attach(Subscriber $subscriber);
    public function deAttach(Subscriber $subscriber);
    public function notify();
}
<?php 

namespace Observer;

Interface Subscriber {
    public function update($event);
}
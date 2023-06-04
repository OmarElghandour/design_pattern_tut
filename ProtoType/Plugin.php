<?php 

require_once "./Interfaces/ProtoType.php";

class Plugin implements ProtoType {

    private string $name;
    private string $type;

    

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function getType() {
        return $this->type;
    }


    public function clone(): Plugin
    {
        
        $clone  = new Plugin($this);
        foreach ($this as $key => $value) {
            $clone->{$key} = $value;
        }

        return $clone;

    }



}
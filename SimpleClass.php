<?php

class SimpleClass
{
    public $value;
    public $self;
    
    public function __destruct()
    {
        echo 'Object desctructed' . PHP_EOL;
    }
}

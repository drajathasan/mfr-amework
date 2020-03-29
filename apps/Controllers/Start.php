<?php
namespace Apps\Controllers;
use Apps\Models\Hai;

class Start
{
    public function index($msg){
        return 'Hai Controller '.$msg;
    }

    public function hai()
    {
        $greeter = new Hai();
        return $greeter->try();
    }
}
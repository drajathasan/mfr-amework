<?php
namespace Mframework\Systems;

class Router
{
    public $_default_controller;
    public $_auto_route = false;
    
    public function Post($_arg, $_controller)
    {

    }

    public function Get($_arg, $_controller)
    {
        require APPSPATH.'Controllers/Start.php';
		return call_user_func_array(["Apps\Controllers\\".'Start', 'hai'], []);
    }

    public function defaultController($_str_default_controller)
    {
        $this->_default_controller = $_str_default_controller;
    }

    public function autoRoute($_bool)
    {
        if ($_bool) {
            $this->_auto_route = true;
        }
    }

    public function run()
    {
        return $this->Get(NULL, $this->_default_controller);
    }
}
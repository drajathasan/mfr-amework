<?php
@ini_set('display_errors', true);
require __DIR__.'/../core/Systems/Globalconfig.php';


use Mframework\Systems\Init;

$init = new Init();

echo $init->start();

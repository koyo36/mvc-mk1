<?php
// CONFIGURATION
// TODO :: Find better way for this
$GLOBALS['config'] = array(
    'mysql'        => array(
        'host'      => 'localhost',
        'username'  => 'root',
        'password'  => '',
        'dbname'    => 'mvcdb'
    )
);


require_once 'core/App.php';
require_once 'core/Controller.php';

require_once 'core/Config.php';
require_once 'core/DB.php';

$app = new App;



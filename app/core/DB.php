<?php

class DB {

    private static $_instance = null;

    private $_pdo;
          
    // connect to the db
    private function __construct()
    {
        try {
            $this->_pdo = new PDO('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/dbname') ,  Config::get('mysql/username'), Config::get('mysql/password') );
        }
        catch ( PDOException $e )
        {
            die( $e->getMessage() );
        }
    }

    // Singleton
    // create new instance of the class
    public static function getInstance()
    {
        if( !isset( self::$_instance ) )
        {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    public function getConn()
    {
        return $this->_pdo;
    }

}
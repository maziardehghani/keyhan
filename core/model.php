<?php

class model
{
    protected $connection;
    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';',USERNAME , PASSWORD);
        }catch (Exception $exception)
        {
            echo "database connection failed";
        }
    }


}
<?php

namespace Entities;


class Database
{
    private $connect;



    public function connecting()
    {
        $this->connect = null;

        try{

            $this->connect = new \PDO(
                'pgsql:host='.getenv('DB_HOST')
                .";port=".getenv('DB_PORT')
                .";dbname=".getenv('DB_NAME')
                .";user=".getenv('DB_USERNAME')
                .";password=".getenv('DB_PASSWORD'));

            $this->connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            printf("Connection Sucess");

        }catch(\PDOException $e){

            print_r('connection error:'. $e->getMessage());

        }

        return $this->connect;
    }
}
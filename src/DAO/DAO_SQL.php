<?php
namespace App\DAO;

use App\system\Conf;
use mysqli;

class DAO_SQL{

    private $mysqli;

    function __construct()
    {

        $this->mysqli = new mysqli(Conf::$bdd['host'], Conf::$bdd['user'], Conf::$bdd['pass'], Conf::$bdd['database'], Conf::$bdd['port']);
    }

    function requete($sql)
    {
        try {
            return $this->mysqli->query($sql);
        } catch (Exception) {
            return false;
        }
    }
} 
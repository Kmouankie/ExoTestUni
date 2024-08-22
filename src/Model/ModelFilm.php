<?php
namespace App\Model;

use App\DAO\DAO_SQL;
use App\system\Conf;

class ModelFilm
{

    private $dao;

    function __construct()
    {

        $this->dao = new DAO_SQL();
    }

    public function getTitres()
    {

        $result = $this->dao->requete("SELECT DISTINCT `titre` FROM `film` ");
        $film = [];
        for ($row_no = 0; $row_no < $result->num_rows; $row_no++) {
            $result->data_seek($row_no);
            $row = $result->fetch_object();
            $film[] = $row;

        }
        return $film;
    }
}
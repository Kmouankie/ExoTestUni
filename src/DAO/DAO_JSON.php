<?php
namespace App\DAO;
class DAO_JSON {

    function requete($url)
    {
        $json = @file_get_contents($url);
        if (!$json)
        {
            return false;
        }
        else {
            return json_decode($json, true);
        }

    }
}

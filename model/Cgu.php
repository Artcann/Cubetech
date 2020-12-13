<?php
require_once("Framework/Model.php");

class Cgu extends Model
{

    public function getCgu()
    {
        $sql = "SELECT id, contenu, titre FROM cgu";

        $response = $this->executeRequest($sql);
        $dataArr = array();
        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

}?>
<?php
require_once("Framework/Model.php");

class Cgu extends Model
{

    public function getCgu()
    {
        $sql = "SELECT contenu, titre FROM cgu";

        return $this->executeSelect($sql);


        $response = $this->executeSelect($sql);
        $dataArr = array();
        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }
        return $dataArr;
    }


}
<?php
require_once("Framework/Model.php");

class Faq extends Model
{

    public function getFaq()
    {
        $sql = "SELECT id, contenu, titre FROM faq";
        $response = $this->executeRequest($sql);
        $dataArr = array();
        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

}?>
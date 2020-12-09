<?php
require_once("Framework/Model.php");

class Corps extends Model {

    public function getAllCorps() {

        $sql = 'SELECT id, type, nbMilitaire, nbOpex FROM corps';

        $dataArr = array();

        $response = $this->executeRequest($sql);

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

}


?>
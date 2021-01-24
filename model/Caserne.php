<?php

require_once "Framework/Model.php";

/**
 * Class Caserne
 */
class Caserne extends Model {

    /**
     * @param $id
     * @return mixed
     */
    public function getCaserneById($id)
    {
        $sql = "SELECT id, ville, addresse FROM app2021_caserne WHERE id=(?)";

        return $this->executeRequest($sql, array($id))->fetch();
    }

    /**
     * @return array
     */
    public function getAllCaserne() {
        $sql = "SELECT id, ville, addresse FROM app2021_caserne";

        $dataArr = array();
        $response = $this->executeRequest($sql);

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

    /**
     * @param $data
     */
    public function insertCaserne($data) {


        $sql = "INSERT INTO app2021_caserne (ville, addresse) VALUES (?, ?)";


        $this->executeRequest($sql, $data);
    }

}
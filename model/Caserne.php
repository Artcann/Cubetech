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
        $sql = "SELECT ville, addresse, nbMilitaire, nbOpex FROM caserne WHERE id=(?)";

        return $this->executeRequest($sql, array($id))->fetch();
    }

    /**
     * @return bool|PDOStatement
     */
    public function getAllCaserne() {
        $sql = "SELECT ville, addresse, nbMilitaire, nbOpex FROM caserne";

        return $this->executeRequest($sql);
    }

    /**
     * @param $data
     */
    public function insertCaserne($data) {

        $sql = "INSERT INTO caserne (ville, addresse, nbMilitaire, nbOpex) VALUES (?, ?, ?, ?)";

        $this->executeRequest($sql, $data);
    }

}
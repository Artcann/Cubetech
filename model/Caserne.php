<?php

require_once "Framework/Model.php";

class Caserne extends Model {

    public function getCaserneById($id)
    {
        $sql = "SELECT ville, addresse, nbMilitaire, nbOpex FROM caserne WHERE id=(?)";

        return $this->executeRequest($sql, array($id))->fetch();
    }

    public function getAllCaserne() {
        $sql = "SELECT ville, addresse, nbMilitaire, nbOpex FROM caserne";

        return $this->executeRequest($sql);
    }

    public function insertCaserne($data) {

        $sql = "INSERT INTO caserne (ville, addresse, nbMilitaire, nbOpex) VALUES (?, ?, ?, ?)";

        $this->executeRequest($sql, $data);
    }

}
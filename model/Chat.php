<?php
require_once 'Framework/Model.php';

class Chat extends Model {

    public function getRecentMessages($id_user, $id_contact) {

        $sql = "SELECT message, created_at FROM chat WHERE 
        (id_receiver=? AND id_sender=?) OR (id_receiver=? AND id_sender=?)";

        $response = $this->executeRequest($sql, array($id_user, $id_contact, $id_contact, $id_user));
        $dataArr = array();
        while($data = $response->fetch()) {
            array_push($dataArr, $data);
        }

        return $dataArr;
    }

}
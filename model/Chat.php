<?php
require_once 'Framework/Model.php';

class Chat extends Model {

    public function getRecentMessages($id_user, $id_contact, $lastId) {

        $sql = "SELECT chat.id, prenom, nom, message, created_at FROM chat 
        LEFT JOIN user ON chat.id_sender = user.id 
        WHERE ((id_receiver=? AND id_sender=?) OR (id_receiver=? AND id_sender=?)) AND chat.id > ?
    ";

        $response = $this->executeRequest($sql, array($id_user, $id_contact, $id_contact, $id_user, $lastId));
        $dataArr = array();
        while($data = $response->fetch()) {
            array_push($dataArr, $data);
        }

        return $dataArr;
    }

    public function insertMessage($id_user, $id_contact, $message) {
        $sql = "INSERT INTO chat (id_receiver, id_sender, message, created_at)
                VALUES (?, ?, ?, current_timestamp)";

        $values = array($id_contact, $id_user, $message);

        $this->executeRequest($sql, $values);
    }

}
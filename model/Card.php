<?php

require_once 'Framework/Model.php';

/**
 * Class Card
 */
class Card extends Model {

   
    public function getAllCards() {

        $sql = 'SELECT id, statut, date, caserne FROM app2021_carte';

        $dataArr = array();

        $response = $this->executeRequest($sql);

        while($data = $response->fetch()) {

            $dataArr[$data['id']] = $data;
            
        }

        return $dataArr;
    }

   public function getCardByCaserne($idCaserne) {

        $sql = "SELECT id, statut FROM app2021_carte WHERE caserne = ?";

        $val = array($idCaserne);

        $dataArr = array();

        $response = $this->executeRequest($sql, $val);

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
   }

   public function insertCard($date, $statut, $caserne) {
        $sql = "INSERT INTO app2021_carte (date, statut, caserne) VALUES (?, ?, ?)";
        $val = array($date, $statut, $caserne);

        $this->executeRequest($sql, $val);

   }

   public function deleteCard($id) {
       $sql = "DELETE FROM carte WHERE id= ? ";
       $val = array($id);

       $this->executeRequest($sql, $val);
   }

   public function modifyCard($id, $date, $statut, $caserne) {
       $sql = "UPDATE carte SET date=?, statut=?, caserne=? WHERE id=?";

       $this->executeRequest($sql, array($date, $statut, $caserne, $id));

    }
}
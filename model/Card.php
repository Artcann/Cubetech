<?php

require_once 'Framework/Model.php';

/**
 * Class Card
 */
class Card extends Model {

   
    public function getAllCards() {

        $sql = 'SELECT id, statut, date, caserne FROM carte';

        $dataArr = array();

        $response = $this->executeRequest($sql);

        while($data = $response->fetch()) {

            $dataArr[$data['id']] = $data;
            
        }

        return $dataArr;
    }

   public function getCardByCaserne($idCaserne) {

        $sql = "SELECT id, statut FROM carte WHERE caserne= '".$idCaserne."'";

        $dataArr = array();

        $response = $this->executeRequest($sql);

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
   }

}
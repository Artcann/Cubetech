<?php

/**
 * Class Card
 */
class Card extends model {

    /**
     * @return array
     */
    public function getAllCards() {

        $sql = 'SELECT id, statut, date, caserne FROM carte';

        $dataArr = array();

        $response = $this->executeRequest($sql);

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

}
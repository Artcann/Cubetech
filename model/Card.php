<?php

class Card extends model {

    public function getAllCards() {

        $sql = 'SELECT id, statut, date, caserne FROM carte';

        $dataArr = array();

        $response = $this->executeRequest($sql);

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

    }

}
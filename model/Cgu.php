<?php
require_once("Framework/Model.php");

class Cgu extends Model
{

    public function getCgu()
    {
        $sql = "SELECT id, contenu, titre FROM app2021_cgu";

        $response = $this->executeRequest($sql);
        $dataArr = array();
        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

    public function getCguById($id) {
        $sql = "SELECT id, contenu, titre FROM app2021_cgu WHERE id=?";
        $val = array($id);

        return $this->executeRequest($sql, $val)->fetch();
    }

    public function update($title, $content, $id) {
        $sql = "UPDATE app2021_cgu SET titre=?, contenu=? WHERE id=?";
        $val = array($title, $content, $id);

        return $this->executeRequest($sql, $val);
    }

}?>
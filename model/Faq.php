<?php
require_once("Framework/Model.php");

class Faq extends Model
{

    public function getFaq()
    {
        $sql = "SELECT id, contenu, titre FROM faq";
        $response = $this->executeRequest($sql);
        $dataArr = array();
        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

    public function getFaqById($id) {
        $sql = "SELECT contenu, titre FROM faq WHERE id=?";
        $val = array($id);

        return $this->executeRequest($sql, $val)->fetch();
    }
    
    public function update($title, $content, $id) {
        $sql = "UPDATE faq SET titre=?, contenu=? WHERE id=?";
        $val = array($title, $content, $id);

        return $this->executeRequest($sql, $val);
    }
}
?>
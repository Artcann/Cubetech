<?php
require_once("Framework/Model.php");

class Faq extends Model
{

    public function getFaq()
    {
        $sql = "SELECT id, contenu, titre FROM app2021_faq";
        $response = $this->executeRequest($sql);
        $dataArr = array();
        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

    public function getFaqById($id) {
        $sql = "SELECT contenu, titre FROM app2021_faq WHERE id=?";
        $val = array($id);

        return $this->executeRequest($sql, $val)->fetch();
    }
    
    public function update($title, $content, $id) {
        $sql = "UPDATE app2021_faq SET titre=?, contenu=? WHERE id=?";
        $val = array($title, $content, $id);

        return $this->executeRequest($sql, $val);
    }

    public function addFaq($title, $content) {
        $sql = "INSERT INTO app2021_faq (titre, contenu) VALUES (?, ?)";
        $val = array($title, $content);

        return $this->executeRequest($sql, $val);
    }

    public function delete($id) {
        $sql = "DELETE FROM app2021_faq WHERE id=?";
        $val = array($id);

        $this->executeRequest($sql, $val);
    }
}
?>

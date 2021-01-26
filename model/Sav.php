<?php
require_once("Framework/Model.php");


class Sav extends Model
{


    public function getAllSav() {
        $sql = "SELECT id, idUser, contenu, type, date, statut, destinataire FROM app2021_sav";

        $response = $this->executeRequest($sql);

        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
    }

    public function archiveSavById($id) {
    	$sql = "UPDATE app2021_sav SET statut = 1 WHERE id= ?";
        $values= array($id);
        $this->executeRequest($sql,$values);
    }
    public function createNotif($id){
        $sql= "INSERT INTO app2021_notification (idUser,contenu) VALUES (?,?)";
        $values= array($id,'Votre demande a été traitée');
        $this->executeRequest($sql,$values);
    }

}

?>




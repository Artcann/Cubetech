/*model recherche*/
<?php
require_once("Framework/Model.php");

class Recherche extends Model {

  public function getAllUsers($id, $nom, $prenom, $naissance, $grade, $caserne, $nationalite, $corps, $statut, $matricule, $login) {
      if getParameter()
        {
        $sql = "SELECT nom,prenom,login,mail,naissance,nationalite,statut,grade,corps,caserne,matricule FROM user
        NATURAL JOIN caserne 
        WHERE (nom LIKE"%$nom%" XOR prenom LIKE"%$prenom%" XOR login ="$login" XOR naissance="$naissance" XOR nationalite="$nationalite" XOR statut="$statut" XOR grade="$grade"
        XOR corps="$corps" XOR caserne="$caserne" XOR matricule="$matricule")
        ORDER BY nom";

        $response = $this->executeRequest($sql);
        $dataArr = array();
        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data;
        }

        return $dataArr;
        }
    }
}
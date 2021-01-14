/*model recherche*/
<?php
require_once("Framework/Model.php");

class Recherche extends Model {
  
  

  public function getUserByLogin($login)
    {
        $sql = "SELECT id, login, password, statut, prenom, nom, matricule, grade, naissance, nationalite, caserne, corps, mail FROM user WHERE login='".$login."'";
        return $this->executeRequest($sql, array($login))->fetch();
    }

    
    
    
  public function getAllUsers() 
    {
        $sql = "SELECT id, login, statut, prenom, nom FROM user";
        $response = $this->executeRequest($sql);
        $dataArr = array();

        while($data = $response->fetch()) {
            $dataArr[$data['id']] = $data; }

        return $dataArr;
    }
    
/*$sql = "SELECT nom,prenom,login,mail,naissance,nationalite,statut,grade,corps,caserne,matricule FROM user
        NATURAL JOIN caserne 
        WHERE (nom LIKE"%$nom%" XOR prenom LIKE"%$prenom%" XOR login ="$login" XOR naissance="$naissance" XOR nationalite="$nationalite" XOR statut="$statut" XOR grade="$grade"
        XOR corps="$corps" XOR caserne="$caserne" XOR matricule="$matricule")
        ORDER BY nom";
*/

  public function researchUsers($nom, $prenom, $naissance, $grade, $caserne, $nationalite, $corps, $statut, $matricule) {
    {
        $params = func_get_args();
   

        #print_r($params);

        $formated = array();

        foreach($params as $param) {
            if($param != '') {
               $param = "%".$param."%"; }
            
            array_push($formated, $param);
        }
    
    
        $sql = "SELECT id, nom, prenom, login, mail, naissance, nationalite, statut, grade, corps, caserne, matricule FROM user
                WHERE (nom LIKE ? OR prenom LIKE ? OR naissance = ? OR grade = ? OR caserne = ? OR nationalite LIKE ?
                OR corps = ? OR statut = ? OR matricule LIKE ?)";

        $val = array($nom, $prenom, $naissance);

        $response = $this->executeRequest($sql, $formated);
        $dataArr = array();
        while($data = $response->fetch()) {
            array_push($dataArr,$data);
        }
        
        return $dataArr;
    
    }
  






}
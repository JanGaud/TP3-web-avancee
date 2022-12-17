<?php

RequirePage::requireModel('Crud');

class ModelLogUser extends Crud {

    protected $table = 'log_user';

    public function getSessions(){
        $sql = "SELECT * FROM $this->table JOIN client ON idClient = id_client ORDER BY id_client LIMIT 30";
        $stmt  = $this->query($sql);
        return  $stmt->fetchAll();
    }


    public function logUserLoggedIn($idClient){
        //id_client, datetime, adresse_ip
        //modifier status de connexion
        $adresseIp = $_SERVER['REMOTE_ADDR'];
        $data = [
            "id_client" => $idClient,
            "adresse_ip" => $adresseIp
        ];
        $this->insert($data);
        $this->update("client", ["idClient"=>$idClient,"connection" => true], "idClient");
    }

    public function logUserLoggedOut($idClient){
        $this->update("client", ["idClient"=>$idClient, "connection" => false], "idClient");
    }

    public function insert($data){
        $ip = $data["adresse_ip"];
        $idClient = $data["id_client"];
        $sql = "INSERT INTO $this->table (date, id_Client, adresse_ip) VALUES (NOW(), :idClient, :ip)";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":idClient", $idClient);
        $stmt->bindValue(":ip", $ip);

        if(!$stmt->execute()){
            print_r($stmt->errorInfo());
        }else{
            return $this->lastInsertId();
        }
    }
}
?>
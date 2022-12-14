<?php

class ModelClient extends Crud {

    protected $table = 'client';
    protected $primaryKey = 'idClient';
    protected $fillable = ['idClient', 'nom_client', 'adresse', 'client_courriel', 'date_de_naissance', 'telephone', 'mdp'];


    public function selectClient($courriel){
        $sql ="SELECT * FROM $this->table WHERE client_courriel = :courriel";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":courriel", $courriel);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 1 ){
            return $stmt->fetch();
        }else{
            return null;
        }
    }
}

?>
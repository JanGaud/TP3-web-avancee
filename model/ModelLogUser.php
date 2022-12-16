<?php

class ModelLogUser extends Crud {

    protected $table = 'log_user';
    protected $primaryKey = 'id_client';
    protected $fillable = ['idLivre', 'titre'];

    public function getSessions(){

    }


    public function logUserLoggedIn($idClient){
        //id_client, datetime, adresse_ip
        //modifier status de connexion
        
        
    }

    public function logUserLoggedOut(){

    }

}
?>
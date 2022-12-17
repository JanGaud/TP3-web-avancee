<?php

class ModelMaison extends Crud {

    protected $table = 'maison_edition';
    protected $primaryKey = 'idMaison_edition';
    protected $fillable = ['idMaison_edition','adresse','nom_maison_edition','maison_edition_courriel', 'maison_edition_telephone'];   
}
?>
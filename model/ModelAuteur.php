<?php

class ModelAuteur extends Crud {

    protected $table = 'auteur';
    protected $primaryKey = 'idAuteur';
    protected $fillable = ['nom_auteur','idAuteur'];   
}
?>
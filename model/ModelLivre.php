<?php

class ModelLivre extends Crud {

    protected $table = 'livre';
    protected $primaryKey = 'idLivre';
    protected $fillable = ['idLivre', 'titre', 'Auteur_idAuteur', 'edition',                    
    'Maison_edition_idMaison_edition'];

    public function select($champ='id', $order='ASC' ){
        $sql = "SELECT * FROM $this->table JOIN auteur on idAuteur = Auteur_idAuteur JOIN maison_edition on     
        idMaison_edition = Maison_edition_idMaison_edition ORDER BY $champ $order";
        $stmt  = $this->query($sql);
        return  $stmt->fetchAll();
    }
}
?>

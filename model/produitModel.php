<?php
include_once "bdd.php";

class ProduitModel{
    private $bdd;
    public function __construct(){
        $this->bdd = Bdd::connexion();
    }
    public function getProduits(){
        return $this->bdd->query("SELECT * FROM produits")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getTypeProduits(){
        return $this->bdd->query("SELECT DISTINCT(type) FROM produits")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduitsParTypes($type){
        return $this->bdd->query("SELECT * FROM produits WHERE type='$type'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ajouterProduit($nom,$prix,$description,$etat,$type,$id_proprio){
        $user = $this->bdd->prepare("INSERT INTO produits(nom,prix,description,etat,type,id_proprio) VALUES(?,?,?,?,?,?)");
        return $user->execute([$nom,$prix,$description,$etat,$type,$id_proprio]);
    }

    public function getProduitsDetail($id_produit){
        return $this->bdd->query("SELECT * FROM produits WHERE id_produit = $id_produit")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduitsByProprio($id){
        return $this->bdd->query("SELECT * FROM produits WHERE id_proprio='$id'")->fetchAll(PDO::FETCH_ASSOC);
    }
}
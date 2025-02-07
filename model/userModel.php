<?php
include_once "bdd.php";

class UserModel{
    private $bdd;
    public function __construct(){
        $this->bdd = Bdd::connexion();
    }
    public function inscription($nom,$prenom,$pseudonyme,$email,$mdp,$date_naissance){
        $user = $this->bdd->prepare("INSERT INTO users(nom,prenom,pseudo,email,mdp,date_naissance) VALUES(?,?,?,?,?,?)");
        return $user->execute([$nom,$prenom,$pseudonyme,$email,$mdp,$date_naissance]);
    }

    public function getUserByEmail($email){
        return $this->bdd->query("SELECT * FROM users WHERE email='$email'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllEmail(){
        return $this->bdd->query("SELECT email FROM users")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function details($id){
        $resultat= $this->bdd->query("SELECT * from users WHERE id_user='$id'")->fetchAll(PDO::FETCH_ASSOC);
        return $resultat[0];
    }

    public function UpdateUser($prenom,$nom,$email,$mdp,$id_user){
        $commande = $this->bdd->prepare("UPDATE users SET prenom=?,nom=?,email=?,mdp=? WHERE id_user=?");
        return $commande->execute([$prenom,$nom,$email,$mdp,$id_user]);
    }

    public function DeleteUser($id){
        $commande = $this->bdd->prepare("DELETE FROM users WHERE id_user=?");
        return $commande -> execute([$id]);
    }

    
    public function getAllUser() {
        return $this->bdd->query("SELECT * FROM users WHERE role = '{user}'")->fetchAll(PDO::FETCH_ASSOC);
    }
}
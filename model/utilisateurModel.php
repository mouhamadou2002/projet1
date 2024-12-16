<?php

require_once('./model/db.php');

function getAll(){
    global $connexion;
    $sql ="SELECT * FROM utilisateur";
    return pg_query($connexion,$sql);
}

function delete($id){
    global $connexion;
    $sql ="DELETE FROM utilisateur WHERE id =$id";
   return pg_query($connexion,$sql);
}

function add($nom,$prenom,$email,$mdp){
    global $connexion;
    $sql ="INSERT INTO utilisateur (nom, prenom, email, mot_de_passe) values
     ('$nom',$prenom,$email,$mdp)";
   return pg_query($connexion,$sql);
}

function update($nom,$prenom,$email,$mdp){
    global $connexion;
    $sql ="UPDATE utilisateur SET nom='$nom',prenom=$prenom,email='$email',mot_de_passe=$pdm
    where id=$id";
   return pg_query($connexion,$sql);
}



?>



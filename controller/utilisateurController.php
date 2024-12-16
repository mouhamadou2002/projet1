<?php
require_once('./model/utilisateurtModel.php');

function index(){
   $utilisateurs = getAll();
   require_once './view/utilisateur/list.php';
}

function remove(){
   $id = $_GET['id'];
   delete($id);
   header('location:index.php?controller=utilisateur');
}

function pageAdd(){
   require_once './view/utilisateur/add.php';
}

function save(){
   $nom =$_POST['nom'];
   $prenom = $_POST['prenom'];
   $email = $_POST['email'];
   $mdp = $_POST['mot_de_passe'];
   add($nom,$prenom,$email,$mdp);
   header('location:index.php?controller=utilisateur');
}


?>
?>
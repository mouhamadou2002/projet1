<?php


$serveur="localhost";
$port = "5433";
$user="postgres";
$pwd="mbour2022";
$dbname="l3_GDA_2024";

$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if(!$connexion){
    echo "Erreur de connexion";
}else{
   echo "succes";
}


?>
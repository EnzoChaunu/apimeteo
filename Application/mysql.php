<?php
header('Content-Type: application/json');
$connect = new PDO("mysql:host=localhost;dbname=station",'root','',array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

//on verifie que la requete est bien reçue
if(isset($_GET['requete'])){
    $requete = $_GET['requete'];
}
//on teste son contenu
if($requete = ""){

    echo "[]";

}else{
    $query = 'SELECT * FROM temperatures WHERE IDreleve LIKE "%'.$requete.'%" ';
    // on prepare la requete
    $req = $connect -> prepare($query);
    // on execute
    $req->execute(); // on remplace le parametre de la requete par sa valeur

    while($data = $req -> fetchAll()){

        echo(json_encode($data));
       // echo '<p>Temperature : '.$data['degres'].'°c</br>Taux humidité : '.$data['humidite'].'%</br>Date : '.$data['Date'].'</p>';
    }

  

}

?>
<?php

function getConnexion(){

return new PDO ('mysql:host=localhost;dbname=gestionpfe' , 'root', '' );

}

function getAllEtudiants(){

    $tab=[];

    $cnx=getConnexion();

    $req=$cnx->query("select * from etudiant");

    $req->setFetchMode(PDO::FETCH_OBJ);

    while($ligne=$req->fetch()){

$tab[]=$ligne;

    }

    return $tab;

}
function getAllEnseignats(){

    $tab=[];

    $cnx=getConnexion();

    $req=$cnx->query("select * from enseignant");

    $req->setFetchMode(PDO::FETCH_OBJ);

    while($ligne=$req->fetch()){

$tab[]=$ligne;

    }

    return $tab;

}
function getAllPfes(){

    $tab=[];

    $cnx=getConnexion();

    $req=$cnx->query("select * from pfe");

    $req->setFetchMode(PDO::FETCH_OBJ);

    while($ligne=$req->fetch()){

$tab[]=$ligne;

    }

    return $tab;

}
function AddPfe($titre,$id_ens,$id_etd){
    $cnx=getConnexion();
    $req=$cnx->prepare("insert into pfe values(null,?,?,?");
    $req->bindParam(1,$titre);
    $req->bindParam(2,$id_ens);
    $req->bindParam(3,$id_etd);
    $req->execute();

}
function getAllPfe(){
    $tab=[];
    $cnx=getConnexion();
    $req=$cnx->query("select * from pfe");
    $req->setFetchMode(PDO::FETCH_OBJ);
    while($ligne=$req->fetch()){
        $tab[]=$ligne;
    }
    return $tab;
}
function deletePfe($id){

    $cnx=getConnexion();

    $req=$cnx->prepare("delete from pfe where id=?");

    $req->bindParam(1,$id);

    $req->execute();

}
function getEtudiantById($id){
    $cnx=getConnexion();
    $req=$cnx->prepare("select nom from etudiant where id=?");
    $req->bindParam(1,$id);
    $req->execute();


}
function getEnseignantById($id){
    $cnx=getConnexion();
    $req=$cnx->prepare("select nom from enseignant where id=?");
    $req->bindParam(1,$id);
    $req->execute();


}
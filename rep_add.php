<?php
require_once("functions.php");
$titre=$_GET["titre"];
$id_etd=$_GET["etudiant"];
$id_ens=$_GET["enseignant"];
AddPfe("$titre","$id_etd","$id_ens");
header("location:acceuil.php");
?>
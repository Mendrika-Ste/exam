<?php
include_once 'connexion.php';

function get_all_lines($sql){
    $req = mysqli_query(dbconnect(),$sql );
    $result = array();
    while ($line = mysqli_fetch_assoc($req)) {
        $result[] = $line;
    }
    mysqli_free_result($req);
    return $result;
}

function get_one_line($sql){
    $req = mysqli_query(dbconnect(),$sql );
    $result = mysqli_fetch_assoc($req);
    mysqli_free_result($req);
    return $result;
}

function execute_query($sql)
{
    $req = mysqli_query(dbconnect(), $sql);
    if (!$req) {
        die('Erreur SQL : ' . mysqli_error(dbconnect()));
    }
    return $req;
}

function checkLogin($etu)
{
    $sql = "SELECT * FROM membre WHERE numero_etu='%s'";
    $sql = sprintf($sql, $etu);
    return get_one_line($sql);

    }

function add_olona($a,$b,$c){
    $sql="INSERT INTO membre(nom,numero_etu, image_profil) VALUES (%s,%s,%s)";
    $sql= sprintf($sql,$a,$b,$c);
    execute_query($sql);

}

function produit_accueil(){
    $sql= " SELECT categorie.id_categorie,produit.id_produit,nom_categorie,produit.nom as name_prod,
    prix_vente,prix_reference,quantite_dispo,date_dispo
     FROM produit_membre join produit on produit.id_produit = produit_membre.id_produit
    join categorie on categorie.id_categorie = produit.id_categorie";
    return get_all_lines($sql);
}

function mesventes($etu)
{
// $combien = "SELECT id_membre FROM membre where numero_etu = %s";
// $combien = sprintf($combien,$etu);
// $der=get_one_line($sql);

$sql= "SELECT SUM(prix_vente * quantite) as price
FROM vente join produit_membre on produit_membre.id_produit_membre = vente.id_produit_membre
join membre on produit_membre.id_membre = membre.id_membre where membre.id_membre = %s ";
$sql = sprintf($sql,$etu);

return get_one_line($sql);


}

function ventes($etu)
{

$sql= "SELECT produit.nom as name_prod  
FROM vente join produit_membre on produit_membre.id_produit_membre = vente.id_produit_membre
join membre on produit_membre.id_membre = membre.id_membre 
join produit on produit.id_produit = produit_membre.id_produit
where membre.id_membre = %s ";
$sql = sprintf($sql,$etu);

return get_all_lines($sql);


}








?>
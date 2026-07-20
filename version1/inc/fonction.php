<?php
include_once 'connection.php';

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



function checkLogin($etu)
{
    $sql = "SELECT * FROM membre WHERE numero_etu='%s'";
    $sql = sprintf($sql, $etu);
    return get_one_line($sql);

    }

// function get_produit_membre($etu){
//     $sql="SELECT produit.nom as nom_produit,prix_vente,quantite_dispo FROM produit_membre join membre on produit_membre.id_membre=membre.id_membre join produit on produit_membre.id_produit=produit.id_produit WHERE numero_etu='%s'"
//     $sql = sprintf($sql, $etu);
//     return get_one_line($sql);
// }








?>
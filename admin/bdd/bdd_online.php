<?php
// Copyright (c) 2022, All Right Reserved, Noa Ledet alias TheLightDragon

try
{
    $bdd = new PDO('mysql:host=ln189301-004.dbaas.ovh.net;port=35708;dbname=azndarkproduction', 'site_azndark', 'TheGuardianLight57');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

/*
$req = $bdd->prepare('SELECT * FROM list_moduction WHERE id = ? AND visible = 1');
$req->execute(array(intval($_GET['id'])));
$donnees = $req->fetch();
*/
?>
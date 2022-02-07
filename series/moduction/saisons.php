<!--Copyright (c) 2021, All Right Reserved, Noa Ledet alias TheLightDragon-->

<!DOCTYPE html>
<html lang="fr">
<?php require('../../admin/bdd/bdd_online.php') ?>
<head>
    <base target="_blank">

    <link rel="apple-touch-icon" sizes="57x57" href="../../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
    <link rel="manifest" href="../../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="../../styles/css/series/moduction/saisons.css">
    <link rel="stylesheet" href="../../styles/css/menu.css">
    <link rel="stylesheet" href="../../styles/css/general.css">

    <title>Moduction Saison <?php echo $_GET['saison'] ?> | Azn & Dark Production</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TheLightDragon">
    <meta name="description" content="Bienvenue sur le site officiel de la AznDarkProduction !">
    <meta name="keyword" content="Aznching, Azn, Dark, Darkheaven, Minecraft, Youtubeur minecraft, Azndark, Azndarkproduction">
</head>

<body>
<?php require('../../menu/menu.php') ?>

<div>
    <br/>
    <h1 id="titre">Moduction Saison <?php echo $_GET['saison'] ?></h1>
    <br/>

    <?php
    $saison = "moduction_s".$_GET['saison'];

            $req = $bdd->query("SELECT * FROM  $saison  WHERE visible = 1");
            $donnees = $req->fetch();

            if(isset($donnees['titre'])==true and $donnees['visible']==1){
                ?>
    <table class="tablePresentGene">
        <tr>
            <td style="width: 25%;">
                <h5>Episode</h5>
            </td>
            <td style="width: 25%;">
                <h5>Titre</h5>
            </td>
            <td style="width: 25%;">
                <h5>Date de publication&nbsp;:</h5>
            </td>
            <td style="width: 25%;">
                <h5>Lien&nbsp;:</h5>
            </td>
        </tr>
        <?php
        $req = $bdd->query("SELECT * FROM $saison WHERE visible = 1"); /* Sert à ce que la première ligne de la bdd soit affiché. */
        while($donnees = $req->fetch()){
            ?>
            <tr>
                <td>
                    <p class="center">Episode <?php echo $donnees['episode']?></p>
                </td>
                <td>
                    <p class="center"><?php echo $donnees['titre'] ?></p>
                </td>
                <td>
                    <p class="center"><?php if(isset($donnees['date_publication'])){ echo $donnees['date_publication']; } else { echo "Inconnu"; }?></p>
                </td>
                <td>
                    <p class="center"><a target="_self" href="https://www.azndark-test.thelightguardian.fr/series/moduction/episodes?saison=<?php echo $_GET['saison'] ?>&episode=<?php echo $donnees['episode'] ?>">Voir l'&eacute;pisode</a></p>
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php } ?>

</div>

</body>
<?php require('../../menu/pied_page.php');?>
</html>
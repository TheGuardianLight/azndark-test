<!-- Copyright (c) 2022, All Right Reserved, Noa Ledet alias TheLightDragon -->

<!DOCTYPE html>
<html lang="fr">
<?php require('../admin/bdd/bdd_online.php')

?>
<head>
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="../styles/css/series/moduction.css">
    <link rel="stylesheet" href="../styles/css/menu.css">
    <link rel="stylesheet" href="../styles/css/general.css">

    <title>S&eacute;rie Moduction | Azn & Dark Production</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TheLightDragon">
    <meta name="description" content="Retrouvez ici toutes les saisons de moduction de la cha??ne !">
    <meta name="keyword" content="Aznching, Azn, Dark, Darkheaven, Minecraft, Youtubeur minecraft, Azndark, Azndarkproduction">

</head>
<?php require('../menu/menu.php')?>

<body>

<div>
    <br/>
    <h1 id="titre">S&eacute;rie moduction</h1>
    <br/>
    <div>
        <p class="p_desc">Ici vous pouvez retrouver toutes les saisons de Moduction !<br/>Les ??pisodes et saisons arriveront au fur et a mesure, le temps de r??pertorier tout les ??pisodes.</p>
        <div>

            <?php
            $req = $bdd->query("SELECT * FROM liste_moduction WHERE visible = 1");
            $donnees = $req->fetch();

            if(isset($donnees['saison'])==true and $donnees['visible']==1){
                ?>
                <table class="tablePresentGene">
                    <tr>
                        <td style="width: 33%;">
                            <h5>Saison&nbsp;:</h5>
                        </td>
                        <td style="width: 33%;">
                            <h5>Nombre d'&eacute;pisode&nbsp;:</h5>
                        </td>
                        <td style="width: 33%;">
                            <h5>Liens&nbsp;:</h5>
                        </td>
                    </tr>
                    <br/>
                    <?php
                    $req = $bdd->query("SELECT * FROM liste_moduction WHERE visible = 1");
                    while($donnees = $req->fetch()){
                        ?>
                        <tr>
                            <td>
                                <p class="center">Moduction Saison <?php echo $donnees['saison']?></p>
                            </td>
                            <td>
                                <p class="center"><?php if(isset($donnees['nbe_episode'])){ echo $donnees['nbe_episode']; } else { echo "N/A"; }?></p>
                            </td>
                            <td>
                                <p class="center"><a target="_self" href="https://www.azndark-test.thelightguardian.fr/series/moduction/saisons?saison=<?php echo $donnees['id'] ?>">Voir la saison</a></p>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } else {

            } ?>
        </div>
    </div>
</div>

</body>
<?php require('../menu/pied_page.php')?>

</html>
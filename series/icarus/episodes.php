<!--Copyright (c) 2021, All Right Reserved, Noa Ledet alias TheLightDragon-->

<!DOCTYPE html>
<html lang="fr">
<?php require('../../admin/bdd/bdd_online.php');

$episode = $_GET['episode'];

$req = $bdd->query("SELECT * FROM icarus WHERE episode = $episode AND visible = 1");
    $donnees = $req->fetch();
?>

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

    <link rel="stylesheet" href="../../styles/css/series/moduction/episodes.css">
    <link rel="stylesheet" href="../../styles/css/menu.css">
    <link rel="stylesheet" href="../../styles/css/general.css">

    <title>Icarus Ep<?php echo $_GET['episode']?> | Azn & Dark Production</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TheLightDragon">
    <meta name="description" content="Bienvenue sur le site officiel de la AznDarkProduction !">
    <meta name="keyword" content="Aznching, Azn, Dark, Darkheaven, Minecraft, Youtubeur minecraft, Azndark, Azndarkproduction">
</head>

<body>
<?php

if(isset($donnees['id'])== true or isset($donnees['visible'])== true){

require('../../menu/menu.php');

?>

<div>

    <br/>
    <h1 id="titre">Icarus</h1>
    <p class="titre_ep">Episode <?php echo $_GET['episode'] ?>&nbsp;: <?php echo $donnees['titre'] ?></p>
    <br/>

    <div>
        <div id="div_info">
            <h2 style="text-align: center; font-size: 25px">Date de publication&nbsp;:</h2>
            <p class="desc_vid"><?php if(isset($donnees['date_publication']) and isset($donnees['lien_youtube'])){ echo $donnees['date_publication']; } else { echo "Inconnu"; }?></p>
        </div>
        <div id="div_info">
            <table style="width: 100%">
                <tr>

                    <!-- Bouton Episode précédent -->

                    <td style="width: 50%">
                        <?php

                        /* Test s'il existe un épisode avant celui-ci. Si un épisode existe, il affiche le bouton "épisode précédent". Sinon s'il existe une saison avant celui-ci, il affiche le bouton "saison précédente". Sinon il n'affiche pas de bouton. */

                        $episode_previous = $_GET['episode'] - 1;

                        $req = $bdd->query("SELECT * FROM icarus WHERE episode = $episode_previous AND visible = 1");
                        $donnees = $req->fetch();

                        if(isset($donnees['episode']) and $donnees['visible']=1) { ?>

                            <a id="bouton" target="_self" href="https://www.azndark-test.thelightguardian.fr/series/icarus/episodes?episode=<?php echo $episode_previous ?>">◀&nbsp;Episode pr&eacute;c&eacute;dent</a>

                        <?php } else { ?>

                            <!-- Laisser cette zone vide -->

                        <?php } ?>

                    </td>

                    <!-- Bouton Episode suivant -->

                    <td style="width: 50%">

                        <?php

                        /* Test s'il existe un épisode après celui-ci. Si un épisode existe, il affiche le bouton "épisode suivant". Sinon s'il existe une saison après celui-ci, il affiche le bouton "saison suivante". Sinon il n'affiche pas de bouton. */

                        $episode_next = $_GET['episode'] + 1;

                        $req = $bdd->query("SELECT * FROM icarus WHERE episode = $episode_next AND visible = 1");
                        $donnees = $req->fetch();

                        if(isset($donnees['episode']) and $donnees['visible']=1) { ?>

                            <a id="bouton" target="_self" href="https://www.azndark-test.thelightguardian.fr/series/icarus/episodes?episode=<?php echo $episode_next ?>">Episode suivant&nbsp;▶</a>

                        <?php } else { ?>

                            <!-- Laisser cette zone vide -->

                        <?php } ?>
                    </td>
                </tr>
            </table>
        </div>
        <?php
        $req = $bdd->query("SELECT * FROM icarus WHERE episode = $episode AND visible = 1");
        $donnees = $req->fetch();
        ?>
        <iframe width="854" height="480" src="https://www.youtube.com/embed/<?php echo $donnees['lien_youtube'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

</body>
<?php require('../../menu/pied_page.php');

} else { ?>

    <h1 style="color: red">Cette &eacute;pisode/saison n'existe pas</h1>

<?php } ?>
</html>
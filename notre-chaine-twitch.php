<!--Copyright (c) 2021  All Right Reserved, Noa Ledet (TheLightdragon)-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <base target="_blank">

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="styles/css/chaine_twitch.css">
    <link rel="stylesheet" href="styles/css/menu.css">
    <link rel="stylesheet" href="styles/css/general.css">

    <title>Notre cha&icirc;ne Twitch | Azn & Dark Production</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TheLightDragon">
    <meta name="description" content="Vous vous demandez comment regarder notre stream ou nous rejoindre ? Cette page vous permettra de directement accéder à notre chaîne Twitch ou de regarder directement notre stream ici.">
    <meta name="keyword" content="Twitch, Aznching, Azn, Dark, Darkheaven, Minecraft, Youtubeur minecraft, Azndark, Azndarkproduction">
</head>

<body>
<?php require('menu/menu.php') ?>

<div>

    <br/>
    <h1>Notre chaîne Twitch</h1>
    <br/>
    <p>
        Youtuber sur Minecraft, ici je fais des jeux beaucoup plus variés avec une grande préférence pour les Rogue Like tels Enter the Gungeon ou Dead Cells.<br/>Je tryhard beaucoup RocketLeague et suis les actualités au niveau des jeux !
    </p>
    <p>
        Si vous souhaitez me suivre ou regarder mes anciens streams, vous le pouvez grâce au bouton ci-dessous.
    </p>
    <p style="padding-bottom: 15px">
        Pour information, nos stream se déroulent en général de 21h jusqu'à environ 2h ou 3h du matin. Il nous arrive également de faire des live 24h.
    </p>
    <br/>
    <a href="https://www.twitch.tv/azndark" id="bouton_twitch">Ma cha&icirc;ne Twitch</a>
    <br/>

    <div class="div_player">
        <script src= "https://player.twitch.tv/js/embed/v1.js"></script>
        <table style="width: 100%">
            <tr>
                <td>
                    <div id="player_azndark"></div>
                </td>
                <td>
                    <iframe src="https://www.twitch.tv/embed/azndark/chat?parent=azndark-test.thelightguardian.fr"
                            height="576px"
                            width="100%">
                    </iframe>
                </td>
            </tr>
        </table>
        <script type="text/javascript">
            var options = {
                width: 1024,
                height: 576,
                channel: "azndark",
                parent: ["embed.thelightguardian.fr", "azndark-test.thelightguardian.fr"]
            }
            var player = new Twitch.Player("player_azndark", options);
            player.setVolume(0.5);
        </script>

    </div>

</div>

</body>
<?php require('menu/pied_page.php');?>

</html>
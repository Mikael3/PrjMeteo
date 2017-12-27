<?php

session_start();

$iduser = $_COOKIE['mail'];

$test = "host=localhost port=5432 dbname=deusxmachina user=admin password=admin";

$connect = pg_connect($test);

$requete = pg_query("SELECT nom, prenom FROM utilisateur WHERE mail = '".$iduser."';");

$resultat = pg_fetch_array($requete);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Page météo</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_formateurs.css">
    <link rel="stylesheet" type="text/css" href="css/style_menu_haut_et_carte.css">
</head>

<body>

    <!-- Début menu du haut -->

    <div id="logo">
        <img src="images/logo_METEON.png" title="logo" class="logo"></img>
    </div>
    <div id="diventre"></div>
    <div id="date"></div>
    <div id="n_p">
        <span id="php_np">
            <!-- Requete pour afficher nom et prenom --><?php echo "$resultat[0] $resultat[1]";?>
        </span>
    </div>
        <div id="pos_bouton">
            <input type="button" name="boutonmodif" onclick="redirection_modif()" id="bouton_modifier" value="Modifier">
            <input type="button" name="boutondeco" onclick="redirection_index()" id="bouton_deconnexion" value="Déconnexion">
        </div>
    </div>
    <div id="menu_lat_droit">
        <div id="icone_1">
            <img src="images/ico_rainbow.png">
        </div>
        <div id="icone_2">
            <img src="images/ico_soleil.png">
        </div>
        <div id="icone_3">
            <img src="images/ico_brouillard.png">
        </div>
        <div id="icone_4">
            <img src="images/ico_pluie.png">
        </div>
        <div id="icone_5">
            <img src="images/ico_vent.png">
        </div>
        <div id="icone_6">
            <img src="images/ico_orage.png">
        </div>
    </div>
    <div id="carte">
        <img id="img_carte" src="images/map.jpg">
        <div class="wrapper">
            <div class="item1"><img id="ico" title="Je vais bien." src="images/ico_soleil.png">
                <br />
                <span>mon texte</span>
            </div>
            <div class="item2"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item3"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item4"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item5"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item6"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item7"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item8"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item9"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item10"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item11"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item12"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item13"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item14"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
            <div class="item15"><img id="ico" src=images/ico_soleil.png>
                <br />
                <span>mon texte</span>
            </div>
        </div>
    </div>
    <div id="review">
        <div class="jour">J-3</div>
        <div class="jour">J-2</div>
        <div class="jour">J-1</div>
    </div>
    <div id="menu_lat_droit_stat">
        <form>
            <br>
            <br>
            <br>
            <span>De :</span>
            <br>
            <input type="date" name="debut">
            <br>
            <br>
            <span>A :</span>
            <br>
            <input type="date" name="arriver">
            <br>
            <br>
            <br>
            <select name="liste_duree" style="width: 150px">
                <option>Semaine en cours</option>
                <option>Mois en cours</option>
                <option>Année en cours</option>
            </select>
            <br>
            <br>
            <br>
            <br>
            <br>
            <select name="liste_nombre" style="width: 100px">
                <option>Groupe</option>
                <option>Personne</option>
            </select>
            <br>
            <br>
            <br>
            <br>
            <input type="submit" name="">
        </form>
    </div>
    <div id="affichage_stat"></div>
    <script type="text/javascript" src="js/style.js"></script>
</body>

</html>
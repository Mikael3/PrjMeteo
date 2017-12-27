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
    <link rel="stylesheet" type="text/css" href="css/style_apprenants.css">
    <link rel="stylesheet" type="text/css" href="css/style_menu_haut_et_carte.css">
</head>

<body>

    <!-- Début filtre transparent permettant de bloquer l'interraction sur la page web tant que l'humeur n'est pas valider -->

    <div id="humeur">

        <div id="formulaire">
            <form id="formulaire_humeur" method="post" action="traitement.php">
                <p id="texte_humeur">De quelle humeur êtes vous?</p>
                <img src="images/ico_rainbow.png" title="Arc en ciel" class="icones" id="premiere_icone" value="1" onclick="getValueUn();MapIcone()" style="cursor:pointer;">
                </img>
                <img src="images/ico_soleil.png" title="Soleil" class="icones" value="2" id="deuxieme_icone" onclick="getValueDeux();MapIcone()" style="cursor:pointer;">
                </img>
                <img src="images/ico_brouillard.png" title="Vent" class="icones" value="3" id="troisieme_icone" onclick="getValueTrois();MapIcone()" style="cursor:pointer;">
                </img>
                <img src="images/ico_pluie.png" title="Pluie" class="icones" value="3" id="quatrieme_icone" onclick="getValueQuatre();MapIcone()" style="cursor:pointer;">
                </img>
                <img src="images/ico_vent.png" title="Brouillard" class="icones" value="4" id="cinquieme_icone" onclick="getValueCinq();MapIcone()" style="cursor:pointer;">
                </img>
                <img src="images/ico_orage.png" title="Orage" class="icones" value="5" id="sizieme_icone" onclick="getValueSix();MapIcone()" style="cursor:pointer;">
                </img>

                <textarea id="commentaire" placeholder="Commentaire" maxlength="200" value="" id=o nclick="javascript:getComment()" style="cursor:pointer;"></textarea>

                <input id="valider" type="button" value="Valider" onclick="masquer_div('humeur');MapIcone()" />
            </form>
        </div>
    </div>
    <div id="logo">
        <img src="images/logo_METEON.png" title="logo" class="logo">
        </img>
    </div>
    <div id="diventre"></div>
    <div id="date"></div>
    <div id="n_p">
        <span id="php_np">
            <!-- Requete pour afficher nom et prenom -->
            <?php echo "$resultat[0] $resultat[1]";?>
        </span>
        <div id="pos_bouton">
            <input type="button" name="boutonmodif" onclick="redirection_modif()" id="bouton_modifier" value="Modifier">
            <input type="button" name="boutondeco" onclick="redirection_index()" id="bouton_deconnexion" value="Déconnexion">
        </div>
    </div>
    <div id="menu_lat_droit">
        <div id="j_quatre">J-4</div>
        <div id="j_trois">J-3</div>
        <div id="j_deux">J-2</div>
        <div id="j_un">J-1</div>
        <div id="total_ico_jour">Total des icones</div>
        <div id="humeur_stat">Humeur stat</div>
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
    <script type="text/javascript" src="js/style.js"></script>
</body>

</html>
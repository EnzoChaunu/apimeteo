<!DOCTYPE html> 
<html lang="fr"> 
    <head> 
        <title>Un site pour Mobile</title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <link rel ="stylesheet" href="first.css"/>
        <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
        <script type="text/javascript" src ="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
    </head> 
    <body>      
        <!-- une page -->
        <section id="page1" data-role="page" data-add-back-btn="true">
            <!-- en-tête -->
            <header data-role="header"><h1> Application météo</h1></header>
            <h2 class="center">
                Los Italianos
            </h2>     
            <h3 class="center">
                
            </h3>
            <p class="center">
                <!-- un logo -->
                <img src="snk2.jpg" alt="Un logo !" width="160" height="124" />
            </p>
            
            <!-- une vue dépliante -->
            <div data-role="collapsible" data-content-theme="a">
                <h3>La station</h3>
                <p>Voici la station météo ( un peu foireuse mais on fait avec ) que le magnifique Enzo Chaunu dit le turbulant vous a pondu!</br>
                Non en vrais grâce à Marine, Lola et Enecco. Félicitation à eux malgrès les galères.
                </p>
                <img src="pistes.png" alt="" width="" height=""/>
            </div>                
            
            <div data-role="collapsible" data-content-theme="b">
                <h3>Présentation du sujet</h3>
                <p>Le domaine nordique est un paradis pour les fondeurs ...</p>            
            </div>    
            
            <div data-role="collapsible" data-content-theme="c"  id ="centre">
                <h3>Données de l'API</h3>
                <p>Voici donc les données récupérées par nos "capteurs".. </p>
                <!-- une grille à 2 colonnes -->
                <div class="ui-grid-b">
                    <label for ='label'>Entrez le numero : </label><input type='text' id='label'/></br>
                    <div class="ui-block-a">
                        <div class="ui-bar ui-bar-a" style="height:60px">
                            <h4>Températures</h4>
                            <script type = "text/javascript">
                            //Une page ne peut pas être manipulée en toute sécurité tant que le document n'est pas «prêt»
                            $(document).ready(function(){
                                $("#label").on("keyup",function(){//si on detecte un evenement qui est "relacher touche" alors on envoie la fonction
                            //on recupere le texte recherché
                                     var requete = $("#label").val();
                                //on envoie la requete à l'API
                                     $.get("mysql.php?requete="+requete).done(function(data){//si j'obtient un resultat alors execution fonction
                            //recupere resultat requete
                                            $("#result").html(""); // on vide la div result
                                            var i = 0;
                                            while(i<data.length){
                                                $("#result").append("<p>"+data[i].humidite+" %</p>");
                                                $("#result2").append("<p>"+data[i].degres+" C°</p>"); 
                                                $("#result3").append("<p>"+data[i].Date+" </p>");// on ajoute les resultats a la div
                                                i++;
                                             }
                                        })
                        
                                    })
                             })
                            </script>
                            <div id="result2">
                                
                            </div>
                        </div>
                    </div>
                    <div class="ui-block-b">
                        <div class="ui-bar ui-bar-a" style="height:60px">
                            <h4>Taux d'humidité</h4>
                            <div id="result"></div>
                        </div>
                    </div>
                    <div class="ui-block-c">
                        <div class="ui-bar ui-bar-a" style="height:60px">
                           <h4>Dates</h4> 
                           <div id="result3"></div>
                        </div>
                    </div>
                </div>
            </div>            
            
            <div data-role="collapsible" data-content-theme="d">
                <h3>Snowkite</h3>
                <p>Le snowkite est à la portée de tous ceux qui recherchent de nouvelles sensations sur la neige en skis ou en surf ...</p>            
                <img src="snow.png" alt="" width="" height=""/>
            </div>            
            
            <!-- une vue en liste -->
            <ul data-role="listview" data-inset="true">
                <li>
                  <a href="#page2" data-transition="slide">                  
                  <h3>En savoir plus ...</h3>
                  <p><img class="margesimg" src="station.png" alt="" /></p>
                  </a>              
                </li>
            </ul>
            <p></p>
            <!-- un pied de page -->
            <footer data-role="footer"><h1>©&nbsp;2021&nbsp;</h1></footer>
        </section>

        <!-- une deuxième page -->
        <section id="page2" data-role="page">
            <header data-role="header"><h1>Application Météo</h1></header>
            <h2 class="center">
                La suite ici !
            </h2>     
            <p class="center">
                <!-- un logo -->
                <img src="logo-montagne.jpg" alt="Un logo !" width="160" height="124" />
            </p>
            
            <div class="content" data-role="content">                
                <p class="center">Contact : 04.04.04.04.04</p>
                <p class="center">Horaires d'ouverture : <br/>
                du 1er Decembre au 31 Mars,<br/>
                de 9h à 12h et de 13h30 à 17h30.</p>                
            </div>
            
            <!-- des boutons -->
            <div class="center" data-role="controlgroup" data-type="horizontal" data-mini="true">
                <a href="#page1" data-role="button" data-icon="back" data-iconpos="left">Retour</a>
                <a href="mailto:info%40neige.com" data-role="button" data-icon="forward" data-iconpos="right" target="_blank">info(at)neige.com</a>
            </div>
            <footer data-role="footer" data-position="fixed"><h1>©&nbsp;2016&nbsp;</h1></footer>
        </section>
        
    </body>
</html>
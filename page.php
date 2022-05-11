<!DOCTYPE html>
<html>
    <!-- Tete de la page qui contient les métadonnées -->
    <head>
        <title>Jeu du bonneteau</title>
        <!-- lier la page html avec la feuille de styles css -->
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <!-- Corp de la page -->
    <body>
        <form method="POST">
            <div class="container">
                <h1 class="titre">Bonneteau</h1>
                <h3 class="slogan">La carte rouge gagne et les cartes noires perdent</h3>

                <!-- toutes les cartes -->
                <div class="cards">
                    <div class="card" onclick="flip(event)">
                        <!-- image de la carte rouge -->
                        <div class="front">
                            <img class="card-img" src="images/black.png" width="200">
                        </div>
                        <div class="back"></div>
                    </div>
                    <div class="card" onclick="flip(event)">
                        <!-- image de la carte rouge -->
                        <div class="front">
                            <img class="card-img" src="images/black.png" width="200">
                        </div>
                        <div class="back"></div>
                    </div>
                    <div class="card" onclick="flip(event)">
                        <!-- image de la carte rouge -->
                        <div class="front">
                            <img class="card-img" src="images/black.png" width="200">
                        </div>
                        <div class="back"></div>
                    </div>
                </div>

                <!-- un bouton generer -->
                <button id="btn" onclick="shuffle()">Générer</button>
            </div>
        </form>
        <?php
            echo "<script>
                            let redcard = 0;

                            shuffle()
                            function shuffle() {
                                let allcards = document.getElementsByClassName('card-img');
                                allcards[redcard].setAttribute('src', 'images/black.png')
                                let random = Math.floor(Math.random() * allcards.length); // un nombre au hasard
                                let card = allcards[random];
                                card.setAttribute('src', 'images/red.png');
                                redcard = random
                            }
                            
                            function flip(event){
                                let element = event.currentTarget;
                                if (element.className === 'card'){
                                    if(element.style.transform == 'rotateY(180deg)'){
                                        element.style.transform = 'rotateY(0deg)';
                                    }
                                    else{
                                        element.style.transform = 'rotateY(180deg)';
                                    }
                                }
                            }
                    </script>"
        ?>
    </body>
</html>
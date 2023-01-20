<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>A propos</title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/aPropos.css">
    <script src="/assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".nav-link").mouseenter(function(e) {
                e.preventDefault();
                $("nav a").removeClass("active");
                $(this).addClass("active");

            });

        });
    </script>
</head>

<body>
    <header class="navbar navbar-expand-md  header mt-0 px-3 fixed-top">

        <section class="navbar ms-auto ">
            <button type="button" class="btn navbar-toggler" data-bs-toggle="collapse" data-bs-target="#content_nav">
                <span class="navbar-toggler-icon">
                    <img src="../../assets/img/icons8-menu-48.png" alt="Image menu">
                </span>
            </button>
            <nav id="content_nav" class="collapse navbar-collapse   mr-2">
                <ul class="navbar-nav navbar-pills justify-content-center ">
                    <!--         <li class="nav-item dropdown" id="no_load">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Compte</a>
                        <ul id="menu_prcpl" class="dropdown-menu dropdown" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Paramètres</a></li>
                            <li id="btn_actn_logout"><a class="dropdown-item" href="#">Déconnexion</a></li>
                        </ul>  
                    </li>  -->
                    <li data-sctn-id="1" class="nav-item">
                        <a class="nav-link  active" href="../view/accueil.php">Accueil</a>
                    </li>

                    <li data-sctn-id="1" class="nav-item">
                        <a class="nav-link " href="../view/prestation.php">Nos prestations</a>
                    </li>

                    <li data-bs-toggle="offcanvas" data-bs-target="#offcanvas_sctn" class="nav-item">
                        <a class="nav-link " href="https://www.instagram.com/meys_ongles/?igshid=YmMyMTA2M2Y%3D">Nos réalisations</a>
                    </li>

                    <li data-bs-toggle="offcanvas" data-bs-target="#offcanvas_sctn" class="nav-item">
                        <a class="nav-link " href="../view/monEspace.php">Mon espace</a>
                    </li>

                    <li data-bs-toggle="offcanvas" data-bs-target="#offcanvas_sctn" class="nav-item">
                        <a class="nav-link " href="../../application/view/aPropos.php">A propos</a>
                    </li>


                </ul>
                <div class="mt-0">
                    <button class="btn  ms-auto"><a href="../view/authenticationClient.php" class="nav-link" target="_blank" rel="noopener noreferrer">Mon Compte</a></button>
                </div>
            </nav>
        </section>
    </header>


    <section id="information">
        <div id="cc_information_rdv">
            <h3 class="titre_h_2">Informations sur la prise de rendez vous</h3>
            <p id="prise_rdv">
                Pour le moment, la prise de rendez-vous se fait via ma messagerie privée Instagram.
                Veuillez indiquer les informations suivantes :
                - Votre prénom.
                - Votre numéro de téléphone.
                - La date et l’heure de RDV souhaitée.
                - La prestation souhaitée.
                - Si vous avez actuellement une pose.
                Je pourrais alors définir le temps de prestation ainsi que le tarif final.
                Je vous enverrai un sms de confirmation la veille du RDV, comprenant l’heure du rdv ainsi que mon adresse.
                Je vous reçois à mon domicile, Quartier La Vache, au nord de Toulouse, accessible en transport en commun (8min à pied du métro), ou vous pouvez également venir en voiture (places disponibles à proximité).
                Les WC ne sont pas disponibles.
                L’accès à mon domicile n’est pas adapté aux personnes à mobilité réduite, ni aux enfants, ni aux accompagnateurs.
                Je n’effectue aucune pose sur les mineurs de moins de 16ans.
                Je ne fais pas de crédit.
                Paiement en espèces ou Paylib.

            </p>
        </div>
        <div id="cc_information_hygiene">
            <h3 class="titre_h_2">NORMES HYGIENE ET DÉSINFECTION</h3>
            <p id="prise_rdv">
                Pour chaque client, lorsque le matériel ne peut pas être à usage unique, la désinfection des outils utilisés en prothésie ongulaire est nécessaire pour assurer la sécurité des services. Cette opération se réalise en moins de deux minutes, temps de pause de désinfectant compris.
                RSD : Règlement Sanitaire Départementale – article 118 – Hygiène générale :
                « Les objets employés par les coiffeurs, manucures, pédicures et esthéticiennes doivent être entretenus de manière à n’être en aucun cas une cause de transmission d’affection contagieuse et l’opérateur doit pour chaque client désinfecter ses instruments. »
                LA PROTHÉSISTE ONGULAIRE
                Protection collective : Aspirateur.
                Protection individuelle : Masque et gants.
                NETTOYAGE ET DÉSINFECTION
                Espace de travail et vous.
                Liquide désinfection et nettoyage.
                Outils de travail : Fraises ponceuse / repousse cuticules / ciseaux / coupe cuticules.
                PROTOCOLE DE DÉSINFECTION AVEC UN CLIENT :
                - Désinfecter les mains du client avec du gel hydroalcoolique ou désinfectant
                - Désinfecter les outils de manucure avec du désinfectant
                - Effectuer la pause
                - Désinfecter le plan de travail / outils
                PROTOCOLE DE NETTOYAGE QUOTIDIEN :
                - Nettoyer les poussières des outils à l’aide d’une machine à ultrason.
                - Baigner les fraises dans le liquide (eau distillée, eau déminéralisée, alcool isopropylique …)
                - Lancer un cycle.

            </p>
        </div>
        <div id="cc_information_Presson">
            <h3 class="titre_h_2">Formes et tailles des capsules</h3>
            <p id="prise_rdv">
                Carré Carré arrondi Amande Coffin Stilleto
                Il existe 5 principales formes d’ongle : le carré, le carré arrondi, l’amande, le coffin ou ballerine et le stilleto.
                Toutes ces formes se déclinent en différentes tailles : court, médium, long, extra-long…

                Difficile de s’y retrouver avec toutes ces formes, il est donc utile de faire une analyse de votre morphologie pour vous aider à choisir la forme qui vous correspond le mieux.
                Dans un premier temps, analysez la forme de votre main, de vos doigts et de vos ongles. Vos mains sont-elles plus ou moins petites ? Vos doigts sont-ils longs, courts, plus ou moins fins ? Vos ongles sont-ils plus ou moins larges ?
                Ci-dessous, les résultats suivant analyse :
                - La forme carrée convient aux ongles larges, permet d’allonger et d’affiner la main.
                - La forme carrée arrondie apporte un peut de douceur comparée à la forme carrée dont les angles sont plus marqués. Cette forme convient aux ongles larges ou très courts, elle allonge la main et les doigts épais. Elle donne un rendu plus naturel.
                - La forme coffin ou ballerine conviendra aux doigts plus fins, elle allonge le doigt et affine la main. Cette forme convient aux petits ongles.
                - La forme amande allonge et affine les doigts. Son rendu est très naturel. Cette forme convient à toutes les morphologies. C’est la forme préférées des femmes occidentales.
                - La forme stilleto, très pointue, connait un grand succès sur le continent Américain et Africain. Cette forme convient à toutes les mains, le seul critère de sélection est votre goût !
                Une fois votre analyse faite vous pouvez passer à l’étape 2 !
                L’étape 2 consiste à choisir la longueur de vos capsules, selon vos envies mais également selon le rendu que vous souhaitez obtenir. Pour une manucure plutôt discrète mais avec un aspect impeccable préférez les capsules courtes. Moins discrètes, les capsules médiums permettent d’affiner vos mains, et me laisse plus de surface de travail, personnellement plus c’est long plus je suis heureuse ! Si vous souhaitez un peut d’extravagance le temps d’une soirée, vous pouvez choisir les capsules longues, l’objectif est de mettre vos mains sous les feux des projecteurs !
                Et vous voilà arrivé à l’étape 3 : choisir le modèle de vos press on !
                Dans l’onglet PRESS ON – Collections, vous pourrez sélectionner le modèle qui vous plait, suivant vos envies et la saison de l’année. Vous pouvez également me contacter si vous souhaitez des PRESS ON entièrement personnalisés, réalisation uniquement sur devis.

            </p>
        </div>

    </section>



































    <!-- Footer -->
    <footer class="text-center text-lg-start text-black " style="background-color: #fc466b">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Mey's ongles
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
                        <p>
                            <a class="text-black" href="../view/accueil.php">Accueil</a>
                        </p>
                        <p>
                            <a class="text-black" href="../view/prestation.php">Prestation</a>
                        </p>
                        <p>
                            <a class="text-black" href="https://www.instagram.com/meys_ongles/?igshid=YmMyMTA2M2Y%3D">Realisations</a>
                        </p>
                        <p>
                            <a class="text-black" href="../view/monEspace.php">Mon Espace</a>
                        </p>
                        <p>
                            <a class="text-black" href="../view/aPropos.php">A Propos</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">mey's ongles</h6>
                        <p><i class="fas fa-home mr-3"></i> Toulouse, 31200, France</p>
                        <p><i class="fas fa-envelope mr-3"></i> </p>
                        <p><i class="fas fa-phone mr-3"></i> </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">pours nous suivre</h6>

                        <!-- Facebook -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Google -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="https://www.instagram.com/meys_ongles/?igshid=YmMyMTA2M2Y%3D" role="button"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->
    </footer>
    <!-- Footer -->

</body>

</html>
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
                            <li><a class="dropdown-item" href="#">Param??tres</a></li>
                            <li id="btn_actn_logout"><a class="dropdown-item" href="#">D??connexion</a></li>
                        </ul>  
                    </li>  -->
                    <li data-sctn-id="1" class="nav-item">
                        <a class="nav-link  active" href="../view/accueil.php">Accueil</a>
                    </li>

                    <li data-sctn-id="1" class="nav-item">
                        <a class="nav-link " href="../view/prestation.php">Nos prestations</a>
                    </li>

                    <li data-bs-toggle="offcanvas" data-bs-target="#offcanvas_sctn" class="nav-item">
                        <a class="nav-link " href="https://www.instagram.com/meys_ongles/?igshid=YmMyMTA2M2Y%3D">Nos r??alisations</a>
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
                Pour le moment, la prise de rendez-vous se fait via ma messagerie priv??e Instagram.
                Veuillez indiquer les informations suivantes :
                - Votre pr??nom.
                - Votre num??ro de t??l??phone.
                - La date et l???heure de RDV souhait??e.
                - La prestation souhait??e.
                - Si vous avez actuellement une pose.
                Je pourrais alors d??finir le temps de prestation ainsi que le tarif final.
                Je vous enverrai un sms de confirmation la veille du RDV, comprenant l???heure du rdv ainsi que mon adresse.
                Je vous re??ois ?? mon domicile, Quartier La Vache, au nord de Toulouse, accessible en transport en commun (8min ?? pied du m??tro), ou vous pouvez ??galement venir en voiture (places disponibles ?? proximit??).
                Les WC ne sont pas disponibles.
                L???acc??s ?? mon domicile n???est pas adapt?? aux personnes ?? mobilit?? r??duite, ni aux enfants, ni aux accompagnateurs.
                Je n???effectue aucune pose sur les mineurs de moins de 16ans.
                Je ne fais pas de cr??dit.
                Paiement en esp??ces ou Paylib.

            </p>
        </div>
        <div id="cc_information_hygiene">
            <h3 class="titre_h_2">NORMES HYGIENE ET D??SINFECTION</h3>
            <p id="prise_rdv">
                Pour chaque client, lorsque le mat??riel ne peut pas ??tre ?? usage unique, la d??sinfection des outils utilis??s en proth??sie ongulaire est n??cessaire pour assurer la s??curit?? des services. Cette op??ration se r??alise en moins de deux minutes, temps de pause de d??sinfectant compris.
                RSD : R??glement Sanitaire D??partementale ??? article 118 ??? Hygi??ne g??n??rale :
                ?? Les objets employ??s par les coiffeurs, manucures, p??dicures et esth??ticiennes doivent ??tre entretenus de mani??re ?? n?????tre en aucun cas une cause de transmission d???affection contagieuse et l???op??rateur doit pour chaque client d??sinfecter ses instruments. ??
                LA PROTH??SISTE ONGULAIRE
                Protection collective : Aspirateur.
                Protection individuelle : Masque et gants.
                NETTOYAGE ET D??SINFECTION
                Espace de travail et vous.
                Liquide d??sinfection et nettoyage.
                Outils de travail : Fraises ponceuse / repousse cuticules / ciseaux / coupe cuticules.
                PROTOCOLE DE D??SINFECTION AVEC UN CLIENT :
                - D??sinfecter les mains du client avec du gel hydroalcoolique ou d??sinfectant
                - D??sinfecter les outils de manucure avec du d??sinfectant
                - Effectuer la pause
                - D??sinfecter le plan de travail / outils
                PROTOCOLE DE NETTOYAGE QUOTIDIEN :
                - Nettoyer les poussi??res des outils ?? l???aide d???une machine ?? ultrason.
                - Baigner les fraises dans le liquide (eau distill??e, eau d??min??ralis??e, alcool isopropylique ???)
                - Lancer un cycle.

            </p>
        </div>
        <div id="cc_information_Presson">
            <h3 class="titre_h_2">Formes et tailles des capsules</h3>
            <p id="prise_rdv">
                Carr?? Carr?? arrondi Amande Coffin Stilleto
                Il existe 5 principales formes d???ongle : le carr??, le carr?? arrondi, l???amande, le coffin ou ballerine et le stilleto.
                Toutes ces formes se d??clinent en diff??rentes tailles : court, m??dium, long, extra-long???

                Difficile de s???y retrouver avec toutes ces formes, il est donc utile de faire une analyse de votre morphologie pour vous aider ?? choisir la forme qui vous correspond le mieux.
                Dans un premier temps, analysez la forme de votre main, de vos doigts et de vos ongles. Vos mains sont-elles plus ou moins petites ? Vos doigts sont-ils longs, courts, plus ou moins fins ? Vos ongles sont-ils plus ou moins larges ?
                Ci-dessous, les r??sultats suivant analyse :
                - La forme carr??e convient aux ongles larges, permet d???allonger et d???affiner la main.
                - La forme carr??e arrondie apporte un peut de douceur compar??e ?? la forme carr??e dont les angles sont plus marqu??s. Cette forme convient aux ongles larges ou tr??s courts, elle allonge la main et les doigts ??pais. Elle donne un rendu plus naturel.
                - La forme coffin ou ballerine conviendra aux doigts plus fins, elle allonge le doigt et affine la main. Cette forme convient aux petits ongles.
                - La forme amande allonge et affine les doigts. Son rendu est tr??s naturel. Cette forme convient ?? toutes les morphologies. C???est la forme pr??f??r??es des femmes occidentales.
                - La forme stilleto, tr??s pointue, connait un grand succ??s sur le continent Am??ricain et Africain. Cette forme convient ?? toutes les mains, le seul crit??re de s??lection est votre go??t !
                Une fois votre analyse faite vous pouvez passer ?? l?????tape 2 !
                L?????tape 2 consiste ?? choisir la longueur de vos capsules, selon vos envies mais ??galement selon le rendu que vous souhaitez obtenir. Pour une manucure plut??t discr??te mais avec un aspect impeccable pr??f??rez les capsules courtes. Moins discr??tes, les capsules m??diums permettent d???affiner vos mains, et me laisse plus de surface de travail, personnellement plus c???est long plus je suis heureuse ! Si vous souhaitez un peut d???extravagance le temps d???une soir??e, vous pouvez choisir les capsules longues, l???objectif est de mettre vos mains sous les feux des projecteurs !
                Et vous voil?? arriv?? ?? l?????tape 3 : choisir le mod??le de vos press on !
                Dans l???onglet PRESS ON ??? Collections, vous pourrez s??lectionner le mod??le qui vous plait, suivant vos envies et la saison de l???ann??e. Vous pouvez ??galement me contacter si vous souhaitez des PRESS ON enti??rement personnalis??s, r??alisation uniquement sur devis.

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
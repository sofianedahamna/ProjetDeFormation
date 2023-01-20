<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Mon espace</title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/monEspace.css">
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
    <header class="navbar navbar-expand-md  header fixed-top">

        <section class="navbar ms-auto ">
            <nav class="collapse navbar-collapse mr-2">
                <ul class="navbar-nav navbar-pills justify-content-center ">
                    <!--         <li class="nav-item dropdown" id="no_load">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Compte</a>
                        <ul id="menu_prcpl" class="dropdown-menu dropdown" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Paramètres</a></li>
                            <li id="btn_actn_logout"><a class="dropdown-item" href="#">Déconnexion</a></li>
                        </ul>  
                    </li>  -->
                    <li data-sctn-id="1" class="nav-item">
                        <a class="nav-link active" href="../view/accueil.php">Accueil</a>
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
                        <a class="nav-link " href="../view/aPropos.php">A propos</a>
                    </li>

                </ul>
                <div class="mt-0">
                    <button class="btn  ms-auto"><a href="../view/authenticationClient.php" class="nav-link"  target="_blank" rel="noopener noreferrer">Mon Compte</a></button>
                </div>
            </nav>
        </section>
    </header>




    <section id="info_de_contact">
        <h2 class="titre_h_2">M'inscrire</h2>
        <form id="form_inscription" action="http://cakeorderold.fr/application/controller/inscription.php" method="post" enctype="application/x-www-form-urlencoded">
            <div id="ss_ctn_from">
                <input type="hidden" name="action" value="inscription">
                <div id="ss_ctn_from_left" class="p-3 bg-dark border">
                    <legend>Mes information</legend>
                    <div class="mb-2">
                        <label class="form-label" for="nom_utlstr">Civilité</label>
                        <select class="form-select" id="slct_cvlt">
                            <option selected="selected">--- Choisir ---</option>
                            <option value="masculin">Mr</option>
                            <option value="feminin">Mme</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="nom_utlstr">Nom</label>
                        <input class="form-control" type="text" id="nom_utlstr" name="nom_utlstr" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="prenom_utlstr">Prénom</label>
                        <input class="form-control" type="text" id="prenom_utlstr" name="prenom_utlstr" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="email_utlstr">Email</label>
                        <input class="form-control" type="text" id="email_utlstr" name="email_utlstr" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="telephone_utlstr">Téléphone</label>
                        <input class="form-control" type="text" id="telephone_utlstr" name="telephone_utlstr" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="dateAnniversaire_utlstr">Date anniversaire</label>
                        <input class="form-control" type="date" id="dateAnniversaire_utlstr" name="dateAnniversaire_utlstr" required>
                    </div>
                    </fieldset>
                </div>

            </div>
            <div id="dd_ctn_adr_form">
                <div id="ss_ctn_from_left" class="p-3 bg-dark border">
                    <legend>Mon Adresse</legend>
                    <div class="mb-2">
                        <label class="form-label" for="numeroDeVoie_utlstr">Numero de voie</label>
                        <input class="form-control" type="text" id="numeroDeVoie_utlstr" name="numeroDeVoie_utlstr" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="libelleVoie_utlstr">Libelle de voie</label>
                        <input class="form-control" type="text" id="libelleVoie_utlstr" name="libelleVoie_utlstr" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="ville_utlstr">Ville</label>
                        <input class="form-control" type="text" id="ville_utlstr" name="ville_utlstr" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="codePostal_utlstr">Code postal</label>
                        <input class="form-control" type="text" id="codePostal_utlstr" name="codePostal_utlstr" required>
                    </div>
                    <div class="mt-0">
                        <input class="btn btn-success btn-lg ms-auto" type="submit" value="S'inscrire">
                    </div>
                </div>
            </div>
            </div>
        </form>
    </section>



    <!-- Footer -->
    <footer class="text-center text-lg-start text-black fixed-bottoms" style="background-color: #fc466b">
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
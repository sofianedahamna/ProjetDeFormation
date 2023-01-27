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
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".nav-link").mouseenter(function(e) {
                e.preventDefault();
                $("nav a").removeClass("active");
                $(this).addClass("active");

            });

            /*==============================================================
            *                       definition de ajax
            ===============================================================*/

            var ajaxOptions = {
                method: "POST",
                cache: false,
                async: true,
                timeout: 3000,
                dataType: "json",
                processData: false,
                contentType: false
            };

            /*====================================================================================
            * Soumission des données formulaire inscription est verification des valeur des champ 
            ======================================================================================*/
            /** $("#form_inscription").submit(function(e) {
                 e.preventDefault();
                 inscriptionClient();

             });*/
            $("#form_inscription").submit(function(e) {
                e.preventDefault();
                if (!$("input[name='nom_utlstr']").val() ||
                    !$("input[name='prenom_utlstr']").val() ||
                    !$("input[name='email_utlstr']").val() ||
                    !$("input[name='telephone_utlstr']").val() ||
                    !$("input[name='dateDeNaissance_utlstr']").val() ||
                    !$("input[name='motDePasse_utlstr']").val()) {
                    // $("#error-modal").modal("show");
                    alert('Vous avez mal rempli le formulaire');

                } else {
                    inscriptionClient();
                }
            });

            $(document).ready(function() {
                $("#form_inscription").on('input', function() {
                    var nom = $("#nom").val();
                    var prenom = $("#prenom").val();
                    var email = $("#email").val();
                    var telephone = $("#telephone").val();
                    var login = $("#login").val();
                    var motDePasse = $("#motDePasse").val();
                    var numerodeVoie = $("#numerodeVoie").val();
                    var libelledeVoie = $("#libelledeVoie").val();
                    var ville = $("#ville").val();
                    var codePostal = $("#codePostal").val();

                    if (nom.length < 2) {
                        $("#nom").addClass("is-invalid");
                    } else {
                        $("#nom").removeClass("is-invalid");
                    }
                    if (prenom.length < 2) {
                        $("#prenom").addClass("is-invalid");
                    } else {
                        $("#prenom").removeClass("is-invalid");
                    }
                    if (!email.includes("@") || !email.includes(".")) {
                        $("#email").addClass("is-invalid");
                    } else {
                        $("#email").removeClass("is-invalid");
                    }
                    if (telephone.length != 10) {
                        $("#telephone").addClass("is-invalid");
                    } else {
                        $("#telephone").removeClass("is-invalid");
                    }
                    if (login.length < 2) {
                        $("#login").addClass("is-invalid");
                    } else {
                        $("#login").removeClass("is-invalid");
                    }
                    if (motDePasse.length < 8) {
                        $("#motDePasse").addClass("is-invalid");
                    } else {
                        $("#motDePasse").removeClass("is-invalid");
                    }
                    if (numerodeVoie.length < 2) {
                        $("#numerodeVoie").addClass("is-invalid");
                    } else {
                        $("#numerodeVoie").removeClass("is-invalid");
                    }
                    if (libelledeVoie.length < 2) {
                        $("#libelledeVoie").addClass("is-invalid");
                    } else {
                        $("#libelledeVoie").removeClass("is-invalid");
                    }
                    if (ville.length < 2) {
                        $("#ville").addClass("is-invalid");
                    } else {
                        $("#ville").removeClass("is-invalid");
                    }
                    if (codePostal.length != 5) {
                        $("#codePostal").addClass("is-invalid");
                    } else {
                        $("#codePostal").removeClass("is-invalid");
                    }
                });
            });
            /**************************************************************
             *              Fonction Enregistrement des données client    *
             **************************************************************/
            function inscriptionClient() {
                var form = $("#form_inscription").get(0);
                var url = form.getAttribute("action");
                var formData = new FormData(form);
                ajaxOptions.data = formData;
                ajaxOptions.url = url;
                $.ajax(ajaxOptions).done(function(clbck) {
                    if (clbck.err_flag) {
                        alert(clbck.err_msg);
                    } else {
                        window.location.replace("http://meysongles.fr/application/view/authenticationClient.php");
                    }
                }).fail(function(e) {
                    console.log(e);
                    alert("Error!");
                }).always(function() {});
            };

            /***********************************************************************
             *          Fonction reset form inscription lancement dialog info
             ***********************************************************************/
            function reset_form() {
                $("#form_inscription")[0].reset();
                //$("#bt_submit").prop({disabled: true});
            }


            let launchDialogInfo = function(elemetText) {
                $("#dialogInfo div.modal-body").html(elemetText);
                $("#btn_show_dialog_info").click();
            }


        });
    </script>
    <style>
        /* configuration des fenêtres modales */
        .modal-header {
            padding: 0.5rem 0.5rem !important;
        }

        /*Réajustement de positionnement de la fenêtre modal au centre */
        #dialogInfo .modal-dialog {
            position: fixed;
            width: 100% !important;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
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
                    <button class="btn  ms-auto"><a href="../view/authenticationClient.php" class="nav-link" target="_blank" rel="noopener noreferrer">Mon Compte</a></button>
                </div>
            </nav>
        </section>
    </header>




    <section id="info_de_contact">
        <h2 class="titre_h_2">M'inscrire</h2>
        <form id="form_inscription" action="../controlleur/inscriptionController.php" method="POST" enctype="application/x-www-form-urlencoded">
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
                        <label class="form-label" for="motDePasse_utlstr">Mot de Passe</label>
                        <input class="form-control" type="password" id="motDePasse_utlstr" name="motDePasse_utlstr" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="dateDeNaissance_utlstr">Date anniversaire</label>
                        <input class="form-control" type="date" id="dateDeNaissance_utlstr" name="dateDeNaissance_utlstr" required>
                    </div>

                    </fieldset>
                </div>

            </div>
            <div id="dd_ctn_adr_form">
                <div id="ss_ctn_from_left" class="p-3 bg-dark border">
                    <legend>Mon Adresse</legend>
                    <div class="mb-2">
                        <label class="form-label" for="numerodeVoie_utlstr">Numero de voie</label>
                        <input class="form-control" type="text" id="numerodeVoie_utlstr" name="numerodeVoie_utlstr" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="libelledeVoie_utlstr">Libelle de voie</label>
                        <input class="form-control" type="text" id="libelledeVoie_utlstr" name="libelledeVoie_utlstr" required>
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

    <!-- Start Popupmodal infos-->
    <span id="btn_show_dialog_info" data-bs-toggle="modal" data-bs-target="#dialogInfo"></span>
    <div id="dialogInfo" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <div class="h6 modal-title">Informations</div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>

    <!-- Stop Popupmodal infos -->

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
                            Bienvenue chez Mey's Ongles.
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
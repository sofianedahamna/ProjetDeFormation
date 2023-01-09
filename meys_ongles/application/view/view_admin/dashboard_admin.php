<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>dashboard admin</title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../../assets/css/dashboardAdmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {



            /*===================================================
                *    Fonction de soumission des données formulaire
                ===================================================*/
            var ajaxOptions = {
                method: "POST",
                cache: false,
                async: true,
                timeout: 3000,
                dataType: "json",
                processData: false,
                contentType: false
            };


            /***********************************************************************
             *              Fonction reset form inscription
             ***********************************************************************/
            function reset_form() {
                $("#form_inscription")[0].reset();
                //$("#bt_submit").prop({disabled: true});
            }


            let launchDialogInfo = function(elemetText) {
                $("#dialogInfo div.modal-body").html(elemetText);
                $("#btn_show_dialog_info").click();
            }

            /********************************************************************************
             *              Fonction Enregistrement des données client est recherche client   *
             ********************************************************************************/
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
                        let flag_response = "Les donnée ont été enregistrées!";
                        launchDialogInfo(flag_response);
                        reset_form();
                    }
                    dis_panel_flw();
                }).fail(function(e) {
                    console.log(e);
                    alert("Error!");
                }).always(function() {
                    //dis_panel_flw();
                });
            };

            var searchClient = function() {
                var formSearch = $("#form_search_Client")[0];
                var url = formSearch.getAttribute('action');
                var formData = new FormData(formSearch);
                ajaxOptions.data = formData;
                ajaxOptions.url = url;
                $.ajax(ajaxOptions).done(function(tab_acheteur) {
                    $("tbody[id='tbody_result'] tr").remove(".ajust");
                    $("tbody[id='tbody_result'] td").remove(".ajust");
                    if (tab_acheteur) {
                        let response = "";
                        $("#tbl_result").removeClass("dsply-no").fadeIn(function() {
                            for (var position in tab_acheteur) {
                                response += "<tr class='ajust'>\n\
                                                <td>" + (parseInt(position) + 1) + "</td>\n\
                                                <td>" + tab_acheteur[position].nom + "</td>\n\
                                                <td>" + tab_acheteur[position].prenom + "</td>\n\
                                                <td>" + tab_acheteur[position].email + "</td>\n\
                                                <td>" + tab_acheteur[position].telephone + "</td>\n\
                                                <td>" + tab_acheteur[position].Age + "</td>\n\
                                                <td>" + tab_acheteur[position].login + "</td>\n\
                                            </tr>";
                            }
                            $("tbody[id='tbody_result']").append(response);
                        });
                    } else {
                        launchDialogInfo("Aucun résultats trouvé!");
                    }
                }).fail(function() {
                    alert("Une erreur est survenue lors de l'envoie des donnés!");
                }).always(function() {
                    //dis_panel_flw();
                });
            };





            /********************************************************************************
             *    Fonction Enregistrement des données prestation est recherche prestation   *
             ********************************************************************************/

            function ajoutDePresta() {

                var form = $("#form_presta").get(0);
                var url = form.getAttribute("action");
                var formData = new FormData(form);
                ajaxOptions.data = formData;
                ajaxOptions.url = url;
                $.ajax(ajaxOptions).done(function(clbck) {
                    if (clbck.err_flag) {
                        alert(clbck.err_msg);
                    } else {
                        let flag_response = "Les donnée ont été enregistrées!";
                        launchDialogInfo(flag_response);
                        reset_form();
                    }
                    dis_panel_flw();
                }).fail(function(e) {
                    console.log(e);
                    alert("Error!");
                }).always(function() {
                    //dis_panel_flw();
                });
            };

            var searchPresta = function() {
                var formSearchPresta = $("#form_search_presta")[0];
                var url = formSearchPresta.getAttribute('action');
                var formData = new FormData(formSearchPresta);
                ajaxOptions.data = formData;
                ajaxOptions.url = url;
                $.ajax(ajaxOptions).done(function(tab_Presta) {
                    $("tbody[id='tbody_result_presta'] tr").remove(".ajust");
                    $("tbody[id='tbody_result_presta'] td").remove(".ajust");
                    //  alert(tab_Donuts[0].Reference);
                    if (tab_Presta) {
                        let response = "";
                        $("#tbl_result_presta").removeClass("dsply-no").fadeIn(function() {
                            for (var position in tab_Presta) {
                                response += "<tr class='ajust'>\n\
                                                <td>" + (parseInt(position) + 1) + "</td>\n\
                                                <td>" + tab_Presta[position].prix + "</td>\n\
                                                <td>" + tab_Presta[position].description + "</td>\n\
                                                <td>" + tab_Presta[position].duree + "</td>\n\
                                                <td>" + tab_Presta[position].type + "</td>\n\
                                            </tr>";
                            }
                            $("tbody[id='tbody_result_presta']").append(response);
                        });
                    } else {
                        launchDialogInfo("Aucun résultats trouvé!");
                    }
                }).fail(function() {
                    alert("Une erreur est survenue lors de l'envoie des donnés!");
                }).always(function() {
                    //dis_panel_flw();
                });
            };



            //                $("#bt_act_inscription").click(function (e) {
            //                    e.preventDefault();
            //                    ajaxFonction();
            //                });

            /***********************************************
             *Fonction recherche et ajout des realisation  *
             ***********************************************/
            function ajoutDeRea() {

                var form = $("#form_ajout_rea").get(0);
                var url = form.getAttribute("action");
                var formData = new FormData(form);
                ajaxOptions.data = formData;
                ajaxOptions.url = url;
                $.ajax(ajaxOptions).done(function(clbck) {
                    if (clbck.err_flag) {
                        alert(clbck.err_msg);
                    } else {
                        let flag_response = "Les donnée ont été enregistrées!";
                        launchDialogInfo(flag_response);
                        reset_form();
                    }
                    dis_panel_flw();
                }).fail(function(e) {
                    console.log(e);
                    alert("Error!");
                }).always(function() {
                    //dis_panel_flw();
                });



            };

            var searchRea = function() {
                var formSearchRea = $("#form_search_Rea")[0];
                var url = formSearchRea.getAttribute('action');
                var formData = new FormData(formSearchRea);
                ajaxOptions.data = formData;
                ajaxOptions.url = url;
                $.ajax(ajaxOptions).done(function(tab_Rea) {
                    $("tbody[id='tbody_result_rea'] tr").remove(".ajust");
                    $("tbody[id='tbody_result_rea'] td").remove(".ajust");
                    //  alert(tab_Rea[0].Reference);
                    if (tab_Rea) {
                        let response = "";
                        $("#tbl_result_rea").removeClass("dsply-no").fadeIn(function() {
                            for (var position in tab_Rea) {
                                response += "<tr class='ajust'>\n\
                                <td>" + (parseInt(position) + 1) + "</td>\n\
                                <td>" + tab_Rea[position].prix + "</td>\n\
                                <td>" + tab_Rea[position].description + "</td>\n\
                                <td>" + tab_Rea[position].duree + "</td>\n\
                                <td>" + tab_Rea[position].type + "</td>\n\
                            </tr>";
                            }
                            $("tbody[id='tbody_result_rea']").append(response);
                        });
                    } else {
                        launchDialogInfo("Aucun résultats trouvé!");
                    }
                }).fail(function() {
                    alert("Une erreur est survenue lors de l'envoie des donnés!");
                }).always(function() {
                    //dis_panel_flw();
                });
            };



            /******************************************
             *    Fonction Enregistrement des image   *
             ******************************************/
            $("#photo_donut_inpt").change(function(e) {
                $("#output_ajout_donut img").remove(".img-thumbnail");
                let lengthFile = this.files.length;
                alert(lengthFile);
                if (lengthFile < 4) {
                    for (let cpt = 0; cpt < lengthFile; cpt++) {
                        var file = this.files[cpt];
                        let formDonut = document.querySelector("#form_ajout_Donuts");
                        if (typeof window.FileReader != "undefined") {
                            var reader = new FileReader();
                            reader.onload = function(event) {
                                var src = event.target.result;
                                $("#output_ajout_donut").fadeIn(function() {
                                    $(this).append("<figure class='figure'><img src='" + src + "' class='img-thumbnail me-1'></figure>");
                                });

                                var formDataFile = new FormData(formDonut);
                                //formDataFile.append('formulaire', formDonut);
                                formDataFile.append('photo_donut', file);
                                ajaxOptions.url = formDonut.getAttribute("action");
                                ajaxOptions.data = formDataFile;
                                $.ajax(ajaxOptions).done(function() {

                                }).fail(function() {

                                }).always(function() {
                                    formDataFile = null;
                                });
                            };
                            reader.onerror = function(event) {
                                alert("Une erreur est survenue : " + event.target.error.code);
                            };
                            reader.readAsDataURL(file);
                        } else {
                            alert("FileReader non supporté!");
                        }
                    }
                } else {
                    alert("La sélection de plus de trois photos est impossible!");
                }
            });

            $("#btn_reset").click(function() {
                $("input[type='text'],input[type='file']").each(function(index) {
                    $(this).val("");
                    $("#output_ajout_donut figure").remove("figure.figure");
                });
            });

            $("#btn_reset").click(() => {
                $("#form_file_photo").get(0).reset();
            });

            //                });



            /******************************************************************************************************************
             *Fonction de redirection soumission des données provenant des formulaire pour l'execution des fonction recherche*
             ******************************************************************************************************************/
           
            $("#form_search").submit(function(e) {
                e.preventDefault();
                searchClient();

            });
            $("#form_search_presta").submit(function(e) {
                e.preventDefault();
                searchPresta();

            });
            $("#form_search_rea").submit(function(e) {
                e.preventDefault();
                searchRea();

            });


            /*============================================================================
             *Soumission des données formulaire inscription client ajout presta ajout rea *
             =============================================================================*/
            $("#form_inscription").submit(function(e) {
                e.preventDefault();
                inscriptionClient();

            });

            $("#form_presta").submit(function(e) {
                e.preventDefault();
                ajoutDePresta();

            });
           
            $("#form_ajout_rea").submit(function(e) {
                e.preventDefault();
                ajoutDeRea();

            });


            function select_content_sctn(id_tab) {
                $("section[id^='sctn_tab_']").addClass("dsply-no").stop(true, true).fadeOut("fast", function(e) {
                    $("section[id='sctn_tab_" + id_tab + "']").stop(true, true).removeClass("dsply-no").fadeIn();
                });
            }


            $(" nav li.nav-item:not(#no_load)").click(function(e) {
                e.preventDefault();
                let id_tab = $(this).attr("data-sctn-id");
                select_content_sctn(id_tab);
            });

            /*===================================================
             *    Soumission des données formulaire inscription
             ===================================================*/
            $("li a").click(function(e) {
                e.preventDefault();
                $("li a").removeClass("active");
                $(this).addClass("active");
                //                    if ($(this).hasClass("active")) {
                //                        $("li a").removeClass("active");
                //                        $(this).addClass("active");
                //                    } else {
                //                        $("li a").removeClass("active");
                //                        $(this).addClass("active");
                //                    }
            });



            /*===================================================
             *    Logout  : Déconnexion de l'application
             ===================================================*/
            $("li[id='btn_actn_logout'] ").click(function() {
                e.preventDefault();
                $.ajax({
                    url: "http://cakeorderold.fr/application/controller/compte.php",
                    method: "POST",
                    data: {
                        "action": "logout"
                    }
                }).done(function() {

                }).fail(function() {

                }).always(function() {

                });
            });

            /*====================================================================
            *   fonction pour faire apparaitre les section portant un id sctn_tab_
             =====================================================================*/
            function select_content_sctn(id_tab) {
                $("section[id^='sctn_tab_']").addClass("dsply-no").stop(true, true).fadeOut("fast", function(e) {
                    $("section[id='sctn_tab_" + id_tab + "']").stop(true, true).removeClass("dsply-no").fadeIn();
                });
            }
            $(" nav li.nav-item:not(#no_load)").click(function(e) {
                e.preventDefault();
                let id_tab = $(this).attr("data-sctn-id");
                select_content_sctn(id_tab);
            });

        });
    </script>
</head>

<body>
    <header class="navbar navbar-expand-md navbar-dark bg-dark header mt-0 px-3">

        <nav>

            <ul class="navbar-nav navbar-pills justify-content-center ">

                <li data-sctn-id="1" class="nav-item">
                    <a class="nav-link active" href="#">gestion des compte</a>
                </li>

                <li data-sctn-id="2" class="nav-item">
                    <a class="nav-link " href="#">gestion des prestation</a>
                </li>

                <li data-sctn-id="3" class="nav-item">
                    <a class="nav-link " href="#">gestion des RDV</a>
                </li>

                <li data-sctn-id="4" class="nav-item">
                    <a class="nav-link" href="#">gestion des realisation</a>
                </li>

            </ul>

        </nav>
    </header>

    <section class="dsply-no " data-sctn-id="1" id="sctn_tab_1">

        <!--RECHERCHE SUPRESSION MODIFICATION DES PROFIL CLIENT-->
        <h2 class="titre_h_2">rechercher un client </h2>
        <div id="ctn_form_search_Client" class="mx-auto">
            <form formtarget="_self" name="form_search_Client" id="form_search_Client" action="../controlleur/searchController.php" method="POST" enctype="application/x-www-form-urlencoded">
                <input type="hidden" name="action" value="rechercherClient">
                <div class="input-group">
                    <input class="form-control w-25 " type="text" id="keyword" name="keyword" placeholder="rechercher" autocomplete="off" list="list_completion">
                    <datalist id="list_completion"></datalist>
                    <button class="btn btn-primary btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <output id="output" class="mt-5">
            <table id="tbl_result" class="table table-striped dsply-no">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Age</th>
                        <th>login</th>
                    </tr>
                </thead>
                <tbody id="tbody_result"></tbody>
            </table>
        </output>


        <!--INSCRIPTION DES CLIENT -->
        <h2 class="titre_h_2">inscrire</h2>
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
                        <label class="form-label" for="dateAnniversaire_utlstr">Age</label>
                        <input class="form-control" type="number" id="dateAnniversaire_utlstr" name="dateAnniversaire_utlstr" required min="16" max="100">
                    </div>
                    <div class="mt-4">
                        <input class="btn btn-success btn-lg ms-auto" type="submit" value="S'inscrire">
                    </div>
                    </fieldset>
                </div>
            </div>
        </form>




    </section>



    <section class="dsply-no " data-sctn-id="2" id="sctn_tab_2">

        <!--RECHERCHE MODIFICATION ET SUPRESSION DES PRESTATION-->
        <h2 class="titre_h_2">recherche pour la modification supression des prestation </h2>
        <div id="ctn_form_search_presta" class="mx-auto">
            <form formtarget="_self" name="form_search_presta" id="form_search_presta" action="../controlleur/searchController.php" method="POST" enctype="application/x-www-form-urlencoded">
                <input type="hidden" name="action" value="rechercherPresta">
                <div class="input-group">
                    <input class="form-control w-25 " type="text" id="keyword" name="keyword" placeholder="rechercher" autocomplete="off" list="list_completion">
                    <datalist id="list_completion"></datalist>
                    <button class="btn btn-primary btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <output id="output" class="mt-4">
            <table id="tbl_result_presta" class="table table-striped dsply-no">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Durée</th>
                        <th>Type</th>
                    </tr>
                </thead>

                <tbody id="tbody_result_presta"></tbody>
            </table>
        </output>







        <!--AJOUT DES PRESTATION -->
        <h2>Ajout de Prestation</h2>
        <form id="form_presta" action="../../controlleur/prestationController.php" method="post" enctype="application/x-www-form-urlencoded">
            <div id="ss_ctn_from">
                <input type="hidden" name="action" value="ajoutPresta">
                <div id="ss_ctn_from_left" class="p-3 bg-dark border">
                    <legend>Mes information</legend>
                    <!--<div class="mb-2">
                        <label class="form-label" for="type_presta">Type</label>
                        <select class="form-select" id="slct_cvlt">
                            <option selected="selected">--- Choisir ---</option>
                            <option value="masculin"></option>
                            <option value="feminin"></option>
                        </select>
                    </div>-->
                    <div class="mb-2">
                        <label class="form-label" for="titre_presta">Titre</label>
                        <input class="form-control" type="text" id="titre" name="titre_presta" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="description_presta">Descrition</label>
                        <input class="form-control" type="text" id="description" name="description_presta" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="prix_presta">Prix</label>
                        <input class="form-control" type="text" id="prix" name="prix_presta" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="duree_presta">Durée</label>
                        <input class="form-control" type="text" id="duree" name="duree_presta" required>
                    </div>
                    <div class="mt-4">
                        <input class="btn btn-success btn-lg ms-auto" type="submit" value="Ajouter">
                    </div>
                    </fieldset>
                </div>
            </div>

    </section>


    <section class="dsply-no " data-sctn-id="3" id="sctn_tab_3">

    <iframe src="https://calendar.google.com/calendar/embed?src=contact.meys.ongles%40gmail.com&ctz=Europe%2FParis" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </section>


    <section class="dsply-no " data-sctn-id="4" id="sctn_tab_4">


        <!--RECHERCHE MODIFICATION ET SUPRESSION DES REALISATION -->
        <h2 class="titre_h_2">recherche pour la modification supression des realisation </h2>
        <div id="ctn_form_search_rea" class="mx-auto">
            <form formtarget="_self" name="form_search_Rea" id="form_search_Rea" action="../controlleur/searchController.php" method="POST" enctype="application/x-www-form-urlencoded">
                <input type="hidden" name="action" value="rechercheRea">
                <div class="input-group">
                    <input class="form-control w-25 " type="text" id="keyword" name="keyword" placeholder="rechercher" autocomplete="off" list="list_completion">
                    <datalist id="list_completion"></datalist>
                    <button class="btn btn-primary btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <output id="output" class="mt-4">
            <table id="tbl_result_rea" class="table table-striped dsply-no">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Type</th>
                        <th>description</th>
                        <th>Photo</th>
                    </tr>
                </thead>

                <tbody id="tbody_result_rea"></tbody>
            </table>
        </output>
        


        <h2>Ajout des realisationn</h2>
        <form id="form_ajout_rea" action="../../controlleur/realisationController.php" method="POST" enctype="multipart/form-data">
            <div id="ss_ctn_from">
                <input type="hidden" name="action" value="ajouter_rea">
                <div id="ss_ctn_from_left" class="p-3 bg-dark border">
                    <legend>Ajout des realisation a la galerie </legend>
                    <!-- <div class="mb-2">
                               <label class="form-label" for="reference_Donuts">reference</label>
                                <input class="form-control" type="text" id="reference_Donuts" name="reference_Donuts">
                            </div> -->
                    <div class="mb-2">
                        <label class="form-label" for="prestation_rea">type</label>
                        <input class="form-control" type="text" id="prestation_rea" name="prestation_rea">
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="description_rea">description</label>
                        <textarea class="form-control" name="description_rea" id="description_rea" cols="30" rows="10" resize="none"></textarea>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="photo_donut">Photo</label>
                        <input class="form-control" type="file" id="photo_donut" name="photo_donut[]" multiple accept="image/jpeg,image/jpg,image/png">
                    </div>
                    </fieldset>
                    <div class="mt-4">
                        <input class="btn btn-success btn-lg ms-auto" type="submit" value="Ajouter">
                    </div>
                </div>

            </div>
        </form>
        <output id="output_ajout_donut">

        </output>

    </section>

</body>

</html>
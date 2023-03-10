<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Prestation</title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/accueil.css">
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
    <header class="navbar navbar-expand-md  header">

        <section class="navbar ms-auto ">
            <nav class=" collapse navbar-collapse   mr-2mr-2">
                <ul class="navbar-nav navbar-pills justify-content-center">
                    <!--         <li class="nav-item dropdown" id="no_load">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Compte</a>
                        <ul id="menu_prcpl" class="dropdown-menu dropdown" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Param??tres</a></li>
                            <li id="btn_actn_logout"><a class="dropdown-item" href="#">D??connexion</a></li>
                        </ul>  
                    </li>  -->
                    <li data-sctn-id="1" class="nav-item">
                        <a class="nav-link active" href="../view/accueil.php">Accueil</a>
                    </li>

                    <li data-sctn-id="1" class="nav-item">
                        <a class="nav-link" href="../view/prestation.php">Nos prestations</a>
                    </li>

                    <li data-bs-toggle="offcanvas" data-bs-target="#offcanvas_sctn" class="nav-item">
                        <a class="nav-link " href="https://www.instagram.com/meys_ongles/?igshid=YmMyMTA2M2Y%3D">Nos r??alisations</a>
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
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Prestation</th>
                <th>descriptions</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Methode Americaine</td>
                <td>Pose compl??te capsules courtes. <br>
                    Pose compl??te capsules m??dium
                </td>
                <td>40??? <br>
                    45???
                </td>
            </tr>
            <tr>
                <td>RepairNail (Solutions ongles rong??s)</td>
                <td>Forfait 3 poses am??ricaines </td>
                <td>90???</td>
            </tr>
            <tr>
                <td>Manucure russe</td>
                <td>
                    Manucure russe seule <br>
                    Manucure russe + prestation suppl??mentaire
                </td>
                <td>
                    30???<br>
                    20???
                </td>
            </tr>
            <tr>
                <td>Renforcement (gel sur ongles longs)</td>
                <td>Pose compl??te </td>
                <td>40???</td>
            </tr>
            <tr>
                <td>Gainage (gel sur ongles courts)</td>
                <td>Pose compl??te</td>
                <td>35???</td>
            </tr>
            <tr>
                <td>D??pose seule + soin</td>
                <td>
                    Vernis semi-permanent <br>
                    Pose am??ricaine <br>
                    Pose gel <br>
                    Pose r??sine
                </td>
                <td>
                    10???<br>
                    15???<br>
                    20???<br>
                    20???
                </td>
            </tr>
            <tr>
                <td>Vernis semi-permanent</td>
                <td>
                    Pose compl??te

                </td>
                <td>
                    25???

                </td>
            </tr>
            <tr>
                <td> MENucure (Manucure homme)</td>
                <td>
                    Forfait

                </td>
                <td>
                    30??? <br>

                </td>
            </tr>
            <tr>
                <td>Suppl??ments d??co</td>
                <td>
                    French / Babyboomer / Babycolor / Cat Eye <br>
                    Nail Art (effet sucre/pull, incrustation, marbr??, c??ur???)

                </td>
                <td>
                    5???<br>
                    2???/doigt
                </td>
            </tr>
        </tbody>
    </table>


    <section>

        <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Methode Americaine </li>
                <li class="list-group-item">
                    <p>La m??thode am??ricaine consiste ?? d??poser une capsule sp??cifique sur votre ongle afin de le rallonger ?? la longueur souhait??e. Elles permettent de maintenir vos ongles tout en leur offrant une finition parfaite. Cette m??thode alternative douce ne n??cessite qu???un pon??age l??ger pour la retirer.
                        Cette manucure dure 3 semaines, ne n??cessite pas d???entretien et elle est aussi solide qu???une pose en r??sine, gel ou polygel/acrygel.
                        La pose am??ricaine est particuli??rement conseill??e pour les ongles rong??s, abim??s ou d??vitalis??s.
                        Pour cette manucure il est n??cessaire d???avoir les ongles courts.
                    </p>
                </li>
            </ul>
        </div>
    </section>



    <section>
        <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">RepairNail </li>
                <li class="list-group-item">
                    <p>Se ronger les ongles n???est pas sans cons??quences, en effet en plus d???un visuel peu soign??, cette habitude peut provoquer une infection des doigts comme des panaris. Aussi les mains constituent un v??hicule efficace pour transmettre une multitude de microbes, virus ou bact??ries.
                        Cela peut ??galement provoquer un d??calage entre la m??choire du haut et la m??choire du bas, ce qui, ?? longue, peut entra??ner un d??chaussement des dents et des maladies au niveau des gencives.
                        Si vous souhaitez arr??ter de vous ronger les ongles je vous propose la prestation ?? RepairNail ?? mais cela demandera un certain investissement de votre part, et il vous faudra faire preuve de rigueur car cette prestation s?????tale sur une dur??e de 6 semaines, ?? raison d???un rendez-vous tous les 15 jours.
                        Pour plus de renseignements, n???h??sitez pas ?? me contacter !

                    </p>
                </li>
            </ul>
        </div>
    </section>



    <section>
        <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Manucure russe</li>
                <li class="list-group-item">
                    <p>Se ronger les ongles n???est pas sans cons??quences, en effet en plus d???un visuel peu soign??, cette habitude peut provoquer une infection des doigts comme des panaris. Aussi les mains constituent un v??hicule efficace pour transmettre une multitude de microbes, virus ou bact??ries.
                        Cela peut ??galement provoquer un d??calage entre la m??choire du haut et la m??choire du bas, ce qui, ?? longue, peut entra??ner un d??chaussement des dents et des maladies au niveau des gencives.
                        Si vous souhaitez arr??ter de vous ronger les ongles je vous propose la prestation ?? RepairNail ?? mais cela demandera un certain investissement de votre part, et il vous faudra faire preuve de rigueur car cette prestation s?????tale sur une dur??e de 6 semaines, ?? raison d???un rendez-vous tous les 15 jours.
                        Pour plus de renseignements, n???h??sitez pas ?? me contacter !

                    </p>
                </li>
            </ul>
        </div>
    </section>



    <section>
        <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Renforcement </li>
                <li class="list-group-item">
                    <p>Le renforcement est une m??thode qui prot??ge et renforce les ongles longs naturels, cette technique consiste ?? ??galiser la plaque ongulaire avec du gel, pour ensuite appliquer du vernis semi-permanent ainsi qu???une finition pour prot??ger la manucure des chocs, ??caillements ou jaunissement.
                        Son tarif est plus ??lev?? car cela me demandera un travail suppl??mentaire afin de fa??onner vos ongles, les ??galiser en forme pour arriver au r??sultat souhait??.


                    </p>
                </li>
            </ul>
        </div>
    </section>



    <section>
        <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Gainage</li>
                <li class="list-group-item">
                    <p>Le gainage sert ?? renforcer et ??galiser la plaque ongulaire avec du gel. L???ongle doit ??tre court, c???est-??-dire qu???il ne doit pas d??passer la chair. J???applique ensuite du vernis semi permanent ainsi qu???une finition qui prot??gera la pose des ??caillements et du jaunissement.</p>
                </li>
            </ul>
        </div>
    </section>



    <section>
        <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Vernis semi-permanent</li>
                <li class="list-group-item">
                    <p>Cette m??thode consiste en la pr??paration de l???ongle puis l???application de vernis semi-permanent ainsi que l???application d???une couche de finition. Convient aux personnes dont les ongles sont en bonne sant??, courts et qui ont un temps limit?? pour prendre soin d???elles.</p>
                </li>
            </ul>
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
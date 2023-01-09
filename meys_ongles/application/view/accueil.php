<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
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
    <header id="menu-top" class="navbar navbar-expand-md navbar-dark header mt-0 px-3">

        <section class="navbar ms-auto">

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
                        <a class="nav-link active" href="#">Accueil</a>
                    </li>

                    <li data-sctn-id="1" class="nav-item">
                        <a class="nav-link" href="../view/prestation.php">Nos prestations</a>
                    </li>

                    <li data-bs-toggle="offcanvas" data-bs-target="#offcanvas_sctn" class="nav-item">
                        <a class="nav-link " href="../view/realisations.php">Nos réalisations</a>
                    </li>

                    <li data-bs-toggle="offcanvas" data-bs-target="#offcanvas_sctn" class="nav-item">
                        <a class="nav-link " href="../view/monEspace.php">Mon espace</a>
                    </li>

                    <li data-bs-toggle="offcanvas" data-bs-target="#offcanvas_sctn" class="nav-item">
                        <a class="nav-link " href="../view/aPropos.php">A propos</a>
                    </li>

                </ul>
            </nav>
        </section>
    </header>


    <!-- debut section carrousel -->
    <section>


    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../assets/img/IMG-20230103-WA0006-PhotoRoom (1).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin section carrousel -->

    <!-- debut section card -->
    <section id="carte">


        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <a href="../view/prestation.php"><img src="https://i.ebayimg.com/images/g/aaAAAOSw135h5rTr/s-l1600.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Methode Americaine</h5>
                        <p class="card-text">La méthode de manucure américaine consiste à déposer une capsule spécifique sur votre ongle afin de le rallonger à la longueur souhaitée. Elles permettent de maintenir vos ongles tout en leur offrant une finition parfaite. Cette méthode alternative douce ne nécessite qu’un ponçage léger pour la retirer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="../view/prestation.php"> <img src="https://i.ebayimg.com/images/g/aaAAAOSw135h5rTr/s-l1600.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">RepairNail</h5>
                        <p class="card-text">Si vous souhaitez arrêter de vous ronger les ongles je vous propose la prestation « RepairNail » mais cela demandera un certain investissement de votre part, et il vous faudra faire preuve de rigueur car cette prestation s’étale sur une durée de 6 semaines, à raison d’un rendez-vous tous les 15 jours.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="../view/prestation.php"> <img src="https://i.ebayimg.com/images/g/aaAAAOSw135h5rTr/s-l1600.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Manucure russe</h5>
                        <p class="card-text">La manucure russe est un soin des mains qui consiste à préparer l’ongle naturel en repoussant les cuticules à l’aide de différents embouts de ponceuse et en ponçant la surface de l’ongle pour obtenir des ongles plus lisses aux contours parfaitement nets.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="../view/prestation.php"> <img src="https://i.ebayimg.com/images/g/aaAAAOSw135h5rTr/s-l1600.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Renforcement</h5>
                        <p class="card-text">Le renforcement est une méthode qui protège et renforce les ongles longs naturels, cette technique consiste à égaliser la plaque ongulaire avec du gel, pour ensuite appliquer du vernis semi-permanent ainsi qu’une finition pour protéger la manucure des chocs, écaillements ou jaunissement.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <a href="../view/prestation.php"> <img src="https://assets.puzzlefactory.pl/puzzle/314/115/original.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Gainage</h5>
                        <p class="card-text">Le gainage est une méthode qui consiste à renforcer et égaliser la plaque ongulaire avec du gel. L’ongle doit être court, c’est-à-dire qu’il ne doit pas dépasser la chair. J’applique ensuite du vernis semi permanent ainsi qu’une finition qui protègera la pose des écaillements et dujaunissement.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 ">
                    <a href="../view/prestation.php"> <img src="https://assets.puzzlefactory.pl/puzzle/314/115/original.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">PRESS-ON Shop</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </section>
    <!-- fin section card -->

    <!--debut section carte -->
    <section>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92456.81423888501!2d1.3628028940870522!3d43.60080618479869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb6fec7552ff%3A0x406f69c2f411030!2sToulouse!5e0!3m2!1sfr!2sfr!4v1672840753609!5m2!1sfr!2sfr" width="600" height="450" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>
    <!--fin section carte -->

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #fc466b">
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
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 ">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
                        <p id="menu_footer">
                            <a class="text-white" href="../view/accueil.php">Accueil</a>
                        </p>
                        <p>
                            <a class="text-white" href="../view/prestation.php">Prestation</a>
                        </p>
                        <p>
                            <a class="text-white" href="../view/realisations.php">Realisations</a>
                        </p>
                        <p>
                            <a class="text-white" href="../view/monEspace.php">Mon Espace</a>
                        </p>
                        <p>
                            <a class="text-white" href="../view/aPropos.php">A Propos</a>
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
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

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
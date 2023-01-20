<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Realisations</title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/accueil.css">
    <script src="/assets/js/jquery.min.js"></script>
</head>
<script>
    $(document).ready(function() {
        $(".nav-link").mouseenter(function(e) {
            e.preventDefault();
            $("nav a").removeClass("active");
            $(this).addClass("active");

        });

    });
</script>

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
                    <li data-bs-toggle="offcanvas" data-bs-target="#offcanvas_sctn" class="nav-item">
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

    <section>


    <div>
        <h1>Collection 2023</h1>
    </div>
        <div class="gallery">
            <div>
                <a href=""><img src="../../assets/img/IMG-20230103-WA0000.jpg" alt="Image 1" class="img-thumbnail img-fluid"></a>
            </div>
            <div>
                <a href=""><img src="../../assets/img/IMG-20230103-WA0001.jpg" class="img-thumbnail" alt="Image 3"></a>
            </div>
            <div>
                <a href="image3.jpg"><img src="image3_thumbnail.jpg" class="img-thumbnail" alt="Image 3"></a>
            </div>
            <div>
                <a href="image4.jpg"><img src="image4_thumbnail.jpg" class="img-thumbnail" alt="Image 4"></a>
            </div>
            <div>
                <a href="image5.jpg"><img src="image5_thumbnail.jpg"  class="img-thumbnail" alt="Image 5"></a>
            </div>
            <div>
                <a href="image1.jpg"><img src="image1_thumbnail.jpg" class="img-thumbnail" alt="Image 6"></a>
            </div>
            <div>
                <a href="image2.jpg"><img src="image2_thumbnail.jpg" class="img-thumbnail" alt="Image 7"></a>
            </div>
            <div>
                <a href="image3.jpg"><img src="image3_thumbnail.jpg" class="img-thumbnail" alt="Image 8"></a>
            </div>
            <div>
                <a href="image4.jpg"><img src="image4_thumbnail.jpg" class="img-thumbnail" alt="Image 9"></a>
            </div>
            <div>
                <a href="image5.jpg"><img src="image5_thumbnail.jpg" class="img-thumbnail" alt="Image 9"></a>
            </div>
        </div>
        <!--  <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0005.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0006.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0014.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0013.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0012.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0011.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0010.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0009.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0008.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="presentation" src="../../assets/imgCompresser/IMG-20230103-WA0007.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>-->


    </section>

























    <!-- Footer -->
    <footer class="text-center text-lg-start text-black fixed-bottom" style="background-color: #fc466b">
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
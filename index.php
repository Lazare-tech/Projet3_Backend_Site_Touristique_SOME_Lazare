<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- local link -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Home Page</title>
</head>

<body>
    <?php include("navbar.php");?>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/visite-monument.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slider1.jpg" class="d-block w-100" alt="...">
            </div>
            <!-- <div class="carousel-item">
        <img src="images/slider4.jpg" class="d-block w-100" alt="...">
      </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="container pt-5">
        <div class="row">
            <h1 class="card-title text-center">Lorem ipusm</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 pt-5">
            <div class="col-lg-3">
                <div class="card h-100 border-0">
                    <img src="images/airBrukina.jpg" class="card-img-top" alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Voyage</h5>
                        <p class="card-text">


                            Organiser votre séjour, les formalités, précautions de santé, agence de voyages...
                        </p>
                    </div>
                    <div class="card-footer border-0">
                        <button class="btn btn-success">Voir plus</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">
                    <img src="images/Soupe-de-bœuf-pimenté.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Gastronomie</h5>
                        <p class="card-text">
                            La diversité culturelle donne naissance à une gastronomie riche et variée à découvrir...
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-secondary">Voir plus</button>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">
                    <img src="images/Bravia_Hote1.jpg" class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <h5 class="card-title">Sejour</h5>
                        <p class="card-text">
                            Le pays dispose d'hôtels, de maisons d'hôtes, d'auberges, de campements, de villas...
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-secondary">Voir plus</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card h-100">
                    <img src="images/a5740.jpeg" class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <h5 class="card-title">Sante</h5>
                        <p class="card-text">

                            S'informer sur les vaccins obligatoires, les traitements préventifs contre le paludisme...
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Voir plus</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container pt-5">
        <div class="row">
            <h1 class="card-title">A voir Absolument</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="images/bonfora-4c54b.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title">Cascade de Banfora</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/Domes_de_Fabedougou-1024x682.jpg" class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <h5 class="card-title">Les domes de fabedougou</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/picSindou.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/ruine.jpg" class="card-img-top" alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Les ruines de loropeni</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/crocodileSabou.jpg" class="card-img-top" alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Mares aux crocodiles sacres de Sabou</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/mosque.jpg" class="card-img-top" alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Vielle mosquee</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php include("footer.php");?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
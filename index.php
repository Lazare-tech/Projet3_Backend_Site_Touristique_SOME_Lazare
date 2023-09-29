<?php include("config.php");?>
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
                <div class="carousel-caption d-none d-md-block f">
                    <h1 class="bienvenu_faso">Bienvenu au Burkina Faso</h1>
                    <h5 class="card-title integre">Pays des Hommes integres</h5>
                 </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block l">
                    <h1 class="bienvenu">Bienvenu au Burkina Faso</h1>
                    <h5 class="card-title destination">Une destination a ne pas manquer</h5>
                 </div>
            
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
            <h1 class="card-title text-center">Nous vous acceuillons dans de bonne condtions</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 pt-5">
            <?php $reponse=$bdd->query("SELECT * FROM conditions");
            while($donnees= $reponse->fetch()){
            ?>
            <div class="col-lg-3">
                <div class="card h-100 border-0">
                    <img src="images/<?php echo $donnees['photo'];?>" class="card-img-top" alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $donnees['titre'];?></h5>
                        <p class="card-text">

                        <?php echo $donnees['contenu'];?>
                        </p>
                    </div>
                    <div class="card-footer border-0">
                        <button class="btn btn-success">Voir plus</button>
                    </div>
                </div>
            </div>
            <?php }?>
            
        </div>
    </section>
    <section class="container pt-5">
        <div class="row">
            <h1 class="card-title">A voir Absolument</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php $reponse= $bdd->query("SELECT * FROM site_touristique");
        while($donnees= $reponse->fetch()){
        ?>
            <div class="col-lg-4">
                <div class="card">
                    <img src="images/<?php echo $donnees['photo'];?>" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $donnees['titre'];?></h5>
                        <p class="card-text">
                        <?php echo $donnees['contenu'];?>
                                </p>
                    </div>
                </div>
            </div>
            <?php }?>
          
        </div>

    </section>
    <section class="container pt-5">
        <div class="row">
            <h1 class="card-title">Evenements culturelles</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 evenement_culturel">
            <?php $reponse=$bdd->query("SELECT * FROM evenemen");
            while($donnees=$reponse->fetch()){
                
            ?>
                <div class="card border-0 fespaco">
                    <a href="#"><img src="images/<?php echo $donnees['photo'];?>" alt="" class="image_evenement"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $donnees['titre'];?> </h5>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="col-lg-6">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/boloArt.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block ">
                                <p class="card-text ">
                                    Le projet du festival Bolo’Arts est initié dans le cadre des activités de sensibilisation et de développement socioculturelles et artistiques de l’association Bolo’Arts.
                                </p>
                             </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/Fespaco-Palais-photo_1.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="card-text ">
                                    Le Festival panafricain du cinéma et de la télévision de Ouagadougou ou FESPACO est l'un des plus grands festivals de cinéma africains.
                                    il se déroule tous les deux ans à Ouagadougou, la capitale du Burkina Faso
                                </p>
                             </div>
                        
                        </div>
                        <div class="carousel-item">
                            <img src="images/Siao-Burkina-faso.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="card-text ">
                                    Le Salon International de l'artisanat de Ouagadougou en abrégé SIAO est une manifestation qui rassemble des artisans venus du monde entier                                
                                </p>
                             </div>
                        
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
            </div>
        </div>
    </section>

    <?php include("footer.php");?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
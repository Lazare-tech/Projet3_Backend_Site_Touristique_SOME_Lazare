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

    <title>A Propos</title>
</head>

<body>
    <?php include("navbar.php");?>
    <div id="intro-example" class="p-5 text-center bg-propos">
        <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white mt-5">
                    <h1 class="mb-5 coaching"></h1>
                    <h2 class="mb-4 card-title coach_quotidien"></h2>

                </div>
            </div>
        </div>
    </div>

    <section class="container pt-5">
        <div class="row">
            <h2 class="card-title">Le tourisme au Burkina Faso</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card border-0">
                    <div class="card-text">
                        <h5 class="card-title">Les potentialités touristiques</h5>
                        <ul>
                            <?php $reponse=$bdd->query("SELECT * FROM tourisme_potentialite");
                                while($donnees=$reponse->fetch()){
                                    ?>
                                <li>
                                        <?php echo $donnees['contenu'];?>
                                </li>
                            <?php }?>

                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 zoom_img">
                <div class="card example zoom border-0">
                    <img src="images/bonfora-4c54b.jpg" alt="" class="image_carre">
                    <!-- <div class="content">
                    <div class="text">Cascade</div>
                </div> -->
                </div>
                <div class="card example zoom border-0">
                    <img src="images/picSindou.jpg" alt="" class="image_carre">
                    <!-- <div class="content">
                    <div class="text">Cascade</div>
                </div> -->
                </div>
                <div class="card example zoom border-0">
                    <img src="images/parcArly.jpg" alt="" class="image_carre">
                    <!-- <div class="content">
                    <div class="text">Cascade</div>
                </div> -->
                </div>
                <div class="card example zoom border-0">
                    <img src="images/sncA.jpg" alt="" class="image_carre">
                    <!-- <div class="content">
                    <div class="text">Cascade</div>
                </div> -->
                </div>
                <div class="card example zoom border-0">
                    <img src="images/metal.png" alt="" class="image_carre">
                    <!-- <div class="content">
                    <div class="text">Cascade</div>
                </div> -->
                </div>
                <div class="card example zoom border-0">
                    <img src="images/mosque.jpg" alt="" class="image_carre">
                    <!-- <div class="content">
                    <div class="text">Cascade</div>
                </div> -->
                </div>

            </div>
        </div>
    </section>
    <section class="container pt-5">
        <div class="row">
            <h2>Nos types de tourisme</h2>
        </div>
        <div class="row">

        <div class="col-lg-6 zoom_img">
            <div class="card example zoom border-0">
                <img src="images/ecoTourisme.png" alt="" class="image_carre">
                <!-- <div class="content">
            <div class="text">Cascade</div>
        </div> -->
            </div>
            <div class="card example zoom border-0">
                <img src="images/tourismeCulturel.jpg" alt="" class="image_carre">
                <!-- <div class="content">
            <div class="text">Cascade</div>
        </div> -->
            </div>
            <div class="card example zoom border-0">
                <img src="images/TourismeAfaire.webp" alt="" class="image_carre">
                <!-- <div class="content">
            <div class="text">Cascade</div>
        </div> -->
            </div>


        </div>
        <div class="col-lg-6">
            <div class="card border-0">
                <div class="card-text">
                    <h5 class="card-title">Il existe plusieurs types de tourisme au Burkina Faso :</h5>
                    <ul>
                        <?php $reponse=$bdd->query("SELECT * FROM tourisme_type");
                            while($donnees=$reponse->fetch()){
                                
                        ?>
                        
                        <li>
                                <?php echo $donnees['contenu'];?>
                        </li>
                        <?php }?>
                      
                    </ul>
                </div>
            </div>

        </div>
    </div>

    </section>
    <?php include("footer.php");?>

</body>

</html>
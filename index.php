<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php';?>
</head>
<body>
    <header>
        <img src="img/header-bg.jpg">
    </header>
    <?php require 'navigation.php';?>

    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">

             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-75" src="img/intro.png" alt="First slide">
                              <div class="carousel-caption d-none d-md-block">
                                <h4>Falegnameria Arredamenti</h4>
                                <p>Progettiamo e realizziamo bar e locali pubblici porte interne infissi esterni zanzariere e sistemi oscuranti mobili su misura e artigianali arredamenti completi classici e moderni!</p>
                              </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-75" src="img/intro.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-75" src="img/intro.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


                
            </div>
        </div>
    </section>
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Our Promise</span>
                            <span class="section-heading-lower">To You</span>
                        </h2>
                        <p class="mb-0">Garantiamo professionalità e competenza dalla progettazione alla posa in opera!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php';?>
    <?php require 'js.php';?>
</body>
</html>

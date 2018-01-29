<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php';?>
</head>
<body>
    <header>
        <img src="img/header-bg.png">
    </header>
    <?php require 'navigation.php';?>


    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex mr-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">La tradizione che non muore</span>
                            <span class="section-heading-lower">scorci del passato</span>
                        </h2>
                    </div>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-75" src="img/oggetti-antichi.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-75" src="img/teiera antica.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-75" src="img/oggetti-antichi.png" alt="Third slide">
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

    <?php require 'footer.php';?>
    <?php require 'js.php';?>
</body>
</html>

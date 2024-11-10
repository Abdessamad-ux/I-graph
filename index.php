<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>I Graph</title>

   
    
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link href="css2/bootstrap-icons.css" rel="stylesheet">
    <link href="css2/styl.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">

   

</head>

<body>

    <main>

        


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    I Graph
                </a>

                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        
                    </ul>

                    <a href="login.php" class="btn custom-btn d-lg-block d-none">Login</a>
                </div>
            </div>
        </nav>


        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>Community Of photographers</small>

                        <h1 class="text-white mb-5">Welcome To I Graph Space</h1>

                        <a class="btn custom-btn" href="login.php">Let's Start</a>
                    </div>

                    
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/video.mp4" type="video/mp4">

                </video>
            </div>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4">About I Graph</h2>

                            <p class="text-white">Bienvenue sur notre site dédié aux passionnés de photographie! Nous sommes heureux de vous accueillir dans notre communauté dynamique et interactive, conçue pour les amateurs et les professionnels de la photographie. Notre plateforme vous permet de partager vos plus belles photos, de découvrir le travail d'autres artistes et de vous connecter avec une communauté passionnée. Que vous soyez un photographe chevronné ou un amateur enthousiaste, vous trouverez ici une source d'inspiration et d'échange unique. Rejoignez-nous pour explorer, apprendre et partager votre passion pour la photographie!</p>

                     
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="rrr.jpg" class="about-image img-fluid">

                            
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="artists-section section-padding" id="section_3">
            <div class="container">
                
                <h2>Trends</h2>
                
                <div class="row">
                    <?php
                    require_once 'config.php';
                    require_once 'functions.php';
        
                    // Get popular photos from the database
                    $popular_photos = get_popular_photos();
        
                    // Display popular photos
                    foreach ($popular_photos as $photo) {
                        echo '<div class="col-md-4">';
                        echo '<p>' . $photo['title'] . '</p>';
                        echo '<img src="' . $photo['image_url'] . '" class="img-fluid" alt="' . $photo['title'] . '">';
                        echo '</div>';
                    }
                    ?>
                </div>
                
            </div>
        </section>
        
    </main>


    

    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
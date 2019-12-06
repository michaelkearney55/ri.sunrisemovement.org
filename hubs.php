<!DOCTYPE html>

<html <?php include 'php/html-attributes.php' ?>>
    <head>
        <?php include 'php/head.php' ?>
        
        <!-- Set up Open Graph Protocol -->
        <meta property="og:site_name" content="Sunrise RI">
        <meta property="og:title" content="Hubs &#8213; Sunrise RI" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://ri.sunrisemovement.org/hubs.php" />
        <meta property="og:image" content="assets/photos/strike_street.jpg" />
        <meta property="og:description" content="Sunrise Rhode Island is a movement of young people fighting to stop the climate crisis and create millions of good jobs in the process.">
        
        <!-- Link local stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/hubs.css">
    </head>

    <body>
        <?php include 'php/header.php' ?>
        <section class='background light'>
            <div class='container'>
                <div class='layout medium'>
                    <div>
                        <h2>Explore Hubs in Rhode Island</h2>
                        <p>Don't see a hub near you? <a href="get-involved.php#contact">Reach out to us</a> and fill out an <a href='https://actionnetwork.org/forms/sunrise-hub-interest'>interest form</a>. We'll help you get a hub up and running in your area!</p>
                    </div>
                </div>
                <div class='layout wide'>
                    <div class="hub-button-wrapper">
                        <a href="barrington-hub.php" class="barrington-splash square button bg-image" data-square-content="Barrington"><div class='inner'><h2>Barrington</h2></div></a>
                        <a href="brown-risd-hub.php" class="brown-risd-splash square button bg-image" data-square-content="Brown &#38; RISD"><div class='inner'><h2>Brown &#38; RISD</h2></div></a>
                        <a href="providence-hub.php" class="providence-splash square button bg-image" data-square-content="Providence"><div class='inner'><h2>Providence</h2></div></a>
                        <a href="south-county-hub.php" class="south-county-splash square button bg-image" data-square-content="South County"><div class='inner'><h2>South County</h2></div></a>
                        <a href="stonington-hub.php" class="stonington-splash square button bg-image" data-square-content="Stonington"><div class='inner'><h2>Stonington</h2></div></a>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'php/footer.php' ?>
    
    </body>

</html>

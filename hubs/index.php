<!DOCTYPE html>

<?php
    $title = "Hubs";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/hubs";
?>

<html <?php include $root . '/assets/snippets/html-attributes.php' ?>>
    <head>
        <?php include $root . '/assets/snippets/head.php' ?>
        
        <!-- Set up Open Graph Protocol -->
        <meta property="og:title" content=<?php echo $title . 'Sunrise RI' ?>>
        <meta property="og:site_name" content="Sunrise RI" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://ri.sunrisemovement.org/" />
        <meta property="og:image" content="/assets/images/photos/strike-color.jpg" />
        <meta property="og:description" content="Sunrise Rhode Island is a movement of young people fighting to stop the climate crisis and create millions of good jobs in the process.">
        
        <!-- Link local stylesheet -->
        <link rel="stylesheet" type="text/css" href="/assets/css/hubs.css">
        
    </head>

    <body>
        <?php include $root . '/assets/snippets/header.php' ?>
        <main>
            <section class='background light'>
            <div class='container'>
                <div class='layout medium'>
                    <div>
                        <h2>Explore Hubs in Rhode Island</h2>
                        <p>Don't see a hub near you? <a href="/get-involved/#contact">Reach out to us</a> and fill out an <a href='https://actionnetwork.org/forms/sunrise-hub-interest' target='_blank'>interest form</a>. We'll help you get a hub up and running in your area!</p>
                    </div>
                </div>
                <div class='layout wide'>
                    <div class="hub-button-wrapper">
                        <a href="/hubs/barrington/" class="barrington-button-splash square button bg-image" data-square-content="Barrington"><div class='inner'><h2>Barrington</h2></div></a>
                        <a href="/hubs/brown-risd" class="brown-risd-button-splash square button bg-image" data-square-content="Brown &#38; RISD"><div class='inner'><h2>Brown &#38; RISD</h2></div></a>
                        <a href="/hubs/providence" class="providence-button-splash square button bg-image" data-square-content="Providence"><div class='inner'><h2>Providence</h2></div></a>
                        <a href="/hubs/south-county" class="south-county-button-splash square button bg-image" data-square-content="South County"><div class='inner'><h2>South County</h2></div></a>
                        <a href="/hubs/stonington" class="stonington-button-splash square button bg-image" data-square-content="Stonington"><div class='inner'><h2>Stonington</h2></div></a>
                    </div>
                </div>
            </div>
        </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>

</html>
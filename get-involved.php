<!DOCTYPE html>

<html <?php include 'php/html-attributes.php' ?>>
    <head>
        <?php include 'php/head.php' ?>
        
        <!-- Set up Open Graph Protocol -->
        <meta property="og:site_name" content="Sunrise RI">
        <meta property="og:title" content="Get Involved &#8213; Sunrise RI" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://ri.sunrisemovement.org/get-involved.php" />
        <meta property="og:image" content="assets/photos/strike_street.jpg" />
        <meta property="og:description" content="Sunrise Rhode Island is a movement of young people fighting to stop the climate crisis and create millions of good jobs in the process.">
        
        <!-- Link local stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/.get-involved.css">
        
        <!-- Styling and JS for Action Network signup. -->
        <link href='https://actionnetwork.org/css/style-embed-v3.css' rel='stylesheet' type='text/css' /><script src='https://actionnetwork.org/widgets/v3/form/join-sunrise-ris-mailing-list?format=js&source=widget'></script>
        
    </head>

    <body>
        <?php include 'php/header.php' ?>
        <main>
            <section class='background light'>
                <div class='container'>
                    <div class='layout wide'>
                        <div class="flex-two-column">
                            <div class="text-align-left">
                                <h2 class="text-align-left">Get involved</h2>
                                <p>We're going to have to come together if we're going to get a Green New Deal and defeat climate change. Get involved by signing up for opportunities for action, joining a <a href='hubs.php'>hub</a> near you, or donating to support our cause!</p>
                                <div class="center-contents text-align-center spaced">
                                    <a href='https://secure.actblue.com/donate/sunrise-ri?refcode=ri-website-get-involved&recurring=true&amount=25' class='button yellow' data>Donate Now</a>
                                </div>
                            </div>
                            <div class="signup-wrapper">
                                <div id='can-form-area-join-sunrise-ris-mailing-list' style='width: 100%'><!-- this div is the target for our HTML insertion --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        
        <?php include 'php/footer.php' ?>
    
    </body>

</html>
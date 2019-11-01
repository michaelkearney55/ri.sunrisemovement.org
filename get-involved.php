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
        <link rel="stylesheet" type="text/css" href="css/get-involved.css">
        
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
                                <h4>Join the fight for climate justice and a Green New Deal in Rhode Island!</h4>
                                <p>We accomplished some amazing things in 2019 – like organizing for the <strong>historic climate strikes</strong> all over Rhode Island, hosting the <strong>Northeast Regional Sunrise Summit</strong>, and getting Representative Cicilline to sign on to the <strong>Green New Deal</strong>. This only happened because Rhode Islanders gave their time and money, signed petitions, recruited friends and family, and showed up at actions.</p>
                                <p>We need to <strong>keep the momentum going</strong> as we head into the 2020 elections in order to win a Green New Deal for our state, create good jobs for all in Rhode Island, and defeat the climate crisis.</p>
                                <p>Sign up now to join the movement, then <a href="hubs.php">find a Sunrise hub</a> near you!</p>
                                <h5 class="text-align-center spaced">Together, we can turn the tide.</h5>
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
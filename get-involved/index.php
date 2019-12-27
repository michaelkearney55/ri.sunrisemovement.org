<!DOCTYPE html>

<?php
    $title = "Get Involved";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/get-involved";
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
        
        <!-- Styling and JS for Action Network signup. -->
        <link href='https://actionnetwork.org/css/style-embed-v3.css' rel='stylesheet' type='text/css' /><script src='https://actionnetwork.org/widgets/v3/form/join-sunrise-ris-mailing-list?format=js&source=widget'></script>
        
    </head>

    <body>
        <?php include $root . '/assets/snippets/header.php' ?>
        <main>
            <section class="background light">
                <div class="container">
                    <div class="layout wide pair">
                        <div class="text-align-left">
                            <h4>Join the fight for climate justice and a Green New Deal in Rhode Island!</h4>
                            <p>We accomplished some amazing things in 2019 – like organizing for the <span class='text-bold'>historic climate strikes</span> all over Rhode Island, hosting the <span class='text-bold'>Northeast Regional Sunrise Summit</span>, and getting Representative Cicilline to sign on to the <span class='text-bold'>Green New Deal</span>. This only happened because Rhode Islanders gave their time and money, signed petitions, recruited friends and family, and showed up at actions.</p>
                            <p>We need to <span class='text-bold'>keep the momentum going</span> as we head into the 2020 elections in order to win a Green New Deal for our state, create good jobs for all in Rhode Island, and defeat the climate crisis.</p>
                            <p>Sign up now to join the movement, then <a href="/hubs/">find a Sunrise hub</a> near you!</p>
                            <h5 class="text-align-center spaced">Together, we can turn the tide.</h5>
                            <div class="center-contents text-align-center spaced">
                                <a href='https://www.gofundme.com/f/sunrisePVD2020' target="_blank" class='button yellow' data>Donate Now</a>
                            </div>
                        </div>
                        <div class="signup-wrapper">
                            <div id='can-form-area-join-sunrise-ris-mailing-list' style='width: 100%'><!-- this div is the target for our HTML insertion --></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>

</html>
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
        <meta property="og:title" content=<?php echo $title . ' | Sunrise RI' ?>>
        <meta property="og:site_name" content="Sunrise RI" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://ri.sunrisemovement.org/" />
        <meta property="og:image" content="/assets/images/photos/strike-color.jpg" />
        <meta property="og:description" content="Sunrise Rhode Island is a movement of young people fighting to stop the climate crisis and create millions of good jobs in the process.">
        
        <!-- Styling and JS for Action Network signup. -->
        <link href='https://actionnetwork.org/css/style-embed-v3.css' rel='stylesheet' type='text/css' /><script src='https://actionnetwork.org/widgets/v3/form/join-the-sunrise-movement-in-providence?format=js&source=widget'></script>
        
    </head>

    <body>
        <?php include $root . '/assets/snippets/header.php' ?>
        <main>
            <section class="background light">
                <div class="container">
                    <div class="layout wide pair">
                        <div class="text-align-left">
                            <h2>Join the movement.</h2>
                            <p>Sunrise Providence accomplished some amazing things in 2019 – like organizing thousands of people for the <span class='text-bold'>historic climate strikes</span> all over Rhode Island, <span class='text-bold'>training hundreds of organizers</span> at the Northeast Regional Sunrise Summit, and getting Representative Cicilline to <span class='text-bold'>sign on to the Green New Deal</span>. This all happened because Rhode Islanders gave their time and money, signed petitions, recruited friends and family, and showed up at actions.</p>
                            <p>We need to keep the momentum going as we head into 2020 if we're going to win a Green New Deal for our state and defeat the climate crisis.</p>
                            <p>Sign up now to join the movement.</p>
                            <h5>Together, we can turn the tide.</h5>
                            <div class='spacer'></div>
                        </div>
                        <div class="signup-wrapper">
                            <div id='can-form-area-join-the-sunrise-movement-in-providence' style='width: 100%'><!-- this div is the target for our HTML insertion --></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>

</html>
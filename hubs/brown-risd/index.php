<!DOCTYPE html>

<?php
    $title = "Brown/RISD Hub";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/brown-risd";
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
        <!--<link rel="stylesheet" type="text/css" href="/assets/css/template.css">-->
        
    </head>

    <body>
        <?php include $root . '/assets/snippets/header.php' ?>
        <main>
            <section class="background light">
                <div class="container">
                    <div class='layout narrow'>
                    <h2>Sunrise Brown &#38; RISD</h2>
                    <p>The Sunrise Movement hub at Brown University and the Rhode Island School of Design is mobilizing young people and college students to fight for climate justice and create millions of good jobs.</p>
                    <div class="center-contents"><a class="button magenta spaced" href="/get-involved">Join us!</a></div>
                    <p>Email: <a href="mailto:nina_wolff_landau@brown.edu">nina_wolff_landau@brown.edu</a>, <a href="mailto:yesenia_puebla@brown.edu">yesenia_puebla@brown.edu</a>, and <a href="mailto:estrella_rodriguez@brown.edu">estrella_rodriguez@brown.edu</a>.</p>
                    <p>Twitter: <a href="https://twitter.com/SunriseBrwnRISD">@SunriseBrwnRISD</a></p>
                    <p>Facebook: <a href="https://www.facebook.com/SunriseBrownRISD">Sunrise Movement Brown and RISD</a></p>
                    <p>Instagram: <a href="https://www.instagram.com/sunrisebrownrisd/">@sunrisebrownrisd</a></p>
                </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>

</html>
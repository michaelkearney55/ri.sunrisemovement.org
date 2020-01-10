<!DOCTYPE html>

<?php
    $title = "Stonington Hub";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/stonington";
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
        
        <!-- Link local stylesheet -->
        <!--<link rel="stylesheet" type="text/css" href="/assets/css/template.css">-->
        
    </head>

    <body>
        <?php include $root . '/assets/snippets/header.php' ?>
        <main>
            <section class="background light">
                <div class="container">
                    <div class='layout narrow'>
                    <h2>Sunrise Stonington</h2>
                    <p>Sunrise Stonington is a new hub based out of Westerly, RI, that mixes both Connecticut and Rhode Island efforts! This hub originated from a teen’s group focused on pollution, but after members attended the Sunrise Northeast Regional Summit, they decided to transition it into a Sunrise hub and join our movement. If you live on the RI/CT border, definitely check out Sunrise Stonington! As of now, they meet weekly at the Westerly Library. </p>
                    <div class="center-contents"><a class="button magenta spaced" href="/get-involved">Join us!</a></div>
                    <p>Email: <a href="mailto:sunrisestonington@gmail.com">sunrisestonington@gmail.com</a></p>
                    <p>Instagram: <a href="https://www.instagram.com/sunrisestonington/">@sunrisestonington</a></p>
                </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>

</html>
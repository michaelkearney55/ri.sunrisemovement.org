<!DOCTYPE html>

<?php
    $title = "Barrington Hub";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/barrington";
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
                    <h2>Sunrise Barrington</h2>
                    <p>Sunrise Barrington is a brand new hub. We're ready to get started organizing in Barrington to get a Green New Deal and climate justice for all. Sign up to join Sunrise RI, then send us an email at <a href="mailto:sunrisebarrington@gmail.com">sunrisebarrington@gmail.com</a> to see how you can get involved!</p>
                    <div class="center-contents"><a class="button magenta spaced" href="/get-involved">Join us!</a></div>
                </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>

</html>
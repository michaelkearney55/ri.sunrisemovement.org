<!DOCTYPE html>

<?php
    $title = "Donate";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/donate";
?>

<html <?php include $root . '/assets/snippets/html-attributes.php' ?>>
    <head>
        <?php include $root . '/assets/snippets/head.php' ?>
        <meta http-equiv="Refresh" content="1; url=https://secure.actblue.com/donate/sunrise-ri?refcode=ri-website-header&recurring=true&amount=25" />
        
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
                    <div class="layout narrow">
                        <h4>Please wait. You are being redirected.</h4>
                        <p>If this page does not reload within a few seconds, you can manually continue on to our <a href="https://secure.actblue.com/donate/sunrise-ri?refcode=ri-website-header&recurring=true&amount=25">donate page</a>.</p>
                    </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>

</html>
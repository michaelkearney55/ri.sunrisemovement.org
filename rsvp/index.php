<!DOCTYPE html>

<?php
    $title = "Sunrise After Sunset";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/rsvp/";
?>

<html <?php include $root . '/assets/snippets/html-attributes.php' ?>>
    <head>
        <?php include $root . '/assets/snippets/head.php' ?>
        
        <!-- Set up Open Graph Protocol -->
        <meta property="og:title" content=<?php echo $title . ' | Sunrise RI' ?>>
        <meta property="og:site_name" content="Sunrise RI" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://ri.sunrisemovement.org/rsvp/" />
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
                    <div class='layout pair'>
                        <div class='img-wrapper'>
                            <img src='/assets/images/photos/invitation_no_rsvp.png'>
                        </div>
                        <div class='first-on-mobile'>

                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScX3TNQBCQ1KeBgSq5pQ3Sp75gzg-XSAP2uKR1S_Qf8LK9stw/viewform?embedded=true" width="100%" height="1345" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>
    
    

</html>
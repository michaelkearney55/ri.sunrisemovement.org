<!DOCTYPE html>

<?php
    $title = "Template";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/rsvp/";
?>

<html <?php include $root . '/assets/snippets/html-attributes.php' ?>>
    <head>
        <?php include $root . '/assets/snippets/head.php' ?>
        
        <!-- Set up Open Graph Protocol -->
        <meta property="og:title" content=<?php echo $title . 'Sunrise RI' ?>>
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
                        <div>
                            <h2>Sunrise After Sunset</h2>
                            <h3>An evening to benefit Sunrise Providence</h3>
                            <p class='text-align-center text-bold'>7:00–9:30pm on Thursday, January 23, 2020</p>
                            <p class='text-align-center text-bold'>Rhode Island Spirits<br>59 Blackstone Avenue<br>Pawtucket, RI 02860</p>
                            <p class='text-align-center'>Food by Plant City<br>Cash bar featuring local spirits!</p>
                            <p class='text-align-center'>Meet Sunrise organizers and join the movement to stop climate change and win a Green New Deal!</p>
                            <p class='text-align-center'>Please bring your checkbook or a credit card. We deeply appreciate your support.</p>
                        </div>
                        <div>

                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScX3TNQBCQ1KeBgSq5pQ3Sp75gzg-XSAP2uKR1S_Qf8LK9stw/viewform?embedded=true" width="100%" height="1345" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>
    
    

</html>
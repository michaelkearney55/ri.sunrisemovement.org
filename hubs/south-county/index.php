<!DOCTYPE html>

<?php
    $title = "South County Hub";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/south-county";
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
                    <h2>South County Sunrise</h2>
                    <p>South County Sunrise was created in the summer of 2019, and has been growing into a strong hub and community since. As a county with an untapped population of coastal residents and thousands of students, southern Rhode Islanders are now given a voice through Sunrise. We are using those voices to commit to climate justice and end the influence of fossil fuel billionaires on our government and future.</p>
                    <div class="center-contents"><a class="button magenta spaced" href="/get-involved">Join us!</a></div>
                    <p><a href="https://actionnetwork.org/groups/southcountysunrise">Action Network</a></p>
                    <p>Email: <a href="mailto:scountysunrise@gmail.com">scountysunrise@gmail.com</a></p>
                    <p>Twitter: <a href="https://twitter.com/scountysunrise">@scountysunrise</a></p>
                    <p>Facebook: <a href="https://www.facebook.com/southcountysunrise/">South County Sunrise</a></p>
                    <p>Upcoming Events: <a href="http://bit.ly/southcountycalendar">Google Calendar</a></p>
                </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>

</html>
<!DOCTYPE html>

<html <?php include 'php/html-attributes.php' ?>>
    <head>
        <?php include 'php/head.php' ?>
        
        <!-- Set up Open Graph Protocol -->
        <meta property="og:site_name" content="Sunrise RI">
        <meta property="og:title" content="Sunrise RI" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://ri.sunrisemovement.org/" />
        <meta property="og:image" content="assets/photos/strike_street.jpg" />
        <meta property="og:description" content="Sunrise Rhode Island is a movement of young people fighting to stop the climate crisis and create millions of good jobs in the process.">
        
        <!-- Link local stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/index.css">
        
    </head>

    <body>
        <?php include 'php/header.php' ?>
        <main>
        <section class='background bg-image bg-intro-splash'>
            <div class='container'>
                <div class='layout wide'>
                    <h1>Fossil fuel billionares are stealing our future.<br>We're fighting back.</h1>
                    <div class="center-contents"><a class="button translucent spaced" href="get-involved.php">Join the movement</a></div>
                </div>
            </div>
        </section>
        <section class="background light">
            <div class="container">
                <div class="layout narrow">
                    <h2>We want good jobs and a livable future</h2>
                    <p>Sunrise Rhode Island is a youth movement fighting for a <a href="https://www.sunrisemovement.org/green-new-deal">Green New Deal</a> and climate justice in Rhode Island. The Green New Deal is a 10-year plan to mobilize every aspect of American society to 100% clean and renewable energy by 2030, a guaranteed living-wage job for anyone who needs one, and a just transition for both workers and frontline communities.</p>
                </div>
            </div>
        </section>
        </main>
        <?php include 'php/footer.php' ?>
    
    </body>

</html>
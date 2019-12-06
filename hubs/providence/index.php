<!DOCTYPE html>

<?php
    $title = "Providence Hub";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/providence";
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
                    <div class='layout medium'>
                    <h2>Sunrise Providence</h2>
                    <p>Providence is a vivid example of environmental racism. While predominantly white and wealthy areas of the city are shielded from the worst effects of the state’s air and water pollution, people of color and low-income residents are systematically exposed to harm. Our state has the ninth-highest rate of asthma in the entire country, and many of the most heavily affected areas are concentrated in Providence’s low-income neighborhoods as well as its communities of color.</p>
                    <p>At the same time, Providence – and Rhode Island more generally – has failed to take the bold steps necessary to fight the climate crisis by transitioning our city to renewable energy. Most of our elected officials have refused to support a Green New Deal or to sign the No Fossil Fuel Money Pledge.</p>
                    <h3>We deserve better.</h3>
                    <p>Sunrise Providence is fighting back against environmental racism and the climate crisis by building a youth-led movement to win a Green New Deal that tackles the racial and economic hierarchies embedded within our city. We demand a low-carbon, livable future and a just transition that will prioritize the wellbeing of frontline communities and eliminate the deep, structural inequalities within Providence. We are fighting to make sure our city works for all of us, not the fossil fuel billionaires.</p>
                    <div class="center-contents"><a class="button magenta spaced" href="/get-involved">Join us!</a></div>
                    <h4>Don’t have much experience with political organizing?</h4>
                    <p>No problem! Sunrise Providence hosts regular orientation sessions where new members can learn about our theory of change, the Green New Deal, and how you can join our movement! We can set you up with one of our many ongoing projects where you can meet and learn from fellow Sunrisers. We can also connect you with experienced Sunrise members who will help you learn how to become an effective community organizer.</p>
                    <h4>Want to chat one-on-one with a member of Sunrise Providence?</h4>
                    <p>Great! Please email <a href="mailto:sunriseprovidence@gmail.com">sunriseprovidence@gmail.com</a> and we’ll set up a one-on-one meeting with a member of our hub!</p>
                    <h4>Want to see our upcoming events?</h4>
                    <p>Take a look at <a href="https://calendar.google.com/calendar/b/2/r?tab=mc">our calendar</a>. It includes the dates and times of upcoming events, but to find the locations, please email sunriseprovidence@gmail.com.</p>
                    <p>Email: <a href="mailto:sunriseprovidence@gmail.com">sunriseprovidence@gmail.com</a></p>
                    <p>Twitter: <a href="https://twitter.com/sunrise_pvd?lang=en">@sunrise_PVD</a></p>
                    <p>Facebook: <a href="https://www.facebook.com/SunriseProvidence/">Sunrise Providence</a></p>
                    <p>Upcoming Events: <a href="https://calendar.google.com/calendar/b/2/r?tab=mc">Google Calendar</a></p>
                </div>
                </div>
            </section>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>

</html>
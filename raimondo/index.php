<!DOCTYPE html>

<?php
    $title = "Template";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $url = "https://ri.sunrisemovement.org/template.php";
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
            <section class='background light'>
                <div class='container'>
                    <div class='layout wide'>
                        <h2 class='text-align-center'>We demand climate leadership.</h2>
                    </div>
                    <div class='layout medium'>
                        <p>Governor Raimondo has taken over $500,000 from the fossil fuel industry. That includes a <a href='/assets/documents/schusterman.pdf' target='_blank'>single contribution of $250,000</a> from Stacy Schusterman, Chairwomen of Samson Energy, an oil and gas company. Raimondo also accepted a campaign contribution from the CEO and Founder of Invenergy, <span class='text-bold'>the company that tried to build the Burrillville Power Plant.</span> When our politicians rely on the fossil fuel industry to win their elections, we know that they won't have the people's best interests at heart when they take office.</p>
                    </div>
                    <div class='layout medium pair'>
                        <div class='first-on-mobile'>
                            <p>In September, hundreds of Sunrisers gathered in Providence for a weekend of movement building at the Northeast Regional Sunrise Summit. We marched on the State House to demand that Governor Raimondo sign the No Fossil Fuel Money pledge and support the Green New Deal.</p>
                        </div>
                        <div class='img-wrapper'>
                            <img src='/assets/images/photos/summit-march.jpg' alt='Sunrisers from all over the Northeast gathered to march through Providence to the State House.'>
                            <h7>Sunrisers marching in the September Summit action.</h7>
                        </div>
                    </div>
                    <div class='layout medium pair'>
                        <div class='img-wrapper'>
                            <img src='/assets/images/photos/raimondo-sneak-out.jpg' alt='Governor Raimondo fleeing climate activists at the State House. Her staff told the activists that she was out-of-state.'>
                            <h7>Raimondo sneaking out of the State House</h7>
                        </div>
                        <div class='first-on-mobile'>
                            <p>Raimondo's staff told us that she was conducting important business out-of-state, and that we would have to come back later. <span class='text-bold'>Then we caught Governor Raimondo sneaking out the back door of the State House.</span></p>
                        </div>
                    </div>
                    <div class='layout medium pair'>
                        <div class='first-on-mobile'>
                            <p>In December, we came back even stronger. Hundreds of people rallied in the cold outside the State House to once again demand that Governor Raimondo stop taking money from the fossil fuel industry and start taking action against climate change.</p>
                        </div>
                        <div class='img-wrapper'>
                            <img src='/assets/images/photos/dec-strike.jpg' alt='Sunrisers marched on the State House in December to demand climate action.'>
                            <h7>Sunrisers marching in the December Climate Strike.</h7>
                        </div>
                    </div>
                    <div class='layout medium pair'>
                        <div class='img-wrapper'>
                            <img src='/assets/images/photos/fourteen.jpg' alt='Fourteen Sunrisers risk arrest sitting in at the State House'>
                            <h7>Fourteen Sunrisers risk arrest sitting in at the State House.</h7>
                        </div>
                        <div class='first-on-mobile'>
                            <p>Meanwhile, fourteen brave young people were beginning a sit-in in the State House. They gave Governor Raimondo an ultimatum: they would stay there until the Governor pledged to stop taking money from the fossil fuel industry, or they were forcibly removed. She refused. Late that evening, all fourteen of them were arrested and released just before midnight. Governor Raimondo has the power to stop this, but she continues to put the interests of fossil fuel executives and lobbyists above the interests of everyday Rhode Islanders.</span></p>
                        </div>
                    </div>
                    <div class='layout narrow'>
                        <h5 class='text-align-center'>Rhode Island deserves a governor who will face climate change head-on and show leadership by rejecting fossil fuel money.</h5>
                    </div>
                    <div class='layout narrow'>
                        <a class='button magenta' href='https://twitter.com/intent/tweet?text=@GovRaimondo%20Rhode%20Island%20deserves%20a%20governor%20who%20works%20for%20the%20people,%20not%20fossil%20fuel%20interests.%20Be%20a%20leader%20and%20sign%20the%20No%20Fossil%20Fuel%20Money%20pledge!&url=http://ri.sunrisemovement.org&hashtags=NoFossilFuelMoney,ClimateStrike,GenGND&via=sunrise_PVD' target='_blank'>Tell Governor Raimondo to Reject Fossil Fuel Money</a>
                    </div>
                </div>
        </main>
        <?php include $root . '/assets/snippets/footer.php' ?>
    
    </body>

</html>
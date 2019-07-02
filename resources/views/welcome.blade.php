<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/reset.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+HK&display=swap" rel="stylesheet"> 
        <title>IECS Data</title>
    </head>
    <body>
   

    <section id="welcomeSpace">
        <div id="topbar">
            <div id="logoSpace">
            </div>
        </div>
  
        <div id="centerText">
            <p id="title">Welcome to IECS</p>
            <p id="message">We want to show you how we are reducing our carbon footprint one job at a time.</p>
            <p id="begin">Scroll to begin</p>
            <img src="images/downarrow.png" alt="downarrow" width=5%>
        </div>
    </section>

    <section id="scenario" class="section">
        <div id="persona">

        <div id="personaText">
            <p id="thisMichael">This is Michael.</p>
            <p>He wants to provide erosion control for his local 
             waterway. He's looking for the most environmentally and economically effective
             contract for his project of 4,000m2. He researches his options
             with IECS Cable-Concrete versus Rip-rap.</p>
        </div>
                
            <div id="clouds1">
                <img class="cloudfirst" src="images/IECS_illustrated_cloud_1.svg">
                <img class="cloudsecond" src="images/IECS_illustrated_cloud_2.svg">
            </div>

            <div id="personaScene">
                <img id="michael" src="images/IECS_illustrated_michael.svg">
                <img id="plant" src="images/IECS_illustrated_vegetation.svg">      
            </div>

        </div>

        <div id="ratio">
          
        </div>
    </section>


    <section id="fuelSave" class="section">
    <div id="iecsFuel">

    </div>

    <div id="rrFuel">
         <div class="testBox">

         </div>
    </div>
    </section>


    <section id="emissions">
    
    </section>



    <section id="roadDamage">

    <div id="road">

        <div id="testCar">

        </div>
    </div>

    <div id="damageInfo">
       
             <p id="damageInfoT">this is text about damage on the roads!</p>

    </div>

    </section>



    <section id="summary" class="section">

    <div id="dashboard">
        <div class="dashBox">

        </div>
        <div class="dashBox">

        </div>
        <div class="dashBox">

        </div>
        <div class="dashBox">

        </div>
    </div>

    <div id="finale">
  
    </div>

    </section>

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>

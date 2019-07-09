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
   
    <!––main welcome space--> 

    <section id="welcomeSpace">
        <img id="welcomeBg" src="images/IECS_illustrated_headerBackground.svg">
        <img id="treeHill" src="images/IECS_illustrated_treeonHill.svg">
        <img id="sun" src="images/IECS_illustrated_theSun.svg">
            <div id="logoSpace">
                <img src="images/iecs_logo.png" alt="IECS logo">
            </div>
  
        <div id="centerText">
            <p id="title">IECS is tackling carbon emissions</p>
            <p id="message">We want to show you how we are reducing our carbon footprint one job at a time.</p>
            <div id="begin"><p>SCROLL</p></div>
            <img id="scrollBtn" src="images/IECS_illustrated_scrolldownBtn.svg">
        </div>
    </section>


    <!––scenario/persona/ratio space-->

    <section id="scenario" class="section">
        <div id="persona">

        <div id="personaText">
            <p id="thisMichael">This is Michael.</p>
            <p>He wants to provide erosion control for his local 
             waterway. He's looking for the most environmentally and economically conscientious
             contract.</p>
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
             <img id ="ratioBkgrd" src="images/IECS_illustrated_ratio_background.svg">
        <div id="ratioRows"> 
          <div id="ratioRow6"><img src="images/IECS_illustrated_ratio_row.svg"></div>
          <div id="ratioRow5"><img src="images/IECS_illustrated_ratio_row.svg"></div>
          <div id="ratioRow4"><img src="images/IECS_illustrated_ratio_row.svg"></div>
          <div id="ratioRow3"><img src="images/IECS_illustrated_ratio_row.svg"></div>
          <div id="ratioRow2"><img src="images/IECS_illustrated_ratio_row.svg"></div>
          <div id="ratioRow1"><img src="images/IECS_illustrated_riprap_trucks_2.svg"></div>
        </div> 
        </div>
    </section>


    <!––fuel savings space-->

    <section id="fuelSave" class="section">
    <div id="iecsFuel">
        <div id="fuelText">
            <p>“Heavy trucks make up just around 7% of the vehicles on the 
                road in the U.S., but they consume about 25% of all fuel.”</p>
        </div>

        <div id="fuelText2">          
                <p>With IECS, Michael will be:</p>
        </div>
        
        <img id="scale1" src="images/IECS_illustrated_scale.svg">   
        <img id ="fuelAnim1" src="images/IECS_illustrated_fuel.svg">
        <img id ="fuelDrop1" src="images/IECS_illustrated_fuel_drops.svg">
        <div id="indc1Div">
            <img id="iconFuel1" src="images/IECS_illustrated_fuel_icon.svg">
                <h2>79</h2>
                <p>LITRES</p>
            <img id="indicator1" src="images/IECS_illustrated_indicator.svg">
        </div>
    </div>

    <div id="rrFuel">
        <img id="scale2" src="images/IECS_illustrated_scale.svg"> 
        <img id ="fuelAnim2" src="images/IECS_illustrated_fuel.svg">
        <img id ="fuelDrop2" src="images/IECS_illustrated_fuel_drops.svg">
        <div id="indc2Div">
            <img id="iconFuel2" src="images/IECS_illustrated_fuel_icon.svg">
                <h2>1,422</h2>
                <p>LITRES</p>
            <img id="indicator2" src="images/IECS_illustrated_indicator.svg">
        </div>
    </div>
    </section>

    <!––co2 emissions space-->

    <section id="emissions">
            <p id="emissionsFact">"The commercial road transportation sector produces 
            19% of the total emissions in Canada"</p>
       <img id="emissionsCloud" src="images/IECS_illustrated_city_clouds.svg">
       <img id="citytruckRow1" src="images/IECS_illustrated_cityriprap_upper.svg">
       <img id="citytruckRow2" src="images/IECS_illustrated_cityriprap_lower.svg">
       
            <img id="iecsSmog" src="images/IECS_illustrated_iecs_smog.svg">
            <div id="iecsSmogData">
                <h2>298g</p>
                <p>CO2</p>
            </div>

            <img id="riprapSmog" src="images/IECS_illustrated_riprap_smog.svg">
                <div id="riprapSmogData">
                <h2>5,424g</p>
                <p>CO2</p>
            </div>
      
       <img id="iecsTruck" src="images/IECS_illustrated_iecs_city_truck.svg">
       <img id="cityForest" src="images/IECS_illustrated_cityscape_background.svg">
    </section>


    <!––road damage space-->

    <section id="roadDamage">

        <div id="road">

        </div>
        
    </section>

    <!––ending summary space-->

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
  
        <img src="images/cableconcrete_result.jpg" alt="Cable Concrete" id="CC_result">

    </div>

    </section>

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>

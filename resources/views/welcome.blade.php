<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/reset.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:100,300,400,500,700,800,900display=swap" rel="stylesheet">
        <title>IECS Data</title>
    </head>
    <body>
   
    <!––main welcome space--> 

    <section id="welcomeSpace">
        <img id="welcomeBg" src="images/IECS_illustrated_header_Background.svg">

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
        <div id="personaText2">
            <p>He has 4,000m2 to cover and considers his options with using IECS cable concrete versus rip-rap.</p>
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

    </section>

    <section id="truckRatio">
        
    <div id="ratio">

        <div id="ratioRows"> 
          <div id="ratioRow6"><img src="images/IECS_illustrated_ratio_row.svg"></div>
          <div id="ratioRow5"><img src="images/IECS_illustrated_ratio_row.svg"></div>
          <div id="ratioRow4"><img src="images/IECS_illustrated_ratio_row.svg"></div>
          <div id="ratioRow3"><img src="images/IECS_illustrated_ratio_row.svg"></div>
          <div id="ratioRow2"><img src="images/IECS_illustrated_ratio_row.svg"></div>
          <div id="ratioRow1"><img src="images/IECS_illustrated_ratio_row.svg"></div>
        </div> 
        </div>
        
        <div id="ratioText">
                
                <h2 id="sentenceOne"><span id="lineOne">IECS would only need <span class="number">1</span> truck of cable concrete for Michael's job</span>
                
                <span id="lineTwo">, whereas up to <span class="number">18</span> rip-rap trucks would be required for the same delivery.</span></h2>
                
        <img id="iecsTruckratio" src="images/IECS_illustrated_iecs_city_truck.svg">

        <img id="scrollBtn2" src="images/IECS_illustrated_scrolldownBtn.svg">
        </div>
        
    </section>


    <!––fuel savings space-->

    <section id="fuelSave">

        <div id="fuelText">
            <p>“Heavy trucks make up just around <span class="number">7%</span> of the vehicles on the 
                road in the U.S., but they consume about <span class="number">25%</span> of all fuel.”</p>
        </div>

    
      
        <div id="indc1Div">
            <div id="dollarDiv1">
                <img id="dollarIcon1" src="images/IECS_illustrated_money_icon.svg">
                <h2>110.<span>60</span></h2>
                <p>FUEL COST</p>
            </div>
            <img id="iconFuel1" src="images/IECS_illustrated_fuel_icon.svg">
                <h2>79</h2>
                <p>LITRES</p>
            <img id="dollarIcon1">
            <img id="indicator1" src="images/IECS_illustrated_assets_green_indicator.svg">
        </div>   

    <h2 id="iecsFuelTitle">IECS</h2>
    <div id="iecsFuel">
        <img id="scale1" src="images/IECS_illustrated_scale_black.svg">   
        <img id ="fuelAnim1" src="images/IECS_illustrated_fuel.svg">
        <img id ="fuelDrop1" src="images/IECS_illustrated_fuel_drops.svg">
    </div>

    <div id="indc2Div">
        <div id="dollarDiv2">
                <img id="dollarIcon2" src="images/IECS_illustrated_money_icon.svg">
                <h2>1,990.<span>80</span></h2>
                <p>FUEL COST</p>
        </div>
            <img id="iconFuel2" src="images/IECS_illustrated_fuel_icon.svg">
                <h2>1,422</h2>
                <p>LITRES</p>
            <img id="indicator2" src="images/IECS_illustrated_assets_gray_indicator.svg">
        </div>

    <h2 id="rrFuelTitle">Rip-Rap</h2>
    <div id="rrFuel">
        <img id="scale2" src="images/IECS_illustrated_scale.svg"> 
        <img id ="fuelAnim2" src="images/IECS_illustrated_fuel.svg">
        <img id ="fuelDrop2" src="images/IECS_illustrated_fuel_drops.svg">
    </div>
    </section>

    <!––co2 emissions space-->

    <section id="emissions">
            <p id="emissionsFact">"The commercial road transportation sector produces 
            19% of the total emissions in Canada"</p>
       <img id="emissionsCloud" src="images/IECS_illustrated_cityscape_clouds.svg">
       <img id="citytruckRow1" src="images/IECS_illustrated_cityriprap_trucks_2.svg">
       <img id="citytruckRow2" src="images/IECS_illustrated_cityriprap_trucks_1.svg">
       <img id="citytruckRow3" src="images/IECS_illustrated_cityriprap_trucks_1.svg">
       
            <img id="iecsSmog" src="images/IECS_illustrated_cityscape_iecssmog.svg">
            <div id="iecsSmogData">
                <h2>298g</p>
                <p>CO2</p>
            </div>

            <img id="riprapSmog" src="images/IECS_illustrated_riprap_smog.svg">
            <img id="riprapSmogSmall" src="images/IECS_illustrated_cityscape_iecs_smallsmog.svg">
                <div id="riprapSmogData">
                <h2>5,424g</p>
                <p>CO2</p>
            </div>
      
       <img id="iecsTruck" src="images/IECS_illustrated_iecs_city_truck.svg">
       <img id="cityForest" src="images/IECS_illustrated_cityscape_background.svg">
    </section>


    <!––road damage space-->

    <section id="roadDamage">

        <div id="street">
        <img id="streetLine" src="images/IECS_illustrated_road_damage_background.svg">
        <img id="car1" src="images/IECS_illustrated_yellowcar.svg">
            <img id="car2" src="images/IECS_illustrated_taxicar.svg">
            <img id="car3" src="images/IECS_illustrated_lightgraycar.svg">
            <img id="car4" src="images/IECS_illustrated_lightbluecar.svg">
            <img id="car5" src="images/IECS_illustrated_sandcar.svg">

            <img id="rrDamageTruck1" src="images/IECS_illustrated_riprap_truck_damage.svg">
            <img id="rrDamageTruck2" src="images/IECS_illustrated_riprap_truck_damage.svg">
            <img id="rrDamageTruck3" src="images/IECS_illustrated_riprap_truck_damage.svg">
            <img id="rrDamageTruck4" src="images/IECS_illustrated_riprap_truck_damage.svg">
            <img id="rrDamageTruck5" src="images/IECS_illustrated_riprap_truck_damage.svg">

            <img id="roadCrack1" src="images/IECS_illustrated_roadcrack_1.svg">
            <img id="roadCrack2" src="images/IECS_illustrated_roadcrack_2.svg">
            <img id="roadCrack3" src="images/IECS_illustrated_roadcrack_3.svg">
            <img id="roadCrack4" src="images/IECS_illustrated_roadcrack_4.svg">
            <img id="roadCrack5" src="images/IECS_illustrated_roadcrack_5.svg">
            <img id="roadCrack6" src="images/IECS_illustrated_roadcrack_6.svg">
            <img id="potHole" src="images/IECS_illustrated_assets_pothole.svg">
        </div>

        <div id="damageText">
            <p>Tax dollars spent on road damage repair from excessive
                heavy truck traffic is a strain on the economy and can be reduced
            </p>    
        </div>


    </section>


    <!––ending summary space-->

    <section id="summary" class="section">
        <div id="dashboard">
            <div class="dashBox1">
                <!-- Fuel  -->
                <div class="summaryDash">
                    <h2>Fuel</h2>
                    <img id="level-icon-1" src="images/IECS_illustrated_assets_fuel_level.svg" alt="fuel level icon">
                </div>
                <div class="amount-numbers">
                    <p><span id="amount">79</span>Litres<p> 
                </div>
            </div>
            <!-- Co2 -->
            <div class="dashBox2">
                <div class="summaryDash">
                        <h2>Co2</h2>
                        <img id="level-icon-2" src="images/IECS_illustrated_assets_c02.svg" alt="caron emissions level icon">
                </div>
                <div class="amount-numbers">
                    <p><span id="amount">296</span>Grams<p> 
                </div>
                </div>
            <!-- Road Damage -->
            <div class="dashBox3">
                    <div class="summaryDash">
                        <h2>Road Damage</h2>
                        <img id="level-icon-3" src="images/IECS_illustrated_assets_road_damage.svg" alt="road damage level icon">
                    </div>
                    <div class="amount-numbers">
                        <p><span id="amount">Low</span><p> 
                    </div>
            </div>
             <!-- Vegetation -->
            <div class="dashBox4">
                    <div class="summaryDash">
                        <h2>Vegetation</h2>
                        <img id="level-icon-4" src="images/IECS_illustrated_assets_vegetation.svg" alt="vegetation level icon">
                    </div>
                    <div class="amount-numbers">
                        <p><span id="amount">40%</span><p> 
                    </div>
            </div>
        </div>

        <div id="finale">
            <div class="call-to-actionCon">
                <div class="call-to-action">
                    <h3>Now It’s your turn.</h3>
                    <div class="keyLine"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Distinctio porro quo officia quis vitae ut ad ipsam deleniti autem commodi consectetur,
                         perferendis veniam maxime voluptate?</p>
                </div>
            </div>
            <div class="actionBtn"><p>Learn More</p></div>
        </div>

    </section>

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>

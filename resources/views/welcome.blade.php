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
            <p id="title">Cable Concrete is environmentally-friendly</p>
            <p id="message">See how you can be a part of the solution to reducing your ecological footprint within the construction industry.</p>
            <div id="begin"><p>SCROLL</p></div>
            <img id="scrollBtn" src="images/IECS_illustrated_scrolldownBtn.svg">
        </div>
    </section>


    <!––scenario/persona/ratio space-->

    <section id="scenario" class="section">
        <div id="persona">
            <div id="personaText">
                <p id="michaelText">This is Michael.</p>
                    <p>He wants to provide erosion control for his local 
                    waterway. He's looking for the most environmentally and economically conscientious
                    contract.</p>
            </div>
        <div id="scenarioText">
            <p>He has 215m<sup>2</sup> to cover and considers the benefits of using cable concrete versus using rip rap.</p>
        </div>
        <div id="scenarioDetail">
            <div class="imageThumb">
                <p id="scenario-title-text">Rip-Rap</p>
                <img id="rrThumb" src="images/rrThumb.png">
            </div>
                <div>
                    <p class="versus">vs</p>
                </div>
            <div class="imageThumb">
                <p id="scenario-title-text">Cable Concrete</p>
                <img id="ccThumb" src="images/ccThumb.jpg">
            </div>
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
        <div id="ratioStatement">
            <div id="ratioText">       
                    <h2 id="sentenceOne"><span id="lineOne">IECS would only need <span class="numberGreen">1</span> truck of cable concrete for Michael's job</span>
                    <span id="lineTwo">, whereas up to <span class="number">18</span> rip-rap trucks would be required for the same delivery.</span></h2>
            </div>  
            <div id="iecsTruckratioOverflow">
                <img id="iecsTruckratio" src="images/IECS_illustrated_iecs_city_truck.svg">
        </div>  
           <img id="scrollBtn2" src="images/IECS_illustrated_scrolldownBtn.svg">  
        </div>  
    </section>


    <!––fuel savings space-->

    <section id="fuelSave">
        <div id="fuelText">
            <h2>Reduced fuel consumption means <span class="textGreen">more savings</span> and <span class="textGreen">less waste</span></h2>
        </div>
        <div id="fuelFact">
            <p>“Heavy trucks make up just around <span class="number">7%</span> of the vehicles on the 
                road in the U.S., but they consume about <span class="number">25%</span> of all fuel.”</p>
                <p class="source"><a href="https://thinkprogress.org/big-trucks-emit-huge-amounts-of-carbon-every-year-the-epa-is-about-to-do-something-about-it-5c402732888/" target="_blank">Source: Learn More</a></p>
        </div>
        <div id="indc1Div">
            <div id="dollarDiv1">
                <img id="dollarIcon1" src="images/IECS_illustrated_money_icon_white.svg">
                    <div id="dollarText1">
                        <h2>110.60</h2>
                        <p>FUEL COST</p>
                    </div>
            </div>
        <div id="fuelDiv1">
            <img id="iconFuel1" src="images/IECS_illustrated_fuel_icon_white.svg">
                <h2>79</h2>
                <p>LITRES</p>
        </div>
            <img id="indicator1" src="images/IECS_illustrated_assets_green_indicator.svg">
    </div>
    <div id="iecsFuelTitle">
        <h2>Cable Concrete</h2>
    </div>
    <div id="iecsFuel">
        <img id="scale1" src="images/IECS_illustrated_scale_black.svg">   
        <img id ="fuelAnim1" src="images/IECS_illustrated_fuel.svg">
    </div>
    <div id="indc2Div">
        <div id="dollarDiv2">
                <img id="dollarIcon2" src="images/IECS_illustrated_money_icon.svg">
                <div id="dollarText2">
                    <h2>1,990.80</h2>
                    <p>FUEL COST</p>
                </div>
        </div>
        <div id="fuelDiv2">
            <img id="iconFuel2" src="images/IECS_illustrated_fuel_icon.svg">
                <h2>1,422</h2>
                <p>LITRES</p>
        </div>
            <img id="indicator2" src="images/IECS_illustrated_assets_gray_indicator.svg">
    </div>
    <div id="rrFuelTitle">
        <h2>Rip-Rap</h2>
    </div>
    <div id="rrFuel">
        <img id="scale2" src="images/IECS_illustrated_scale.svg"> 
        <img id ="fuelAnim2" src="images/IECS_illustrated_fuel.svg">
    </div>
    </section>

    <!––co2 emissions space-->

    <section id="emissions">
        <div id="emissionsFact">
            <h2>Excess transporter travel raises CO2 emissions, creating air pollution</h2>
            <p>"The commercial road transportation sector produces 
                        <span class="number">19%</span> of the total carbon emissions in Canada"</p>
                        <p class="source"><a href="https://www.nrcan.gc.ca/energy/efficiency/transportation/commercial-vehicles/reports/7607" target="_blank">Source: Natural Resources Canada</a></p>
        </div>
       <img id="emissionsCloud" src="images/IECS_illustrated_cityscape_clouds.svg">
       <img id="citytruckRow1" src="images/IECS_illustrated_cityriprap_trucks_2.svg">
       <img id="citytruckRow2" src="images/IECS_illustrated_cityriprap_trucks_1.svg">
       <img id="citytruckRow3" src="images/IECS_illustrated_cityriprap_trucks_1.svg">
            <img id="iecsSmog" src="images/IECS_illustrated_cityscape_iecssmog.svg">
            <div id="iecsSmogData">
                <h2>298g</p>    
            </div>
            <img id="riprapSmog" src="images/IECS_illustrated_riprap_smog.svg">
            <img id="riprapSmogSmall" src="images/IECS_illustrated_cityscape_iecs_smallsmog.svg">
                <div id="riprapSmogData">
                <h2>5,424g</p>
            </div>
       <img id="iecsTruck" src="images/IECS_illustrated_iecs_city_truck.svg">
       <img id="cityForest" src="images/IECS_illustrated_cityscape_background.svg">
    </section>

    <!––road damage space-->

    <section id="roadDamage">
        <h2 class="hidden">Road Damage</h2>
        <div class="roadDamage-Description">
            <!-- column 1 title -->
            <div class="roadDamage-column-1">
                <h3>Title Here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, 
                    aperiam! Voluptate reprehenderit quas error natus
                     aut quod magnam atque recusandae autem ut, animi, 
                     inventore blanditiis et laudantium illum placeat laborum.
               </p>  
            </div>
            <!-- column 2 title -->
            <div class="roadDamage-column-2">
                <h3>Title Here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, 
                    aperiam! Voluptate reprehenderit quas error natus
                     aut quod magnam atque recusandae autem ut, animi, 
                     inventore blanditiis et laudantium illum placeat laborum.
               </p>  
            </div>
        </div>
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
            <img id="repairTruck" src="images/IECS_illustrated_tarmac_roller.svg">
            <img id="pylon1" class="repairFade" src="images/IECS_illustrated_construction_cone.svg">
            <img id="pylon2" class="repairFade" src="images/IECS_illustrated_construction_cone.svg">
            <img id="roadBlock1" class="repairFade" src="images/IECS_illustrated_construction_barrier.svg">
            <img id="roadBlock2" class="repairFade" src="images/IECS_illustrated_construction_barrier.svg">
        </div>

        <div id="damageText">
          <!--  <p>Tax dollars spent on road damage repair from excessive
                heavy truck traffic is a strain on the economy and can be reduced
            </p>   -->
        </div>


    </section>

    <section id="vegetation">
        
        <div id="ccVegDiv">
            <div id="ccVegIMG">

            </div>
        </div>

        <div id="rrVegDiv">
            <div id="rrVegIMG">
                
            </div>
        </div>
              
    </section>


    <!––ending summary space-->
    <section id="summary" class="section">
        <div class="summary-title">
            <h3>Client overview</h3>
        </div>
        <div id="dashboard">
            <div class="dashBox1">
                <!-- Fuel  -->
                <div class="summaryDash">
                    <h2>Fuel used</h2>
                    <img id="level-icon-1" src="images/IECS_illustrated_assets_fuel_level.svg" alt="fuel level icon">
                </div>
                <div class="amount-numbers">
                    <p><span id="amount1" class="amount">1422</span>Litres<p> 
                </div>
            </div>
            <!-- Co2 -->
            <div class="dashBox2">
                <div class="summaryDash">
                        <h2>Co2 emitted</h2>
                        <img id="level-icon-2" src="images/IECS_illustrated_assets_c02.svg" alt="caron emissions level icon">
                </div>
                <div class="amount-numbers">
                    <p><span id="amount2" class="amount">5424</span>Grams<p> 
                </div>
                </div>
            <!-- Road Damage -->
            <div class="dashBox3">
                    <div class="summaryDash">
                        <h2>Road Damage</h2>
                        <img id="level-icon-3" src="images/IECS_illustrated_assets_road_damage.svg" alt="road damage level icon">
                    </div>
                    <div class="amount-numbers">
                        <p><span id="amount3" class="amount">Low</span><p> 
                    </div>
            </div>
             <!-- Vegetation -->
        </div>

        <div id="finale" class="ccFinale">
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
    <footer>
        
    </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>



        <script src="js/main.js"></script>
    </body>
</html>

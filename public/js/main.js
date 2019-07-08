//https://ihatetomatoes.net/module-1/s101-reverse-and-each-loop-726/  <--- go here if you 
//decide to do a foreach loop for duplicated animations

$(document).ready(function(){

    var controller = new ScrollMagic.Controller();

   //scene pins for every section
   
    var welcomePinScene = new ScrollMagic.Scene({
		triggerElement: '#welcomeSpace',
		triggerHook: 0,
	})
	.setPin('#welcomeSpace')
    .addTo(controller);
    
    var sectionPinScene1 = new ScrollMagic.Scene({
		triggerElement: '#scenario',
        triggerHook: 0,
        duration: '90%'
	})
	.setPin('#scenario')
    .addTo(controller);
    
    var sectionPinScene2 = new ScrollMagic.Scene({
		triggerElement: '#fuelSave',
        triggerHook: 0,
        duration: '90%'
	})
	.setPin('#fuelSave')
    .addTo(controller);
    
    var sectionPinScene3 = new ScrollMagic.Scene({
		triggerElement: '#emissions',
        triggerHook: 0,
        duration: '90%'
	})
	.setPin('#emissions')
    .addTo(controller);
    
    var sectionPinScene4 = new ScrollMagic.Scene({
		triggerElement: '#roadDamage',
        triggerHook: 0,
        duration: '90%'
	})
	.setPin('#roadDamage')
    .addTo(controller);
    
    var sectionPinScene5 = new ScrollMagic.Scene({
		triggerElement: '#summary',
        triggerHook: 0,
	})
	.setPin('#summary')
	.addTo(controller);

  //end pin scene for every section
  
  

    var damageinfoScene = new ScrollMagic.Scene({
        triggerElement: '#damageInfoT',
        triggerHook: .2
     })
    .setClassToggle('#damageInfoT', 'fade-in')
    .addTo(controller);

    var carScene = new ScrollMagic.Scene({
        triggerElement: '#testCar',
        triggerHook: .5
    })
    .setClassToggle('#testCar', 'fade-in')
    .addTo(controller);
    
   //persona content animation

   var michaelScene = new ScrollMagic.Scene({
      triggerElement: '#michael',
      triggerHook: .9,
      reverse: false
    })
      .setClassToggle('#michael', 'fade-in')
      .addTo(controller);

    var clouds1Scene = new ScrollMagic.Scene({
      triggerElement: '#clouds1',
      triggerHook: .8
    })
      .setClassToggle('#clouds1', 'fade-in')
      .addTo(controller);


      /*ratio content animation*/

      var ratioRow1Scene = new ScrollMagic.Scene({
        triggerElement: '#ratioRow1',
        triggerHook: 1,
        reverse:false
      })
        .setClassToggle('#ratioRow1', 'fade-in')
        .addTo(controller);

      var ratioRow2Scene = new ScrollMagic.Scene({
        triggerElement: '#ratioRow2',
        triggerHook: .95,
        reverse:false
      })
        .setClassToggle('#ratioRow2', 'fade-in')
        .addTo(controller);  

        var ratioRow3Scene = new ScrollMagic.Scene({
          triggerElement: '#ratioRow3',
          triggerHook: .9,
          reverse:false
        })
          .setClassToggle('#ratioRow3', 'fade-in')
          .addTo(controller);  

      var ratioRow4Scene = new ScrollMagic.Scene({
        triggerElement: '#ratioRow4',
        triggerHook: .8,
        reverse:false
      })
        .setClassToggle('#ratioRow4', 'fade-in')
        .addTo(controller);
        
        var ratioRow5Scene = new ScrollMagic.Scene({
          triggerElement: '#ratioRow5',
          triggerHook: .7,
          reverse:false
        })
          .setClassToggle('#ratioRow5', 'fade-in')
          .addTo(controller);
          
          var ratioRow6Scene = new ScrollMagic.Scene({
            triggerElement: '#ratioRow6',
            triggerHook: .6,
            reverse:false
          })
            .setClassToggle('#ratioRow6', 'fade-in')
            .addTo(controller);  

        
            /*fuel content animation*/
            
            var fuelTextScene = new ScrollMagic.Scene({
              triggerElement: '#iecsFuel',
              triggerHook: .6,
              reverse:false
            })
              .setClassToggle('#fuelText', 'fade-in')
              .addTo(controller);  

              var fuelTextScene2 = new ScrollMagic.Scene({
                triggerElement: '#iecsFuel',
                triggerHook: .5,
                reverse:false
              })
                .setClassToggle('#fuelText2', 'fade-in')
                .addTo(controller);  


        var fuelAnim1Scene = new ScrollMagic.Scene({
          triggerElement: '#iecsFuel',
          triggerHook: .6,
          reverse:false
        })
          .setClassToggle('#fuelAnim1', 'fade-in')
          .addTo(controller);  


          var fuelAnim1Scene = new ScrollMagic.Scene({
            triggerElement: '#rrFuel',
            triggerHook: .6,
            reverse:false
          })
            .setClassToggle('#fuelAnim2', 'fade-in')
            .addTo(controller); 


            var fuelDrop1Scene = new ScrollMagic.Scene({
              triggerElement: '#rrFuel',
              triggerHook: .6,
              reverse:false
            })
              .setClassToggle('#fuelDrop1', 'fade-in')
              .addTo(controller); 

              var fuelDrop2Scene = new ScrollMagic.Scene({
                triggerElement: '#rrFuel',
                triggerHook: .6,
                reverse:false
              })
                .setClassToggle('#fuelDrop2', 'fade-in')
                .addTo(controller); 
  
                var indc1Scene = new ScrollMagic.Scene({
                  triggerElement: '#rrFuel',
                  triggerHook: .4,
                  reverse:false
                })
                  .setClassToggle('#indc1Div', 'fade-in')
                  .addTo(controller); 


                var indc2Scene = new ScrollMagic.Scene({
                  triggerElement: '#rrFuel',
                  triggerHook: .4,
                  reverse:false
                })
                  .setClassToggle('#indc2Div', 'fade-in')
                  .addTo(controller); 


});




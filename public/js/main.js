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
    
    var sectionPinScene1 = new ScrollMagic.Scene({
		triggerElement: '#fuelSave',
        triggerHook: 0,
        duration: '90%'
	})
	.setPin('#fuelSave')
    .addTo(controller);
    
    var sectionPinScene1 = new ScrollMagic.Scene({
		triggerElement: '#emissions',
        triggerHook: 0,
        duration: '90%'
	})
	.setPin('#emissions')
    .addTo(controller);
    
    var sectionPinScene1 = new ScrollMagic.Scene({
		triggerElement: '#roadDamage',
        triggerHook: 0,
        duration: '90%'
	})
	.setPin('#roadDamage')
    .addTo(controller);
    
    var sectionPinScene1 = new ScrollMagic.Scene({
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
    
  //  var dashScene = new ScrollMagic.Scene({
   //     triggerElement: '.dashBox',
    //    triggerHook: .2
   // })
  //  .setClassToggle('.dashBox', 'fade-in')
   // .addTo(controller);

});

$(document).ready(function(){

    var controller = new ScrollMagic.Controller();
	
    var personaScene = new ScrollMagic.Scene({
        triggerElement: '#persona'
    })
    .setClassToggle('#persona', 'fade-in')
    .addTo(controller);

    var ratioScene = new ScrollMagic.Scene({
        triggerElement: '#ratio'
    })
    .setClassToggle('#ratio', 'fade-in')
    .addTo(controller);

    var iecsfuelScene = new ScrollMagic.Scene({
        triggerElement: '#iecsFuel'
    })
    .setClassToggle('#iecsFuel', 'fade-in')
    .addTo(controller);

    var rrfuelScene = new ScrollMagic.Scene({
        triggerElement: '#rrFuel'
    })
    .setClassToggle('#rrFuel', 'fade-in')
    .addTo(controller);

    var emissionsScene = new ScrollMagic.Scene({
        triggerElement: '#emissions'
    })
    .setClassToggle('#emissions', 'fade-in')
    .addTo(controller);

    var damageinfoScene = new ScrollMagic.Scene({
        triggerElement: '#damageInfo'
    })
    .setClassToggle('#damageInfo', 'fade-in')
    .addTo(controller);

    var dashScene = new ScrollMagic.Scene({
        triggerElement: '.dashBox'
    })
    .setClassToggle('.dashBox', 'fade-in')
    .addTo(controller);

});

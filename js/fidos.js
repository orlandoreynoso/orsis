$ = jQuery.noConflict();


$(document).ready(function() {

  console.log("instafeed file is done");

  var userFeed = new Instafeed({
        get: 'user',
        userId: '384641951',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '384641951.1677ed0.9e89de83a376467885c67c9da58a9dd8',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });

    userFeed.run();

    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });

});

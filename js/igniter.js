
function changeClass(i, width) {
    // Alias HTML tag.
    var html = document.documentElement;
                
    // Find all instances of range_NUMBER and kill 'em.
    html.className = html.className.replace(/(\s+)?range_\d/g, '');
                
    // Check for valid range.
    if (i > -1) {
        // Add class="range_NUMBER"
        html.className += ' range_' + i;
    }
   
                
// Note: Not making use of width here, but I'm sure
// you could think of an interesting way to use it.
}

var ADAPT_CONFIG = {
    // Where is your CSS?
    //path: Drupal.settings.basePath + Drupal.settings.igniter['pathToTheme'] + '/css/grid12/',
    //TODO don't hard code that. Sadly drupal.settings are not accessible. So we have to find a trick
    path: 'http://local/sooq/sites/all/themes/igniter/css/grid12/',

    // false = Only run once, when page first loads.
    // true = Change on window resize and page tilt.
    dynamic: true,

    // Optional callback... myCallback(i, width)
    callback: changeClass,

    // First range entry is the minimum.
    // Last range entry is the maximum.
    // Separate ranges by "to" keyword.
    range: [
    '0px    to 760px  = mobile.css',
    '760px  to 980px  = 720.css',
    '980px  to 1280px = 960.css',
    '1280px to 1600px = 1200.css',
    '1600px to 1920px = 1560.css',
    '1940px to 2540px = 1920.css',
    '2540px           = 2520.css'
    ]
};



/**
 * Show grid
 */
(function($) {

    Drupal.behaviors.igniterDebug = {
        attach: function (context) {
            $('body', context).once('igniter-debug', function () {
                $('body').append('<a href="#" class="igniter-grid-toggle">' + Drupal.t('Show grid') + '</a>');
                $('.igniter-grid-toggle').click(function() {
                    $('body').toggleClass('igniter-grid-debug');
                    return false;
                });
            });
        }
    };
})(jQuery);

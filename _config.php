<?php

/**
 *@author: nicolaas [at] sunnysideup.co.nz
 **/


//copy the lines between the START AND END line to your /mysite/_config.php file and choose the right settings
//===================---------------- START superfish MODULE ----------------===================
//SuperFish::include_code(); // ADD to Page.init() function NOT mysite/_config.php
/*
SuperFish::set_config("
	$(document).ready(function() {
			$('ul.sf-menu').superfish({
					delay:       1000,                            // one second delay on mouseout
					animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
					speed:       'fast',                          // faster animation speed
					autoArrows:  false,                           // disable generation of arrow mark-up
					dropShadows: false                            // disable drop shadows
			});
	});
");
*/
//===================---------------- END slideshow MODULE ----------------===================


/*

    hoverClass:    'sfHover',          // the class applied to hovered list items
    pathClass:     'overideThisToUse', // the class you have applied to list items that lead to the current page
    pathLevels:    1,                  // the number of levels of submenus that remain open or are restored using pathClass
    delay:         800,                // the delay in milliseconds that the mouse can remain outside a submenu without it closing
    animation:     {opacity:'show'},   // an object equivalent to first parameter of jQuery’s .animate() method
    speed:         'normal',           // speed of the animation. Equivalent to second parameter of jQuery’s .animate() method
    autoArrows:    true,               // if true, arrow mark-up generated automatically = cleaner source code at expense of initialisation performance
    dropShadows:   true,               // completely disable drop shadows by setting this to false
    disableHI:     false,              // set to true to disable hoverIntent detection
    onInit:        function(){},       // callback function fires once Superfish is initialised – 'this' is the containing ul
    onBeforeShow:  function(){},       // callback function fires just before reveal animation begins – 'this' is the ul about to open
    onShow:        function(){},       // callback function fires once reveal animation completed – 'this' is the opened ul
    onHide:        function(){}        // callback function fires after a sub-menu has closed – 'this' is the ul that just closed
*/





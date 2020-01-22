/*!
 * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */
 
// Pre-Loader Starts
jQuery(window).load(function() {
	jQuery('.mask-color').delay(10).fadeOut('slow');
});
// Pre-Loader Ends

// Menu on Hover Starts
//jQuery(document).ready(function($) {
  //$('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
		//$(this).find(' > .dropdown-menu').stop(true, true).delay(200).slideDown(500);
		//$('.navbar-nav ul').addClass( 'animated slideInDown' ); // Add Animation
		//$('.navbar-nav ul').removeClass( 'hinge' ); // Remove Animation
	//}, function() {
		//$(this).find(' > .dropdown-menu').stop(true, true).delay(0).fadeOut();
		//$('.navbar-nav ul').addClass( 'hinge' ); // Add Animation
		//$('.navbar-nav ul').removeClass( 'fadeInUp' ); // Remove Animation
	//});
//});
// Menu on Hover Ends


	
jQuery(document).ready(function($) { //This line required for No Conflicting JS - Starts
								
	// Initialize WOW.js Scrolling Animations Starts
    new WOW().init();
	// Initialize WOW.js Scrolling Animations Ends
	
	// Smooth Scroll Starts
	$(".scroll").click(function(event){
		 event.preventDefault();
		 //calculate destination place
		 var dest=0;
		 if($(this.hash).offset().top > $(document).height()-$(window).height()){
			  dest=$(document).height()-$(window).height();
		 }else{
			  dest=$(this.hash).offset().top -100;
		 }
		 //go to destination
		 $('html,body').animate({scrollTop:dest}, 1000,'swing');
	 });
	// Smooth Scroll Ends
	
	
	
	// hide #back-top first
	$("#back-top").hide();
	// fade in #back-top
	$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});
	// fade in #back-top
	
	// Flip Cards Starts
    $('.flipControl').on('click', function(){
	$(this).closest('.card').toggleClass('flipped');
	});
	// Flip Cards Ends
	
	// Fit Text Plugin for Main Header
    $("#header-title").fitText(
        1.2, {
            minFontSize: '24px',
            maxFontSize: '55px'
        }
    );
	// Fit Text Plugin for Main Header
	
	
	
	
	//Show-Hide Button Starts
	$('.search-button').on('click', '.show-hide-button', function(e) {
	$('.show-hide-button').find('.fa').toggleClass('fa-search fa-times');
	  $('.show-hide-content').find('.search-box').toggleClass('show-search hide-search');
    });
	//Show-Hide Button Ends
	
	$('#toggle-view li').click(function () {

		var text = $(this).children('div.panel');

		if (text.is(':hidden')) {
			text.slideDown('200');
			$(this).children('span').html('-');		
		} else {
			text.slideUp('200');
			$(this).children('span').html('+');		
		}
		
	});
	
});//This line required for No Conflicting JS - Ends



// Hide Required Notification by browsers on search Starts
jQuery(document).ready(function($) {
	// Check if the search box not empty Starts
	$('#searchform').submit(function(e) { // run the submit function, pin an event to it
		var s = $( this ).find("#s").val($.trim($( this ).find("#s").val())); // find the #s2, which is the search input id and trim any spaces from the start and end
        var s = $( this ).find("#s"); // find the #s, which is the search input id
        if (!s.val()) { // if s has no value, proceed
            e.preventDefault(); // prevent the default submission
            $('#s').focus(); // focus on the search input
        }
    });
	// Check if the search box not empty Ends
	
	
});
// Hide Required Notification by browsers on search Ends






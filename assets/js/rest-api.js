// JavaScript Document
 /*jshint esversion: 6 */
// Pull events from Jewish Detroit Website for Home Page
(
function( $ ) {
	"use strict";

	var restTheme = '';
   	if ( undefined === restTheme ) {
		return;
   	}
	function ordinal( n ) {
   		var s = [ "th", "st", "nd", "rd" ],
       		v = n % 100;
   		return n + ( s[ (v-20) % 10 ] || s[ v ] || s[ 0 ] );
	}
	
   	var renderEvents = function( response ) {
	   if ( response.events.length > 0 ) {   
		   var elems = ''; 
		   	/* for ( var event of response.events ) {  -- This is code that works for all browsers, except IE11 */
			for (var i = 0; i < response.events.length; i++) { // This is code to make the feed work on all browsers, including IE11
					var event = response.events[i]; // This is code to make the feed work on all browsers, including IE11
					var eventDesc = event.excerpt; // We're Good
					var stripedDesc = eventDesc.replace(/<[^>]+>/g, '');
					var eventLink = event.url; // We're Good
					var eventTitle = event.title; // We're Good new Date("2017-03-25");
					var eventImage = event.image.url; // We're Good
					var eventHour = event.start_date_details.hour + ':' + event.start_date_details.minutes + ':' + event.start_date_details.seconds; // Almost Good, need to convert to month
						var H = +eventHour.substr(0, 2);
						var h = (H % 12) || 12;
						var ampm = H < 12 ? "AM" : "PM";
						eventHour = h + eventHour.substr(2, 3) + ampm;														
					const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
					const d = new Date(event.start_date_details.month + '/' + event.start_date_details.day + '/' + event.start_date_details.year);
					var eventMonth = monthNames[d.getMonth()];
					// var eventDay = event.start_date_details.day;
					var eventDate = ordinal(d.getDate());	
					var eventVenue = event.venue.venue;  
					var eventAddress = event.venue.address;
					var eventCity = event.venue.city;
					var eventState = event.venue.state;
					// var eventDate = new Date(event.start_date_details.month, event.start_date_details.month, event.start_date_details.month);
				
					elems +='<div class="cell small-12 medium-6 border-yellow small-order-2 medium-order-1"><h4 class="deep-purple">' + eventTitle + '</h4><p class="purple bold mb-0"> ' + eventMonth + ' ' + eventDate + '</p><p class="purple bold mb-0"> ' + eventHour + '</p><p class="purple">' + eventVenue + ', ' + eventAddress + ', ' + eventCity + ', ' + eventState + '</p><p class="purple">' + stripedDesc + '</p><a href="' + eventLink + '" class="button btn-purple">Register</a></div><div class="cell small-12 medium-6 small-order-1 medium-order-2"><img src="' + eventImage + '"></div>';
					$('#wn2t-events').html(elems);	
				console.log(event);
			}
		} else {
			var eventsNode = $( '' );
			var empty = '';
			empty +='<style>.hide-if-empty { display:none; }</style>';
					$('#wn2t-events').html(empty);	
			eventsNode.text( 'No upcoming events found.' );
		}
	};
	var showEvents = function() {
		var today = new Date();	
					var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
					var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
					var dateTime = date+' '+time;
		$.ajax( { 
			// get The Events Caleandar REST API root URL 
			url: 'https://jewishdetroit.org/wp-json/tribe/events/v1/events?tags=398', 
			method: 'GET', 
			/*// set the `X-WP-Nonce` header to the nonce value 
			beforeSend: function( xhr ) { 
				xhr.setRequestHeader( 'X-WP-Nonce', restTheme.nonce ); 
			},*/ 
			// set some request data 

			data: { 'page': 1, 'per_page': 1, 'start_date': dateTime} 
		} )
		// when done render the events list 
		.done( renderEvents ); 
	};  
	$( document ).ready( function() { showEvents(); } ); 
} 
	)( jQuery );

// Pull events from Jewish Detroit Website for Events Page
(
function( $ ) {
	"use strict";

	var restTheme = '';
   	if ( undefined === restTheme ) {
		return;
   	}
	function ordinal( n ) {
   		var s = [ "th", "st", "nd", "rd" ],
       		v = n % 100;
   		return n + ( s[ (v-20) % 10 ] || s[ v ] || s[ 0 ] );
	}
	
   	var renderEvents = function( response ) {
	   if ( response.events.length > 0 ) {   
		   var elems = ''; 
		   	/* for ( var event of response.events ) {  -- This is code that works for all browsers, except IE11 */
			for (var i = 0; i < response.events.length; i++) { // This is code to make the feed work on all browsers, including IE11
					var event = response.events[i]; // This is code to make the feed work on all browsers, including IE11
					var eventDesc = event.excerpt; // We're Good
					var stripedDesc = eventDesc.replace(/<[^>]+>/g, '');
					var eventLink = event.url; // We're Good
					var eventTitle = event.title; // We're Good new Date("2017-03-25");
					var eventImage = event.image.url; // We're Good
					var eventHour = event.start_date_details.hour + ':' + event.start_date_details.minutes + ':' + event.start_date_details.seconds; // Almost Good, need to convert to month
						var H = +eventHour.substr(0, 2);
						var h = (H % 12) || 12;
						var ampm = H < 12 ? "AM" : "PM";
						eventHour = h + eventHour.substr(2, 3) + ampm;														
					const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
					const d = new Date(event.start_date_details.month + '/' + event.start_date_details.day + '/' + event.start_date_details.year);
					var eventMonth = monthNames[d.getMonth()];
					// var eventDay = event.start_date_details.day;
					var eventDate = ordinal(d.getDate());	
					var eventVenue = event.venue.venue;  
					var eventAddress = event.venue.address;
					var eventCity = event.venue.city;
					var eventState = event.venue.state;
					// var eventDate = new Date(event.start_date_details.month, event.start_date_details.month, event.start_date_details.month);
				
					elems +='<div class="grid-x grid-padding-x grid-margin-x pb-2"><div class="cell small-12 medium-12 large-6 small-order-1 medium-order-1 large-order-2 center-v event-image"><img src="' + eventImage + '"></div><div class="cell small-12 medium-12 large-6 small-order-2 medium-order-2 large-order-1 center-v event-desc"><h2 class="deep-purple">' + eventTitle + '</h2><div class="border-purple pl-1"><p class="purple bold mb-0"> ' + eventMonth + ' ' + eventDate + '</p><p class="purple bold mb-0"> ' + eventHour + '</p><p class="purple">' + eventVenue + ', ' + eventAddress + ', ' + eventCity + ', ' + eventState + '</p><p class="purple">' + stripedDesc + '</p><a href="' + eventLink + '" class="button btn-purple">Register</a></div></div></div>';
					$('#wn2t-events-int').html(elems);	
				console.log(event);
			}
		} else {
			var eventsNode = $( '' );
			var empty = '';
			empty +='<div class="grid-x grid-padding-x grid-margin-x pb-2"><div class="cell small-12 medium-12 large-12 pt-1"><h2 class="purple">No upcoming events found!</h2></div></div>';
					$('#wn2t-events-int').html(empty);	
			eventsNode.text( 'No upcoming events found.' );
		}
	};
	var showEvents = function() {
		var today = new Date();	
					var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
					var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
					var dateTime = date+' '+time;
		$.ajax( { 
			// get The Events Caleandar REST API root URL 
			url: 'https://jewishdetroit.org/wp-json/tribe/events/v1/events?tags=398', 
			method: 'GET', 
			/*// set the `X-WP-Nonce` header to the nonce value 
			beforeSend: function( xhr ) { 
				xhr.setRequestHeader( 'X-WP-Nonce', restTheme.nonce ); 
			},*/ 
			// set some request data 

			data: { 'page': 1, 'per_page': 1, 'start_date': dateTime} 
		} )
		// when done render the events list 
		.done( renderEvents ); 
	};  
	$( document ).ready( function() { showEvents(); } ); 
} 
	)( jQuery );

// Pull events from Jewish Detroit Calendar for Events Page
(
function( $ ) {
	"use strict";

	var restTheme = '';
   	if ( undefined === restTheme ) {
		return;
   	}
	function ordinal( n ) {
   		var s = [ "th", "st", "nd", "rd" ],
       		v = n % 100;
   		return n + ( s[ (v-20) % 10 ] || s[ v ] || s[ 0 ] );
	}
	
   	var renderEvents = function( response ) {
	   if ( response.events.length > 0 ) {   
		   var elems = ''; 
		   	/* for ( var event of response.events ) {  -- This is code that works for all browsers, except IE11 */
			for (var i = 0; i < response.events.length; i++) { // This is code to make the feed work on all browsers, including IE11
					var event = response.events[i]; // This is code to make the feed work on all browsers, including IE11
					var eventDesc = event.description; // We're Good
					var length = 200;
					var stripedDesc = eventDesc.replace(/<[^>]+>/g, '');
					var trimmedDesc = stripedDesc.substring(0, length);
					var eventLink = event.website; // We're Good
					var eventTitle = event.title; // We're Good new Date("2017-03-25");
					var eventHour = event.start_date_details.hour + ':' + event.start_date_details.minutes + ':' + event.start_date_details.seconds; // Almost Good, need to convert to month
						var H = +eventHour.substr(0, 2);
						var h = (H % 12) || 12;
						var ampm = H < 12 ? "AM" : "PM";
						eventHour = h + eventHour.substr(2, 3) + ampm;														
					const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
					const d = new Date(event.start_date_details.month + '/' + event.start_date_details.day + '/' + event.start_date_details.year);
					var eventMonth = monthNames[d.getMonth()];
					// var eventDay = event.start_date_details.day;
					var eventDate = ordinal(d.getDate());	
					var eventVenue = event.venue.venue;  
					var eventAddress = event.venue.address;
					var eventCity = event.venue.city;
					var eventState = event.venue.state;
					// var eventDate = new Date(event.start_date_details.month, event.start_date_details.month, event.start_date_details.month);
				
					elems +='<div class="cell small-12 medium-6 large-4 pt-1"><h2 class="purple">' + eventTitle + '</h2><div class="border-purple pl-1"><p class="purple bold mb-0"> ' + eventMonth + ' ' + eventDate + '</p><p class="purple bold mb-0"> ' + eventHour + '</p><p class="purple">' + eventVenue + ', ' + eventAddress + ', ' + eventCity + ', ' + eventState + '</p><p class="purple">' + trimmedDesc + '...</p></div><a href="' + eventLink + '" class="button btn-purple" target="_blank">Register</a></div>';
					$('#wn2t-calevents-int').html(elems);	
				console.log(event);
			}
		} else {
			var eventsNode = $( '' );
			var empty = '';
			empty +='<div class="cell small-12 medium-12 large-12 pt-1"><h2 class="purple">No upcoming events found!</h2></div>';
					$('#wn2t-calevents-int').html(empty);	
			eventsNode.text( 'No upcoming community events found.' );
		}
	};
	var showEvents = function() {
		var today = new Date();	
					var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
					var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
					var dateTime = date+' '+time;
		$.ajax( { 
			// get The Events Caleandar REST API root URL 
			url: 'https://jewishdetroitcalendar.org/wp-json/tribe/events/v1/events?tags=449', 
			method: 'GET', 
			/*// set the `X-WP-Nonce` header to the nonce value 
			beforeSend: function( xhr ) { 
				xhr.setRequestHeader( 'X-WP-Nonce', restTheme.nonce ); 
			},*/ 
			// set some request data 

			data: { 'page': 1, 'per_page': 12, 'start_date': dateTime} 
		} )
		// when done render the events list 
		.done( renderEvents ); 
	};  
	$( document ).ready( function() { showEvents(); } ); 
} 
	)( jQuery );

// Pull events from Jewish Detroit Calendar for COVID Page
(
function( $ ) {
	"use strict";

	var restTheme = '';
   	if ( undefined === restTheme ) {
		return;
   	}
	function ordinal( n ) {
   		var s = [ "th", "st", "nd", "rd" ],
       		v = n % 100;
   		return n + ( s[ (v-20) % 10 ] || s[ v ] || s[ 0 ] );
	}
   	var renderEvents = function( response ) {
	   if ( response.events.length > 0 ) {   
		   var elems = ''; 
		   	/* for ( var event of response.events ) {  -- This is code that works for all browsers, except IE11 */
			for (var i = 0; i < response.events.length; i++) { // This is code to make the feed work on all browsers, including IE11
					var event = response.events[i]; // This is code to make the feed work on all browsers, including IE11
					var eventDesc = event.description; // We're Good
					var featImg = event.image.url; 
					var length = 200;
					var stripedDesc = eventDesc.replace(/<[^>]+>/g, '');
					var trimmedDesc = stripedDesc.substring(0, length);
					var eventLink = event.website; // We're Good
					var eventTitle = event.title; // We're Good new Date("2017-03-25");
					var eventHour = event.start_date_details.hour + ':' + event.start_date_details.minutes + ':' + event.start_date_details.seconds; // Almost Good, need to convert to month
						var H = +eventHour.substr(0, 2);
						var h = (H % 12) || 12;
						var ampm = H < 12 ? "AM" : "PM";
						eventHour = h + eventHour.substr(2, 3) + ampm;														
					const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
					const d = new Date(event.start_date_details.month + '/' + event.start_date_details.day + '/' + event.start_date_details.year);
					var eventMonth = monthNames[d.getMonth()];
					var eventDay = event.start_date_details.day;
					var eventDate = ordinal(d.getDate());	
					//var eventVenue = event.venue.venue;  
					//var eventAddress = event.venue.address;
					//var eventCity = event.venue.city;
					//var eventState = event.venue.state;
					var eventOrgName = event.custom_fields.organization_title ; // Almost Good
					// var eventDate = new Date(event.start_date_details.month, event.start_date_details.month, event.start_date_details.month);
				
					elems +='<article class="limit-900"><img src="' + featImg + '" class="image"><ul class="item"><li class="host">' + eventOrgName + '</li><li class="title source"><a rel="noreferrer noopener" href="' + eventLink + '" aria-label="' + eventTitle + ' (opens in a new tab)"  target="_blank">' + eventTitle + '</a></li><li class="event-date"> ' + eventMonth + ' ' + eventDate + '</li><li class="" style="max-width:500px;"><p>' + trimmedDesc + '</p></li></ul><ul class="tags">';
					var cat = event.categories;
					cat.forEach(function(cats) {
						var categ = cats.name;
					
					elems +='<li class="tag">' + categ + '</li>';
						})
					elems +='</li></ul></article>';
					$('.wn2t-covid').html(elems);	
				console.log(event);
			}
		} else {
			var empty = '';
			empty +='<div class="cell small-12 medium-12 large-12 pt-1 limit-900"><h3 class="purple">We are planning our next set of events. Please check back soon for updates.</h3><p>Please <a href="/signup/">click here to be added to our mailing list</a> to find out about upcoming events.</p></div>';
					$('.wn2t-covid').html(empty);	
			console.log(empty);
		}
	};
	var showEvents = function() {
		var today = new Date();	
					var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
					var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
					var dateTime = date+' '+time;
		$.ajax( { 
			// get The Events Caleandar REST API root URL 
			url: 'https://jewishdetroitcalendar.org/wp-json/tribe/events/v1/events?tags=449', 
			method: 'GET', 
			/*// set the `X-WP-Nonce` header to the nonce value 
			beforeSend: function( xhr ) { 
				xhr.setRequestHeader( 'X-WP-Nonce', restTheme.nonce ); 
			},*/ 
			// set some request data 

			data: { 'page': 1, 'per_page': 4, 'start_date': dateTime} 
		} )
		// when done render the events list 
		.done( renderEvents ); 
	};  
	$( document ).ready( function() { showEvents(); } ); 
} 
	)( jQuery );

// Pull past events from Jewish Detroit Calendar for COVID Page
(
function( $ ) {
	"use strict";

	var restTheme = '';
   	if ( undefined === restTheme ) {
		return;
   	}
	function ordinal( n ) {
   		var s = [ "th", "st", "nd", "rd" ],
       		v = n % 100;
   		return n + ( s[ (v-20) % 10 ] || s[ v ] || s[ 0 ] );
	}
   	var renderEvents = function( response ) {
	   if ( response.events.length > 0 ) {   
		   var elems = ''; 
		   	/* for ( var event of response.events ) {  -- This is code that works for all browsers, except IE11 */
			for (var i = 0; i < response.events.length; i++) { // This is code to make the feed work on all browsers, including IE11
					var event = response.events[i]; // This is code to make the feed work on all browsers, including IE11
					var eventDesc = event.description; // We're Good
					var featImg = event.image.url; 
					var length = 200;
					var stripedDesc = eventDesc.replace(/<[^>]+>/g, '');
					var trimmedDesc = stripedDesc.substring(0, length);
					var eventLink = event.website; // We're Good
					var eventTitle = event.title; // We're Good new Date("2017-03-25");
					var eventHour = event.start_date_details.hour + ':' + event.start_date_details.minutes + ':' + event.start_date_details.seconds; // Almost Good, need to convert to month
						var H = +eventHour.substr(0, 2);
						var h = (H % 12) || 12;
						var ampm = H < 12 ? "AM" : "PM";
						eventHour = h + eventHour.substr(2, 3) + ampm;														
					const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
					const d = new Date(event.start_date_details.month + '/' + event.start_date_details.day + '/' + event.start_date_details.year);
					var eventMonth = monthNames[d.getMonth()];
					var eventDay = event.start_date_details.day;
					var eventDate = ordinal(d.getDate());	
					//var eventVenue = event.venue.venue;  
					//var eventAddress = event.venue.address;
					//var eventCity = event.venue.city;
					//var eventState = event.venue.state;
					var eventOrgName = event.custom_fields.organization_title ; // Almost Good
					var eventVideoURL = event.custom_fields.video_url ; // Almost Good
					// var eventDate = new Date(event.start_date_details.month, event.start_date_details.month, event.start_date_details.month);
					if (eventVideoURL == '') {  // Hide div if no video
					elems +='<div style="display:none;">';
					}
					elems +='<article class="limit-900"><img src="' + featImg + '" class="image"><ul class="item"><li class="host">' + eventOrgName + '</li><li class="title "><a rel="noreferrer noopener" href="' + eventLink + '" aria-label="' + eventTitle + ' (opens in a new tab)"  target="_blank">' + eventTitle + '</a></li>';
					if (eventVideoURL !== '') {
						elems +='<li class="event-date"><a data-fancybox href="' + eventVideoURL + '" class="fancybox-vimeo"><strong>View Replay of Event</strong></a></li>';
					} else {
						elems +='<li class="event-date"> ' + eventMonth + ' ' + eventDate + '</li>';
					}
					elems +='<li class="" style="max-width:500px;"><p>' + trimmedDesc + '</p></li></ul><ul class="tags">';
					var cat = event.categories;
					cat.forEach(function(cats) {
						var categ = cats.name;
					
					elems +='<li class="tag">' + categ + '</li>';
						})
					elems +='</li></ul></article>';
					if (eventVideoURL == '') {  // Hide div if no video
					elems +='</div>';
					}
					$('.wn2t-past').html(elems);	
				console.log(event);
			}
		} else {
			var eventsNode = $( '' );
			var empty = '';
			empty +='<div class="cell small-12 medium-12 large-12 pt-1"><h2 class="purple">No past events found!</h2></div>';
					$('.wn2t-past').html(empty);	
			eventsNode.text( 'No past events found.' );
		}
	};
	var showEvents = function() {
		var today = new Date();	
					var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
					var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
					var dateTime = date+' '+time;
		$.ajax( { 
			// get The Events Caleandar REST API root URL 
			url: 'https://jewishdetroitcalendar.org/wp-json/tribe/events/v1/events?tags=449', 
			method: 'GET', 
			/*// set the `X-WP-Nonce` header to the nonce value 
			beforeSend: function( xhr ) { 
				xhr.setRequestHeader( 'X-WP-Nonce', restTheme.nonce ); 
			},*/ 
			// set some request data 

			data: { 'page': 1, 'per_page': 10, 'start_date': '2020-04-01', 'end_date': dateTime, 'orderby': 'id', 'order': 'DESC' }  
		} )
		// when done render the events list 
		.done( renderEvents ); 
	};  
	$( document ).ready( function() { showEvents(); } ); 
} 
	)( jQuery );
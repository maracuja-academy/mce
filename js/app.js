var app = {
	menuOpened: false,
	scrollItems : [],
	topMenuHeight : 0,
	lastId : false,
	menuItems : [],
	landing : function(){
		
	

		jQuery('a[href^="#"]').on('click', function(e) {
		    e.preventDefault();

		    const scrollTop =
		        jQuery(jQuery(this).attr('href')).position().top - 20;// - $navbar.outerHeight();

		    jQuery('html, body').animate({ scrollTop });
		})

		app.menuItems = jQuery("#menu nav a");
		app.scrollItems = app.menuItems.map(function(){
			var item = jQuery(jQuery(this).attr("href"));
			if (item.length) { return item; }
		});

		//app.clubSelector()
	
		window.onscroll = function() {

			var limit = jQuery("#logo").height()
			if(window.pageYOffset > limit){
				jQuery("body").addClass("fixed");
			}else if(window.pageYOffset < limit){
				jQuery("body").removeClass("fixed");
			}

			var fromTop = jQuery(this).scrollTop()+app.topMenuHeight;
			// Get id of current scroll item
			var cur = app.scrollItems.map(function(){
			 if (jQuery(this).offset().top < fromTop)
			   return this;
			});

			// Get the id of the current element
			cur = cur[cur.length-1];
			var id = cur && cur.length ? cur[0].id : "";

			if (app.lastId !== id) {
			   app.lastId = id;
			   // Set/remove active class
			   app.menuItems.removeClass("active");
			   app.menuItems.filter("[href='#"+id+"']").addClass("active");
			} 

		};
	},
//https://github.com/devbridge/jQuery-Autocomplete
	// clubSelector : function() {
	// 	var clubs = [ 
	// 	  {value: "Afghanistan", data: "AF"}, 
	// 	  {value: "Aland Islands", data: "AX"}, 
	// 	  {value: "Albania", data: "AL"}, 
	// 	  {value: "Algeria", data: "DZ"}, 
	// 	  {value: "American Samoa", data: "AS"}
	// 	]

	// 	jQuery('#autocomplete').autocomplete({
	// 	    lookup: clubs,
	// 	    onSelect: function (suggestion) {
	// 	    	console.log(jQuery("input#nf-field-22").val())
	// 	    	jQuery("#nf-field-22").val(suggestion.data);
	// 	        console.log(suggestion.data);
	// 	        console.log(jQuery("input#nf-field-22").val())
	// 	    }
	// 	});
	// 	// setTimeout(function() {
	// 	// 	jQuery("#nf-field-22").val("hey");
	// 	// 			console.log(jQuery("input#nf-field-22").val())

	// 	// }, 2000);
	// },

	menuToggle: function(){
		if(app.menuOpened){
			jQuery("#menu").removeClass("menu-opened");
			app.menuOpened = false;
		}else{
			jQuery("#menu").addClass("menu-opened");
			app.menuOpened = true
		}
	}

}


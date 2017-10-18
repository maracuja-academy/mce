var app = {
	menuOpened: false,
    isScrolling: false,
	scrollItems : [],
	topMenuHeight : 0,
	lastId : false,
	menuItems : [],
	landing : function(){
		
	
        app.menuItems = jQuery("#menu nav a");

		jQuery('a[href^="#"]').on('click', function(e) {
		    e.preventDefault();

            app.isScrolling = true
            app.menuItems.removeClass("active");
            jQuery(this).addClass("active");
		    const scrollTop = jQuery(jQuery(this).attr('href')).position().top - 20;// - $navbar.outerHeight();

		    jQuery('html, body').animate({ scrollTop }, function(){
                app.isScrolling = false
            });
		})

		app.scrollItems = app.menuItems.map(function(){
			if(jQuery(this).attr("href").startsWith("#")){
				var item = jQuery(jQuery(this).attr("href"));
				if (item.length) { return item; }				
			}

		});
	   
		window.onscroll = function() {

			app.updateMenu()

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
         
                if(!app.isScrolling){
                    console.log("remove")
                    app.menuItems.removeClass("active");
                    app.menuItems.filter("[href='#"+id+"']").addClass("active");
                }
			} 

		};

        app.updateMenu()
	},

    updateMenu : function() {
        var limit = jQuery("#logo").height()
        if(window.pageYOffset > limit){
            jQuery("body").addClass("fixed");
        }else if(window.pageYOffset < limit){
            jQuery("body").removeClass("fixed");
        }
    },

    
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


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
            app.menuItems.removeClass("active");
            jQuery(this).addClass("active");
		    app.scrollToId(jQuery(this).attr('href'))
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
                    app.menuItems.removeClass("active");
                    app.menuItems.filter("[href='#"+id+"']").addClass("active");
                }
			} 

		};

        app.updateMenu()
	},

    scrollToId : function(targetId) {
        var targetElem = jQuery(targetId)
        if(targetElem && !app.isScrolling){
            app.isScrolling = true
            const scrollTop = targetElem.position().top - 20;
            jQuery('html, body').animate({ scrollTop }, function(){
                app.isScrolling = false
            });            
        }

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
	},

    chooseLevel : function(){
        var formOtherLevels = jQuery(".form-other-levels")
        var commandButton = jQuery("#add-to-cart")
        jQuery(".single_variation_wrap").change(function(){
            if(jQuery(".stock.out-of-stock").html() == "Rupture de stock"){
                formOtherLevels.slideDown()
                commandButton.hide()
            }else{
                formOtherLevels.hide()
                commandButton.show()
            }
        }); 

        // 
        // jQuery('#level-radio input[type=radio]').on('change',function(){
        //     if(jQuery(this).val() =="cycle-other"){
        //         formOtherLevels.slideDown()
        //         commandButton.hide()
        //     }else{
        //         formOtherLevels.hide()
        //         commandButton.show()
        //     }
            
        // });
        
    },

    command : function(){
        var giftCardDiv = jQuery("#gift-card-command")
        jQuery("#gift-card-checkbox").on('click', function(){
            if ( jQuery(this).is(':checked') )
                giftCardDiv.slideDown();
            else
                giftCardDiv.hide();
        });
    }


}

jQuery(document).ready(function(){
    setTimeout(function(){
        var hashInUrl = window.location.hash
        if (hashInUrl) {
            app.scrollToId(hashInUrl)
        }
    }, 2000)

})


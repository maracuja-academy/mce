var book = {
	menuOpened: false,
	scrollItems : [],
	topMenuHeight : 0,
	lastId : false,
	menuItems : [],
	init : function(){
		jQuery('a[href^="#"]').on('click', function(e) {
		    e.preventDefault();

		    const scrollTop =
		        jQuery(jQuery(this).attr('href')).position().top - 20;// - $navbar.outerHeight();

		    jQuery('html, body').animate({ scrollTop });
		})

		book.menuItems = jQuery("#menu nav a");
		book.scrollItems = book.menuItems.map(function(){
			var item = jQuery(jQuery(this).attr("href"));
			if (item.length) { return item; }
		});
		window.onscroll = function() {
			var limit = jQuery(".book-logo").height() + 15
			if(window.pageYOffset > limit){
				jQuery("#book").addClass("fixed");
			}else if(window.pageYOffset < limit){
				jQuery("#book").removeClass("fixed");
			}

			var fromTop = jQuery(this).scrollTop()+book.topMenuHeight;
			// Get id of current scroll item
			var cur = book.scrollItems.map(function(){
			 if (jQuery(this).offset().top < fromTop)
			   return this;
			});

			// Get the id of the current element
			cur = cur[cur.length-1];
			var id = cur && cur.length ? cur[0].id : "";

			if (book.lastId !== id) {
			   book.lastId = id;
			   // Set/remove active class
			   book.menuItems.removeClass("active");
			   book.menuItems.filter("[href='#"+id+"']").addClass("active");
			} 

		};
	},

	menuToggle: function(){
		if(book.menuOpened){
			jQuery("#book").removeClass("menu-opened");
			book.menuOpened = false;
		}else{
			jQuery("#book").addClass("menu-opened");
			book.menuOpened = true
		}
	}
}
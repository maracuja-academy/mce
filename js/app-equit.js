var app = {
    isScrolling: false,
	topMenuHeight : 0,
	landing : function(){        


		jQuery('a[href^="#"]').on('click', function(e) {
		    e.preventDefault();
                    console.log("yoo",jQuery(this).attr('href'))
// console.log("test)")
		   // app.scrollToId(jQuery(this).attr('href'))
		})

	   
		
	},

    scrollToId : function(targetId) {
        var targetElem = jQuery(targetId)
        if(targetElem && !app.isScrolling){
            app.isScrolling = true
            
            const scrollTop = 20;
            jQuery('html, body').animate({ scrollTop }, function(){
                app.isScrolling = false
            });            
        }

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


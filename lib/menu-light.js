

		$(function(){
			$(".submenu").hide().parent().on('mouseenter', function() {
				$this = $(this);
				if ( ! $this.hasClass("hover")) {
					$this.addClass("hover").children(".submenu").stop().slideToggle(500, "easeOutBack");						
				}
			}).on('mouseleave', function() { 
				$this = $(this);
				if ( $this.hasClass("hover")) {
					$this.removeClass("hover").children(".submenu").fadeOut(400);					
				}
			});
		});  
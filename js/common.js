$(document).ready(function() {


	$(".slider-news").owlCarousel({
		responsive:{
			0:{
				items:1,
				dots:false
			},
		600:{
				items:1,
				nav:true
				},
					1200:{
								items:1,
								nav:true
				}

		},
		navText : ""
	});



			$(".rooms-img").owlCarousel({
		responsive:{
			0:{
				items:1,
				nav:true
			}

		},
		navText : ""
	});

			$(".services-img").owlCarousel({
		responsive:{
			0:{
				items:1,
				nav:true
			}

		},
		navText : ""
	});

	$(".carousel").owlCarousel({
		responsive:{
			0:{
				items:1,
			},
		600:{
				items:2,
				nav:true
				},
					1200:{
								items:2,
								nav:true
				}

		},
		navText : ""
	});

	$(".apartments-slaider").owlCarousel({
		 loop:true,
                margin:10,
                responsive:{
                    0:{
                        items:1,

                    },
                    600:{
                        items:2,
                        nav:true
                    },
                    1200:{
                        items:3,
                        nav:true
                    }
                },
                navText : ""
              });


  var owl = $(".chapel-slaider ");
 
  owl.owlCarousel({
     
 loop:true,
                margin:10,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2,
                        nav:true
                    },
                    1200:{
                        items:3,
                        nav:true

                    }
                },
                navText : ""
            });




$(".popap_c").magnificPopup();

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});

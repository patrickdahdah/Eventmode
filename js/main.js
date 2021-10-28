$(window).load(function(){
    var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function() {
		hamburger.classList.toggle("is-active");
	});

	$('.header-dropdown-btn').click(function(){
		var clicks = $(this).data('clicks')
		if (clicks) {
			$('.dropdown-menu-header ').removeClass("r_0");
			$('.dropdown-menu-header ').addClass("r_n1000");
			$('html').removeClass("overflow_y_none");
		}
		else {
			$('.dropdown-menu-header ').removeClass("r_n1000");
			$('.dropdown-menu-header ').addClass("r_0");
			$('html').addClass("overflow_y_none");
		}
		$(this).data("clicks", !clicks);
	});
    $(document).on('input', '.slider', function() {
        $this = $(this);
        var range_val_tickets_sold = $('.slider-value-tickets-sold').html();
        var range_val_price = $('.slider-value-price').html();
        $('.ticket-price').html('$' + range_val_price);
        var customer_fee = ((range_val_price * 0.06) + 0.99).toFixed(2);
        $('.customer-fee').html('$' + (customer_fee));
        var organizer_earnings = ((customer_fee - 0.99) / 2).toFixed(2);
        $('.organizer-earnings').html('$' + (parseFloat(range_val_price).toFixed(2)) + ' + ' + (organizer_earnings));
        var total_fee = (parseFloat(range_val_price) + parseFloat(organizer_earnings)).toFixed(2);
        $('.total-fee').html('$' + (total_fee));
        var total_earnings = (parseFloat(range_val_tickets_sold) * parseFloat(total_fee)).toFixed(2);
        if(total_earnings >= 1000) {
            var total_earnings_final = total_earnings.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            $('.total-earnings').html('$' + (total_earnings_final));
        }
        else {
            $('.total-earnings').html('$' + (total_earnings));
        }
    });
    const allRanges = document.querySelectorAll(".range-wrap");
    allRanges.forEach(wrap => {
        const range = wrap.querySelector(".slider");
        const bubble = wrap.querySelector(".slider-value");

        range.addEventListener("input", () => {
            setBubble(range, bubble);
        });
        setBubble(range, bubble);
    });

    function setBubble(range, bubble) {
        const val = range.value;
        const min = range.min ? range.min : 0;
        const max = range.max ? range.max : 100;
        const newVal = Number(((val - min) * 100) / (max - min));
        bubble.innerHTML = val;
        bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px) )`;
    }
    $(window).scroll(function(){
        if($(this).scrollTop() == 0) {
            $('.header-slide-img').removeClass('hide');
       }
       else {
            $('.header-slide-img').addClass('hide');
       }
    });
});

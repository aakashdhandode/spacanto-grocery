$(function() {
    $(".quntity").on("click", function() {
      var $quntity = $(this);
      var $parent = $quntity.parent(); 
      var oldValue = $parent.find('.input').val();
   
      if ($quntity.text() == "+") {
         var newVal = parseFloat(oldValue) + 1;
       } else {
          // Don't allow decrementing below zero
         if (oldValue > 1) {
           var newVal = parseFloat(oldValue) - 1;
           } else {
           newVal = 1;
         }
         }
       $parent.find('a.add-to-cart').attr('data-quantity', newVal);
       $parent.find('.input').val(newVal);
    });
   });


   $(document).ready(function () {
    $('.home-client-slick').slick({
        dots: false,
        infinite: true,
        autoplay: false,
        lazyLoad: 'ondemand',
        arrows: true,
        speed: 1500,
        centerMode: false,
        slidesToShow: 4,
        adaptiveHeight: true,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll:4,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    })
});
$(document).ready(function(){
    $(".menu-toggle a").click(function(){ 
        $(".menu").slideToggle(1000);
    });
});


var slider = tns({
    container: '.slider-container',
    items: 1,
    navPosition: "bottom",
    controlsText:['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    items: 1,
    slideBy: 'page',
    autoplay: true,
    navAsThumbnails: 'true',
    responsive: {
        640: {
        edgePadding: 20,
        gutter: 20,
      },
        700: {
        gutter: 30,
      },
        900: {
        items: 2,
      }
    }
  });

$(document).ready(function () {
        var small={width: "354px",height: "458px"};
        var large={width: "600px",height: "800px"};
        var count=1; 
        $("#imgtab").css(small).on('click',function () { 
            $(this).animate((count==1)?large:small);
            count = 1-count;
        });
    });


$(document).ready(function() {	
$('.click').on('click', function()      
        { 
            switch($(this).attr('id'))
            {    case 'one':
                $("html, body").animate({scrollTop: $("#aboutus").offset().top }, 1500);  
                break;
            case 'two':
                 $("html, body").animate({scrollTop: $("#marsrutai").offset().top }, 1500);  
                break;
            case 'three':
                 $("html, body").animate({scrollTop: $("#kainos").offset().top }, 1500);  
                break;
            case 'four':
                 $("html, body").animate({scrollTop: $("#gallery").offset().top }, 1500);  
                break;
            case 'five':
                 $("html, body").animate({scrollTop: $("#kontaktai").offset().top }, 1500);  
                break;
                $("html, body").animate({scrollTop: $("#kontaktai").offset().top }, 1500);  
                break;
            }      
        });
});

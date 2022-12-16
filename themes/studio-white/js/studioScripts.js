/* 
 ****** David Wetherell *********
 ****** The Creative Story ******
 */

  $(window).load(function(){

   
    $("body").css("display", "none");
    $("body").fadeIn(1000);
   // $('body').css('background', 'url(themes/default/images/background-2.png)');
   // $(".spinner").show();
  //  $(".spinner").animate({ "top": "+=1500px" }, 900).delay(200);
   // $(".spinner").fadeOut("slow");
});

// On page ready 
 $(document).ready(function() {
   
 
     $("input").attr("autocomplete", "off"); 
     
     
// Home Page Slider 
    $("#studioMuse").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
    });
//Navigation Menu Slider
    $('#nav-expander').on('click',function(e){
          e.preventDefault();
             $('body').toggleClass('nav-expanded');
             $("#studio2LogoMobile").css("display", "none").fadeOut(300);
         });
    $('#nav-close').on('click',function(e){
            e.preventDefault();
                $('body').removeClass('nav-expanded'); 
                $("#studio2LogoMobile").css("display", "block").fadeIn(1200);
       });
        
// Initialize navgoco with default options
     $(".main-menu").navgoco({
         caret: '<span class="caret"></span>',
         accordion: false,
         openClass: 'open',
         save: true,
         cookie: {
             name: 'navgoco',
             expires: false,
             path: '/'
         },
         slide: {
             duration: 300,
             easing: 'swing'
         }
     });
     
  

     


 
});    //  < = On page ready 

 

   

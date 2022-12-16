$('html').addClass('js');

$(function() {

    $('#wrapper').css({'display':'block'}); // hide FOUC

    $(window).load(function () {

        hideOverlayLoader();

    });

    function hideOverlayLoader()
    {
        $("#preloader").delay(500).fadeOut(500);
        $("#overlay").delay(1000).animate({ height: "1px"}, { duration:600, easing: 'easeInOutExpo', complete: showNav});
    }

    function showNav()
    {
        $("#overlay").css({'display':'none'});
        positionNav();
        $('#navSection').animate({'top':'0px'}, { duration:600, easing: 'easeOutBack'});
    }


    // set up Bootstrap Scrollspy
    $('#navSection .nav').scrollspy();

    // set up the scrollto animation
    $('ul.nav li a').bind('click', function(e) {
        e.preventDefault();
        target = this.hash;
        $.scrollTo(target, 500, {easing:'easeOutExpo', offset: {top: 0}});
    });

    $('#studioLogo').html('<a href="#home"><img src="assets/images/studio_logo.png" id="logo" /></a>')
    $('#studioLogo a').css({'padding':'0px'});
    $('#studioLogo a').bind('click', function(e) {
        e.preventDefault();
        target = this.hash;
        $.scrollTo(0, 500, {easing:'easeOutExpo'});
    });

    $planeHit = $('#planeHit');
    $plane = $('#plane');
    $planeHit.hover(movePlane, returnPlane);

    function movePlane()
    {
        console.log('move plane');
        $plane.stop().animate({'margin-left':'40px'}, { duration:400, easing: 'easeOutExpo'});
    }

    function returnPlane()
    {
        $plane.stop().animate({'margin-left':'0px'}, { duration:400, easing: 'easeOutExpo'});
    }


    var $window = $(window);
    var windowHeight;
    var windowWidth;
    var $home = $('#home');
    var $homeHeight = $home.height();
    var $slideone = $('#slideone');
    var slideonePos = $slideone.position().top;
    var $slidethree = $('#slidethree');

    var $body = $('body');
    var $slidetwo = $('#slidetwo ');
    var benefitPos;


    // check to see when these elements are in view in the viewport.
    $slideone.bind('inview', function (event, visible) {
        if (visible) {
            $(this).addClass("inview");
        } else {
            $(this).removeClass("inview");
        }
    });
    $slidetwo.bind('inview', function (event, visible) {
        if (visible) {
            $(this).addClass("inview");
        } else {
            $(this).removeClass("inview");
        }
    });
    $slidethree.bind('inview', function (event, visible) {
        if (visible) {
            $(this).addClass("inview");
        } else {
            $(this).removeClass("inview");
        }
    });

    function resetDimensions()
    {
        windowHeight = $window.height(); //get the height of the window
        windowWidth = $window.width();
    }

    //function to be called whenever the window is scrolled or resized
    function Move(){

        var pos = $window.scrollTop(); //position of the scrollbar

        // if breakfast comparison is in view
        if($slidethree.hasClass("inview")){

        }
        // if Slide Two is in view
        if($slidetwo.hasClass("inview")){

            var bgPos = -(($slidetwo.position().top - pos)/windowHeight)*250 - 0;
            if (bgPos < 0)
            {
                $slidetwo.css({'background-position': 'center ' + (bgPos+0) + 'px'});
            }
            else
            {
                $slidetwo.css({'background-position': 'center 0px'});
            }
            console.log(bgPos)
        }
    }

    $window.resize(function(){
        Move();
        resetDimensions();
        positionNav();
    });

    $window.bind('scroll', function(){
        Move();
    });

    resetDimensions();
    Move();

    // bxslider init for Top 10 Reasons
    var sliderReasons = $('#slider-reasons').bxSlider({
        displaySlideQty: 3,
        moveSlideQty: 3,
        easing: 'easeOutBack',
        speed: 600
    });

    // bxslider init for breakfast comparison
    var sliderComparison = $('#slider-comparison').bxSlider({
        easing: 'easeInOutExpo',
        speed: 600,
        mode: 'vertical',
        onAfterSlide: updateDials
    });


    // init keyboard control for the sliders
    $window.keyup(function (e) {
        if (e.keyCode == 40) {
            sliderComparison.goToNextSlide();
        }
        else if (e.keyCode == 38) {
            sliderComparison.goToPreviousSlide();
        }
    });

    $window.keyup(function (e) {
        if (e.keyCode == 39) {
            sliderReasons.goToNextSlide();
        }
        else if (e.keyCode == 37) {
            sliderReasons.goToPreviousSlide();
        }
    });


    // rotate the dials on each slider animation complete
    function updateDials(currentSlideNumber, totalSlideQty, currentSlideHtmlObject){

        var angles3 = [66, /* -10, */ -6, 89, 34];
        var angles4 = [-27, /* 53, */ -39, -1, 63];

        var angle1 = -32;
        var angle2 = -35;
        var angle3 = angles3[currentSlideNumber];
        var angle4 = angles4[currentSlideNumber];

        $("#dial1").rotate({
            //animateTo:angle1
            angle:angle1
        });
        $("#dial2").rotate({
            //animateTo:angle2
            angle:angle2
        });
        $("#dial3").rotate({
            animateTo:angle3
        });
        $("#dial4").rotate({
            animateTo:angle4
        });

    }

    try {
        Typekit.load({
            loading: function() {
                // Javascript to execute when fonts start loading
            },
            active: function() {
                // Javascript to execute when fonts become active
                $('#mainNav li a').css({'font-size':'20px'});
                positionNav();
            },
            inactive: function() {
                // Javascript to execute when fonts become inactive

            }
        })
    } catch(e) {/* console.log('fonts not loaded') */}


    function positionNav()
    {
        // reposition the main nav to have the logo dead in the center.
        var leftShift = Math.round(390- $('#logo').position().left);
        $('#mainNav').css({'left':leftShift});


    }



    $('#tellUs').hover(tellUsOver, tellUsOut);


    function tellUsOver()
    {
        $('span', $(this)).stop().animate({'top':'30px'}, {duration:800, easing: 'easeOutElastic'});
    }

    function tellUsOut()
    {
        $('span', $(this)).stop().animate({'top':'50px'}, {duration:800, easing: 'easeOutElastic'});
    }


    /*
     var SCREEN_WIDTH = 600;
     var SCREEN_HEIGHT = 600;
     var DAMP = 0.98;
     var paper = Raphael(document.getElementById("homeWrapper"), 600, 600);



     var circle = (function(url) {
     var x = SCREEN_WIDTH / 2,
     y = SCREEN_HEIGHT / 2,
     vx = Math.random() - 0.5,
     vy = Math.random() - 0.5,
     dot;

     return {
     start: function() {
     var scale = ran(0.9, 1.0);
     dot = paper.image(url, x, y, 29, 23).attr({
     //opacity: scale
     });
     dot.scale(scale);
     },
     update: function() {
     vx += Math.random() * 0.5 - 0.25;
     vy += Math.random() * 0.5 - 0.25;

     var newx = x + vx;
     var newy = y + vy;
     var a = newx - x;
     var o = newy - y;
     var rotated = Math.atan(o / a);

     x += vx;
     y += vy;

     vx *= DAMP;
     vy *= DAMP;

     //check bounds invert direction
     vx = x < 50 ? vx * -1 : x > 415 ? vx * -1 : vx;
     vy = y < 50 ? vy * -1 : y > 415 ? vy * -1 : vy;
     x = x < 0 ? SCREEN_WIDTH : x > SCREEN_WIDTH ? 0 : x;
     y = y < 0 ? SCREEN_HEIGHT : y > SCREEN_HEIGHT ? 0 : y;

     dot.attr({
     x: x,
     y: y
     });
     }
     };
     });


     var dots = [],
     i = 2;

     while (i--) {

     var url = "assets/images/bee.png";

     if(i%2 == 0)
     {
     url = "assets/images/butterfly.png";
     }

     dots[i] = new circle(url);
     dots[i].start();
     }
     setInterval(function() {
     var l = dots.length;
     while (l--) {
     dots[l].update();
     }
     }, 800 / 60);



     */









});

/*
 var ran = function(min, max) {
 return ((Math.random() * (max - min)) + min).toFixed(2);
 };
 var degrees = function(radians) {
 return radians * (180 / Math.PI)
 };
 */
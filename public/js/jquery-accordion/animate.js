// animate by Kevin McCoy 2015
$(document).ready(function() {

  //Minimize all section skiping the first one for each div.accordion
  $('div.accordion').each(function(){
      $(this).find('section').filter(':gt(0)').addClass('hide');
    }
  )

  //Animate accordion each time diffrent header get clicked
  $('article').on('click', 'header', function() {
    $(this).next().slideDown(200).prev().parent().siblings().find('section').slideUp(200);
  })

});




$(function(){
  "use strict";
  //logic programming

  // HTML Selectors
  var wd = $(window);

  var
    main_nav = $('nav'),
    menuButton = $('#hambuger'),
    // menuColor = menuButton.css("background-color");

  // Function Handelers
  var clickHandler = ('ontouchstart' in window ? 'touchend' : 'click');

  // Fix for moblie device to remove hover when touched
  // $('a.facebook i').on(clickHandler,function(){ $(this).removeClass('no-touch');});
  // $('a.twitter i').on(clickHandler,function(){ $(this).removeClass('no-touch');});

  // Functions Starts Here
              // menuButton.click(function () { // Dose not Work for mobile
              // menuButton.on('mousedown touchstart',function(){ // Nope
  menuButton.on(clickHandler,function(event){
    //console.log('clicked');
    event.preventDefault();
    if ($(this).data('name') === 'showing') {
      hide_mobile_nav ();
    } else {
      menuButton.addClass('no-touch');
      show_mobile_nav ();
    }
    return false;
  });


  /*	Show the Mobile Navigation */
  function show_mobile_nav (){
    /* Show the Menu when menu button clicked */
    main_nav.css('display', 'block');


    main_nav.css("height", "100%");
    var h = main_nav.height();
    main_nav.css("height", "0px");

    /* Animate */
    main_nav.animate({
      height: h
    });

    menuButton.animate({backgroundColor: 'rgba(255,255,255,0)'}, 'slow');

    menuButton.addClass('active');
    menuButton.data('name', 'showing');
  }


  /*	Hide the Mobile Navigation */
  function hide_mobile_nav (){
    /*  Active the Hamburger button */
    menuButton.removeClass('active');

    /* Hide the Menu when menu button clicked */
    main_nav.animate({
      height: '0px'},
        function(){
          main_nav.removeAttr( 'style' );
          menuButton.removeClass('no-touch');
        }
      );

      menuButton.animate({backgroundColor: menuColor}, 'slow');

      menuButton.removeClass('active');
      menuButton.data('name', 'hiding');
  }

  /* add active when nav item is clicked */
  main_nav.find('li a').on(clickHandler,function(){
    main_nav.find('li a').addClass('disHover');
    $(this).removeClass('disHover');
    $(this).addClass('active');
  });


  // Reset inplace check
  // For Desktop if someone change the width of their browser width from mobile to desktop
  wd.resize(function() {
    var wdW = wd,
      wdReset = false;

    //console.log('wdW: '+wdW);
    wdW = wd.width();
    if(wdW > 900 && wdReset === false){ // User switch from mobile to desktop by resizing
      //console.log('width reset');
      wdReset = true;
      main_nav_holder_reset();
    }else if(wdW < 991 && wdReset === true){
      wdReset = false;
    }
  });

  var main_nav_holder_reset = function(){
    menuButton.css('background-color', menuColor);
    main_nav.css('height', '');
    menuButton.removeClass('active');
    menuButton.data('name', 'hide');
    //console.log('Quick Hiding Finished');
  };


});

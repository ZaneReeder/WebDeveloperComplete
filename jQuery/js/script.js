// script.js


$(function() {
    //jQuery Methods
    
   // $(selector).action(); //base syntax
    
    //$('box').hide(); //hides element
    
    //$('.thing').fadeIn();
    
    //$('h1').css('"color","blue"'); //CSS
    
    /*
    $("button").click(function() {
        $('#box').fadeOut(1000);
    
    });
    */
    
    
    /*** Selectors ***/
    
    // $('h2,h3,h4').css('border', 'solid 1px red');
    
    // $('div#container').css('border', 'solid 1px red');
    
    // $('p.lead').css('border', 'solid 1px red');
    
    // $(li:first).css('border','solid 1px red');
    
    // $('p:even').css('border','solid 1px red');
    
    // $('div em').css('border','solid 1px red');
    
    //only child not descendants
    // $('div > p').css('border','solid 1px red');
    
    //all headers jQuery
    // $(:header').css('border','solid 1px red');
    
    //contains selector
    // $('div:contains("Zane")').css('border','solid 1px red');
    
    //w3schools.com/jquery -> selectors
    
    /*** Event Methods ***/
    
    //click method
//    $('#box').click(function () {        
//        alert('You just clicked the box');
//    });
//        
//    $("input").blur(function() {
//        
//        if( $(this/*input*/).val() == "" ){
//            $(this).css('border', 'solid 1px red');
//            $(box).text('Forgot to add text?');
//           }
//        
//    });
//    
//    $("input").keydown(function() {
//        
//        if( $(this).val() != "") {
//            $(this).css('border','solid 1px #777');
//            $('#box').text('Thanks for that!');
//        }
//        
//    });
//    
//    $('#box').hover(
//        function() {
//        
//        $(this).text("Stop touching me!");
//        
//    }, 
//    function() {
//        
//        $(this).text('Don\'t do it again!');
//        
//    });
//    
    
    /*** jQuery Chaining ***/
//    $('.notification-bar').delay(2000).slideDown().delay(2000).fadeOut();
    
    
    /*** jQuery Hide and Show ***/
    
    //$('h1').hide();
    //$('div.hidden').show();
    //$('p').fadeOut(8000);
    //$('div.hidden').fadeIn(2000);
//    $('#box1').click(function () {
//        $(this).fadeTo(1000, 0.25, function() {
//            //animation is complete
//            $(this).slideUp();
//        });
//    });
//    
//    $('div.hidden').slideDown();
//    
//    $('button').click(function() {
//        $('#box1').slideToggle();
//    });
    
    /*** jQuery Animate ***/
    
//    $('#left').click(function(){
//        $('.box').animate({
//            left: "-=40px",
//            fontSize: "+=2px"            
//        }, function() {});
//    });
//    
//    $('#up').click(function(){
//        $('.box').animate({
//            top: "-=40px",
//            opacity: "+=0.1"            
//        }, function() {});
//    });
//    
//    
//    $('#right').click(function(){
//        $('.box').animate({
//            left: "+=40px",
//            fontSize: "-=2px"            
//        }, function() {});
//    });
//    
//    $('#down').click(function(){
//        $('.box').animate({
//            top: "+=40px",
//            opacity: "-=0.1"            
//        }, function() {});
//    });
    
    /*** jQuery CSS ***/
    
//    $('#circle2').css({
//        'border': 'solid 1px red',
//        'background': '#808cdd'
//        //, etc...
//    }).addClass('circleShape');
});



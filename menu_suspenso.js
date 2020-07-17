jQuery(function(){
 
 $('.row_menusus').animate({opacity:0});
 $('.lista').animate({opacity:0});

 $('.menu_suspenso').mouseover(function(){
   $(this).stop().animate({height:210});
   $('.lista').stop().animate({opacity:1});
   $('.row_menusus').stop().animate({opacity:1});
   return false;
 });

});



jQuery(function(){
 
 $('.lista').animate({opacity:0});

 $('.menu_suspenso').mouseout(function(){
   $(this).stop().animate({height:47});
   $('.lista').stop().animate({opacity:0});
   $('.row_menusus').stop().animate({opacity:0});
   return false;
 });

});
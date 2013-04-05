/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $('.slider').css('height','0').hide();
    $(".info_panel").hover(
        function(){
            $(".slider", this).show().animate({height:'50px'});
        },
        function(){
            $(".slider", this).animate({height:0}, function() {
                $(this).hide();
            });
        }   
    )
    
//    $('.info_panel').hover(function(){ 
//        $(".slider", this).stop().animate({top:'200px'},{queue:false,duration:160}); 
//    }, function() { 
//        $(".slider", this).stop().animate({top:'295px'},{queue:false,duration:160}); 
//    });	  
});


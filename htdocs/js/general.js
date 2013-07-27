/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//function adjustStyle(width) {
//    console.log(width);
//    width = parseInt(width);
//    if (width <= 800) {
//        $("#size-stylesheet").attr("href", "css/800.css");
//    } else if ((width >= 801) && (width <= 1024)) {
//        $("#size-stylesheet").attr("href", "css/1024.css");
//    } else {
//       $("#size-stylesheet").attr("href", "css/general.css"); 
//    }
//}

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
    );
    
//    $('.info_panel').hover(function(){ 
//        $(".slider", this).stop().animate({top:'200px'},{queue:false,duration:160}); 
//    }, function() { 
//        $(".slider", this).stop().animate({top:'295px'},{queue:false,duration:160}); 
//    });
    

//    $(function() {
//        adjustStyle($(this).width());
//        $(window).resize(function() {
//            adjustStyle($(this).width());
//        });
//    });

//    adjustStyle($(window).width());

});


function loadXMLIndex1(){
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("content").innerHTML=xmlhttp.responseText;
        }
      };
    xmlhttp.open("GET","templates/_html_index1.php",true);
    xmlhttp.send();
}

function loadXMLIndex2(){
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("content").innerHTML=xmlhttp.responseText;
        }
      };
    xmlhttp.open("GET","templates/_html_index2.php",true);
    xmlhttp.send();
}
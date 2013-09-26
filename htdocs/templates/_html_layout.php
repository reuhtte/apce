<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <base href="<?php echo BASE_URL; ?>" />
        <!--<link rel="stylesheet" type="text/css" media="(max-device-width: 800px)" href="css/800.css" />-->
        <!--<link rel="stylesheet" type="text/css" media="(min-device-width: 801px) and (max-device-width: 1024px)" href="css/1024.css" />-->
        <!--<link rel="stylesheet" type="text/css" media="(min-device-width: 1025px)" href="css/general.css"/>-->
        <link rel="stylesheet" type="text/css" href="css/general.css"/>
        <link rel="stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.9.2.custom.min.css"/>        
       
        <!--<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Bevan' rel='stylesheet' type='text/css'>-->
        <link href='http://fonts.googleapis.com/css?family=Trykker' rel='stylesheet' type='text/css'>
        
        <title><?php echo $title; ?></title>
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
        <script type="text/javascript" src="js/jquery.easytabs.min.js"></script>
        <script type="text/javascript" src="../js/general.js"></script>
        <script>
            function showItem(item)
            {
                $(item).slideDown("fast");
            }
            function hideItem(item)
            {
                $(item).slideUp("fast");
            }    
            function showItemRight(item)
            {
                $("#".concat(item)).addClass("hideRight");
                document.getElementById(item).style.display="inline";
                $("#".concat(item)).animate({width:"45px"},100);
                document.getElementById(item).innerHTML="Regresar";
                
            }
            function hideItemRight(item)
            {
                $("#".concat(item)).animate({width:"0px"},100);
                document.getElementById(item).innerHTML="";                
                $("#".concat(item)).fadeOut();
            }
        </script>
    </head>
    <body>
        <?php require_once dirname(__FILE__).'/../tracking.php'; ?>
        <div id="maincontainer">
            <?php require_once dirname(__FILE__).'/_html_header.php'; ?>
            <?php echo $content; ?>
            <?php require_once dirname(__FILE__).'/_html_footer.php'; ?>
        </div>
        <div id="windows"></div>
    </body>
</html>

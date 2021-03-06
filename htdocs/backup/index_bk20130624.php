<?php
require_once dirname(__FILE__).'/config.inc.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <base href="<?php echo BASE_URL; ?>" />
        <!--<link rel="icon" href="images/sys/favicon.ico" sizes="16x16" type="image/ico" />-->
        
        <link rel="stylesheet" type="text/css" media="(max-device-width: 800px)" href="css/800.css" />
        <link rel="stylesheet" type="text/css" media="(min-device-width: 801px) and (max-device-width: 1024px)" href="css/1024.css" />
        <link rel="stylesheet" type="text/css" media="(min-device-width: 1025px)" href="css/general.css"/>
        
        <link rel="stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.9.2.custom.min.css"/>
        
       
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Bevan' rel='stylesheet' type='text/css'>
        
        <title>Contadores P&uacute;blicos Certificados</title>
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
        <script type="text/javascript" src="js/general.js"></script>
        
    </head>
    <body>
        <?php require_once dirname(__FILE__).'/tracking.php'; ?>
        <div id="maincontainer">
            <!-- header -->
            <div id="header">
                
                <div id="h_main">
                    <div id="h_main_text">CPC V&iacute;ctor Barcenas Y Asociados S.C.</div>
                    <div id="h_submain_text">Contadores P&uacute;blicos Certificados</div>
                </div>
                <div id="h_main_menu">
                    <ul>
                        <li class="mm_element mm_selected">
                            <a href="">Inicio</a>
                        </li>
                        <li class="mm_element mm_margin_left">
                            <a href="somos/">Quienes Somos</a>
                        </li>
                        <li class="mm_element mm_margin_left">
                            <a href="servicios/">Servicios</a>
                        </li>
                        <li class="mm_element mm_margin_left">
                            <a href="clientes/">Nuestros Clientes</a>
                        </li>
                        <li class="mm_element mm_margin_left">
                            <a href="links/">Links</a>
                        </li>
                        <li class="mm_element mm_margin_left">
                            <a href="contacto/">Cont&aacute;ctanos</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- content -->
            <div id="content">
                <div id="subcontent">
                    
                    <div style="border-top: 3px solid rgb(227,95,95); background-color: #ccc; font-family: 'Bevan', cursive; font-size: 1.6em; color: rgb(227,95,95); padding: 5px 45px;">
                        Calidad
                    </div>
                    
                    <div style="background-color: white; border: 0; margin: 0; padding: 0; font-family: 'Droid Sans', sans-serif;">
                        <div style="display: table-cell;">
                            <img src="/images/gallery/galeria1.png"/>
                        </div>
                        <div style="display: table-cell; padding: 30px; vertical-align: top; position: relative;">
                            <h3 style="color: #222;">Pol&iacute;tica de Calidad:</h3>
                            <p style="color: #555;">
                                La organizaci&oacute;n y su Personal nos comprometemos a
                                satisfacer y superar los requerimientos de nuestros Clientes,
                                constituy&eacute;ndonos en un Socio Estrat&eacute;gico de sus Negocios.
                            </p>

                            <h3 style="color: #222;">Objetivos de Calidad:</h3>
                            <p style="color: #555;">
                                Contribuir al crecimiento de los Negocios de nuestros Clientes.
                                <br/>
                                <br/>
                                Lograr la concientizaci&oacute;n del personal de la importancia de
                                trabajar con calidad y responsabilidad.
                                <br/>
                                <br/>
                                Lograr la Solidez Financiera de la Organizaci&oacute;n
                            </p>
                            <div style="position: absolute; bottom: 20px; right: 20px;"
                                 527 282 609 505 647
                                <img src="/images/next_button.png"/>
                            </div>
                        </div>
                    </div>
                    
                    
<!--                    <div class="info_panel">
                        <img src="images/about_us.jpg" width="270"/>

                        <div class="slider">
                            <a href="somos/">Conoce&nbsp;quienes&nbsp;somos ></a>
                        </div>
                    </div>
                    <div class="info_panel">
                        <img src="images/services.jpg" width="270"/>
                        
                        <div class="slider">
                            <a href="servicios/">Conoce&nbsp;nuestros&nbsp;servicios ></a>
                        </div>
                    </div>
                    <div class="info_panel">
                        <img src="images/customers.jpg" width="270"/>

                        <div class="slider">
                            <a href="clientes/">Conoce&nbsp;a&nbsp;nuestros&nbsp;clientes ></a>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div style="padding: 30px 60px;">
                        <h2 style="color: #dd4814">Calidad</h2>
                        <h3 style="color: #666;">Pol&iacute;tica de Calidad:</h3>
                        <p>
                            La organizaci&oacute;n y su Personal nos comprometemos a
                            satisfacer y superar los requerimientos de nuestros Clientes,
                            constituy&eacute;ndonos en un Socio Estrat&eacute;gico de sus Negocios.
                        </p>
                        
                        <h3 style="color: #666;">Objetivos de Calidad:</h3>
                        <p>
                            Contribuir al crecimiento de los Negocios de nuestros Clientes.
                            <br/>
                            <br/>
                            Lograr la concientizaci&oacute;n del personal de la importancia de
                            trabajar con calidad y responsabilidad.
                            <br/>
                            <br/>
                            Lograr la Solidez Financiera de la Organizaci&oacute;n
                        </p>
                        <h2 style="color: #dd4814">Conceptos de inter&eacute;s</h2>
                        <p>
                        Contratar servicios “creativos” de outsourcing no lo exime de sus responsabilidades
                        ante las autoridades. No se exponga innecesariamente!
                        </p>
                        
                        <p>
                        Contar con estados financieros veraces, oportunos y eficientes le permitir&aacute; tomar
                        mejores decisiones administrativas, financieras y presupuestales.
                        </p>

                        <p>
                        El An&aacute;lisis Estrat&eacute;gico le permite a las empresas una planeaci&oacute;n financiera s&oacute;lida que
                        refuerce su crecimiento.
                        </p>

                        <p>
                        El SAT le reconoce al Contador Publico Certificado la facultad de Dictaminar Estados
                        Financieros por medio de la Auditoria en las Empresas con lo cual se reducen de
                        manera significativa la probabilidad de visitas de esa autoridad.
                        </p>
                        <p>
                        El IMSS Y EL INFONAVIT le reconocen al Contador P&uacute;blico Certificado registrado
                        ante ellas, la facultad de Dictaminar sus contribuciones por medio de la Auditoria
                        correspondiente en las Empresas con lo cual se reducen de manera significativa la
                        probabilidad de visitas de esa autoridad.
                        </p>
                        <p style="font-family: 'Ubuntu', sans-serif; font-weight: bold;">
                        PERMITANOS AYUDARLE A LOGRAR MAS
                        </p>
                        <p>
                            <img src="/images/amcp.gif"/>
                        </p>
                    </div>-->
                </div>
            </div>
            <!-- footer -->
            <div id="footer">
                <br/>
                <br/>
                Cualquier duda acerca del sitio contactar a <a href="mailto:victor.tavares@reuhtte.com">victor.tavares@reuhtte.com</a>&nbsp;&nbsp;
                <br/>
                <br/>
            </div>
        </div>
        <div id="windows"></div>
    </body>
</html>

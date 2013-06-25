<?php $title = 'Enlaces de interes'; ?>
<?php $menu_selected = 'links'; ?>

<?php ob_start(); ?>
    <div id="content">
        <div id="subcontent">
            <div class="page_header">
                Enlaces de Inter&eacute;s
            </div>

            <div class="page_content" style="background: none;">
                <div style="display: table-cell; width: 325px; padding: 30px; background-color: white; text-align: center;">
                    <div class="info_panel">
                        <img src="/images/sat1.png" width="261px"/>
                        <div class="slider">
                            <a href="http://www.sat.gob.mx/" target="_blank">Servicio de Administraci&oacute;n Tributaria ></a>
                        </div>
                    </div>
                    <div style="display: table-cell;">
                        <div class="info_panel">
                            <img src="/images/leyes1.png" width="126px"/>

                            <div class="slider">
                                <a href="http://www.diputados.gob.mx/LeyesBiblio/index.htm" target="_blank">Leyes Federales ></a>
                            </div>
                        </div>
                        <div class="info_panel">
                            <img src="/images/diario1.png" width="126px"/>

                            <div class="slider">
                                <a href="http://www.dof.gob.mx/" target="_blank">Diario Oficial ></a>
                            </div>
                        </div>
                    </div>
                    <div style="display: table-cell;">
                        <div class="info_panel">
                            <img src="/images/comision1.png" width="124px"/>

                            <div class="slider">
                                <a href="http://www.conasami.gob.mx/" target="_blank">Comisión Nacional ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: table-cell; width: 10px;">
                    &nbsp;
                </div>
                <div style="display: table-cell; width: 625px; padding: 30px;  background-color: white; vertical-align: top;">
                    <a href="http://www.sat.gob.mx/sitio_internet/asistencia_contribuyente/informacion_frecuente/isr_provisional/38_24271.html" target="_blank">Tablas y tarifas para c&aacute;lculo de ISR (pagos provisionales)</a>
                    <br/>
                    <br/>
                    <a href="http://www.sat.gob.mx/sitio_internet/asistencia_contribuyente/informacion_frecuente/isr_provisional/38_24272.html" target="_blank">Tablas y tarifas para c&aacute;lculo de ISR (declaraci&oacute;n anual)</a>
                    <br/>
                    <br/>
                    <a title="SAT" target="_blank" href="http://www.sat.gob.mx/sitio_internet/servicios/descargas/sipred/default.asp">Sipred</a>
                    <br/>
                    <br/>
                    <a title="Banco de México" target="_blank" href="http://www.banxico.org.mx/SieInternet/consultarDirectorioInternetAction.do?accion=consultarCuadro&idCuadro=CF102&sector=6&locale=es">Tipos de cambio diarios</a>
                    <br/>
                    <br/>
                    <a title="INEGI" target="_blank" href="http://www.inegi.org.mx/est/contenidos/proyectos/inp/default.aspx">INPC mensual</a>
                    <br/>
                    <br/>
                    <a title="SHCP" target="_blank" href="http://www.shcp.gob.mx/LASHCP/MarcoJuridico/Paginas/PDOF.aspx">Publicaciones de la SHCP en el Diario Oficial de la Federación</a>
                    <br/>
                    <br/>
                </div>
            </div>
            
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php include dirname(__FILE__).'/_html_layout.php' ?>

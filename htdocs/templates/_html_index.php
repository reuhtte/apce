<?php $title = 'Contadores P&uacute;blicos Certificados' ?>
<?php $menu_selected = 'inicio'; ?>

<?php ob_start() ?>
    <div id="content">
        <div id="subcontent">

            <div class="page_header">
                Calidad
            </div>

            <div class="page_content">
                <div style="display: table-cell;">
                    <img src="/images/gallery/galeria1.png"/>
                </div>
                <div style="display: table-cell; padding: 30px; vertical-align: top; position: relative;">
                    <h3>Pol&iacute;tica de Calidad:</h3>
                    <p>
                        La organizaci&oacute;n y su Personal nos comprometemos a
                        satisfacer y superar los requerimientos de nuestros Clientes,
                        constituy&eacute;ndonos en un Socio Estrat&eacute;gico de sus Negocios.
                    </p>

                    <h3>Objetivos de Calidad:</h3>
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
                    <div style="position: absolute; bottom: 20px; right: 20px;">
                        <img src="/images/next_button.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean() ?>

<?php include dirname(__FILE__).'/_html_layout.php' ?>

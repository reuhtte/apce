<?php $title = 'Quienes Somos'; ?>
<?php $menu_selected = 'somos'; ?>

<?php ob_start(); ?>
    <div id="content">
        <div id="subcontent">
            <div class="page_header">
                Quienes Somos
            </div>

            <div class="page_content">
                <div style="display: table-cell; padding: 30px; vertical-align: top; position: relative;">
                    <p>
                        CPC Victor Barcenas y Asociados SC
                        
                        Somos una firma de Contadores Públicos Certificados que proporciona servicios
                        integrales de Auditoria y Consultoría Fiscal, Contable y Financiera.
                    </p>
                    <h3>Visi&oacute;n</h3>
                    <p>
                        Consolidar a la Organizaci&oacute;n como l&iacute;der en su &aacute;mbito de competencia,
                        con capacidad profesional, actualizada cada vez m&aacute;s s&oacute;lida que satisfaga y supere los
                        requerimientos del Cliente.
                    </p>

                    <h3>Misi&oacute;n</h3>
                    <p>
                        La Organizaci&oacute;n est&aacute; dispuesta a cumplir con las ambiciosas metas que permitan
                        hacer atractiva la oferta a los Clientes.
                    </p>
                    
                    <h3>Valores</h3>
                    <p>
                        Lealtad, &Eacute;tica, Responsabilidad, Transparencia, Empat&iacute;a, Profesionalismo, y
                        Trabajo en Equipo.
                    </p>
                    <div class="hide" id="hide1" style="position: absolute; bottom: 35px; right: 20px;  display:none;">
                        Directorio
                    </div>                                        
                    <div style="position: absolute; bottom: 15px; right: 20px;">
                        <a href="directorio/">
                            <img  onmouseover="showItem('#hide1')" onmouseout="hideItem('#hide1')" 
                                  src="/images/next_button.png"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php include dirname(__FILE__).'/_html_layout.php' ?>

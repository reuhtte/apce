<?php $title = 'Alianzas Laborales'; ?>
<?php $menu_selected = 'alianzas'; ?>

<?php ob_start(); ?>
    <div id="content">
        <div id="subcontent">
            <div class="page_header">
                Alianzas Laborales
            </div>

            <div class="page_content">
                <div style="display: inline-block; padding: 30px; vertical-align: top; position: relative;">
                    <h3>Do it Right S.A. de C.V.</h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: #333;">
                        Naucalpan, Estado de México<br/>
                        Cobranza y Calidad<br/>
                        <a href="http://dirsamexico.com" target="_blank">http://dirsamexico.com</a>
                    </p>
                    <h3>Valdez Castelum S.C.</h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: #333;">
                        Culiacan, Sinaloa<br/>
                        Defensoria en impuestos
                    </p>
                    <h3>Sandoval, Sacal Cohen y Cia S.C.</h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: #333;">
                        Distrito Federal<br/>
                        Impuestos Locales y Partes Relacionadas
                    </p>
                    <h3>Corvus Corp</h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: #333;">
                        Distrito Federal<br/>
                        Sistemas<br/>
                        <a href="http://corvuscorp.com.mx" target="_blank">http://corvuscorp.com.mx</a>
                    </p>
                    <h3>Notaria 13. Lic. Nicolas Maluf Maloff</h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: #333;">
                        Tlanepantla, Estado de México<br/>
                        Contratos y Demandas
                    </p>
                    <h3>Informatica Aplicada Audimss S.C.</h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: #333;">
                        Distrito Federal<br/>
                        Seguridad Social
                    </p>
                    
                </div>
            </div>
            
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php include dirname(__FILE__).'/_html_layout.php' ?>

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
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: rgb(120,128,136);">
                        Naucalpan, Estado de México<br/>
                        Cobranza y Calidad
                    </p>
                    <h3>Valdez Castelum S.C.</h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: rgb(120,128,136);">
                        Culiacan, Sinaloa<br/>
                        Defensoria en impuestos
                    </p>
                    <h3>Sandoval, Sacal Cohen y Cia S.C.</h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: rgb(120,128,136);">
                        Distrito Federal<br/>
                        Impuestos Locales y Partes Relacionadas
                    </p>
                    <h3>Centro Mexicano para el Desarrollo Sustentable, NODOS </h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: rgb(120,128,136);">
                        Naucalpan, Estado de México<br/>
                        Sistemas
                    </p>
                    <h3>Notaria 13. Lic. Nicolas Maluf Maloff</h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: rgb(120,128,136);">
                        Tlanepantla, Estado de México<br/>
                        Contratos y Demandas
                    </p>
                    <h3>Informatica Aplicada Audimss S.C.</h3>
                    <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: rgb(120,128,136);">
                        Distrito Federal<br/>
                        Seguridad Social
                    </p>
                    
                </div>
            </div>
            
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php include dirname(__FILE__).'/_html_layout.php' ?>

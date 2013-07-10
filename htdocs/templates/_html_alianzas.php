<?php $title = 'Alianzas Profesionales'; ?>
<?php $menu_selected = 'alianzas'; ?>

<?php ob_start(); ?>
    <div id="content">
        <div id="subcontent">
            <div class="page_header">
                Alianzas Profesionales
            </div>

            <div class="page_content">
                <div style="display: inline-block; padding: 30px; vertical-align: top; position: relative;">
                        
                    <h3>Valdez Castelum S.C.</h3>
                    <h3>Sandoval, Sacal Cohen y Cia S.C.</h3>
                    <h3>Centro Mexicano para el Desarrollo Sustentable, NODOS </h3>

                </div>
            </div>
            
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php include dirname(__FILE__).'/_html_layout.php' ?>

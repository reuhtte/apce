<?php $title = 'Contadores P&uacute;blicos Certificados' ?>
<?php $menu_selected = 'inicio'; ?>

<?php ob_start() ?>

<script> loadXMLIndex1(); </script>
    <div id="content">
        <div id="subcontent">

        </div>
    </div>
<?php $content = ob_get_clean() ?>

<?php include dirname(__FILE__).'/_html_layout.php' ?>

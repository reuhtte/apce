<?php $title = 'Nuestros Clientes'; ?>
<?php $menu_selected = 'clientes'; ?>

<?php ob_start(); ?>
    <div id="content">
        <div id="subcontent">
            <div class="page_header">
                Nuestros Clientes
            </div>
            <div class="page_content" style="background: white;">
                <div id="tab-container" class="tab-container">
                    <ul class="etabs">
                        <li class="tab default"><a href="#group1">Grupo 1</a></li>
                        <li class="tab default"><a href="#group2">Grupo 2</a></li>
                        <li class="tab default"><a href="#group3">Grupo 3</a></li>
                        <li class="tab default"><a href="#group4">Grupo 4</a></li>
                        <li class="tab default"><a href="#group5">Grupo 5</a></li>
                    </ul>
                    <div id="group1" class="tab_content">
                      <h3>HTML Markup for these tabs</h2>
                      <!-- content -->
                    </div>
                    <div id="group2" class="tab_content">
                      <h3>JS for these tabs</h2>
                      <!-- content -->
                    </div>
                    <div id="group3" class="tab_content">
                      <h3>CSS Styles for these tabs</h2>
                      <!-- content -->
                    </div>
                    <div id="group4" class="tab_content">
                      <h3>CSS Styles for these tabs</h2>
                      <!-- content -->
                    </div>
                    <div id="group5" class="tab_content">
                      <h3>CSS Styles for these tabs</h2>
                      <!-- content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#tab-container').easytabs(); 
        });
    </script>
<?php $content = ob_get_clean(); ?>

<?php include dirname(__FILE__).'/_html_layout.php' ?>

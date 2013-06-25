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
                        <li class="tab default"><a href="#servicio">Servicio</a></li>
                        <li class="tab default"><a href="#gobierno">Gobierno</a></li>
                        <li class="tab default"><a href="#industrial">Industrial</a></li>
                        <li class="tab default"><a href="#comercio">Comercio</a></li>
                        <li class="tab default"><a href="#construccion">Contrucción</a></li>
                        <li class="tab default"><a href="#escuela">Escuela</a></li>
                    </ul>
                    <div id="servicio" class="tab_content">
                        <h3>Servicio</h2>
                        <!-- content -->
                        <p>
                            Collado Marín, S.C.<br/>
                            Corporativo García Salazar, S.A. de C.V.<br/>
                            Luis Iturriaga Bravo<br/>
                            Navesp Marketing Creativo, S.A. de C.V.<br/>
                            Ramírez Barrera Ernesto<br/>
                            Ramírez Clemente Naivi<br/>
                            Restaurantes Bávaros, S.A. de C.V.<br/>
                            Tesalia Capital, S.A. de C.V.<br/>
                        </p>
                    </div>
                    <div id="gobierno" class="tab_content">
                        <h3>Gobierno</h2>
                        <!-- content -->
                        <p>
                            Consultoría y Desarrollo Municipal<br/>
                            Delegación Tlalpan de Gobierno del Distrito Federal<br/>
                        </p>
                    </div>
                    <div id="industrial" class="tab_content">
                        <h3>Industrial</h2>
                        <!-- content -->
                        <p>
                            Clorox de México, S.A. de C.V.<br/>
                            Eurolight S.A. de C.V.<br/>
                            Grupo Industrial Sacsa, S.A. de C.V.<br/>
                            Industria Mexicana de Alimentos, S.A. de C.V.<br/>
                            Internacional Bróker Sistems, S.A. de C.V.<br/>
                            Levadura Azteca, S.A. de C.V.<br/>
                            Lightmex S.A. de C.V.<br/>
                            Linsa Lavandería Industrial, S.A. de C.V.<br/>
                        </p>
                    </div>
                    <div id="comercio" class="tab_content">
                        <h3>Comercio</h2>
                        <!-- content -->
                        <p>
                            Futuros Traviesos, S.A. de C.V.<br/>
                            La Dueña Vinos y Licores, S.A. de C.V.<br/>
                        </p>
                    </div>
                    <div id="construccion" class="tab_content">
                        <h3>Contrucción</h2>
                        <!-- content -->
                        <p>
                            Residencial Cuitzeo 54<br/>
                            Zeta Corporación de Ingeniería y Arquitectura S.A. De C.V.<br/>
                        </p>
                    </div>
                    <div id="escuela" class="tab_content">
                        <h3>Escuela</h2>
                        <!-- content -->
                        <p>
                            Universidad del Distrito Federal, A. C.<br/>
                            Universidad ISEC SC<br/>
                        </p>
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

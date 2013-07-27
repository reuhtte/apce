<?php $title = 'Directorio'; ?>
<?php $menu_selected = 'somos'; ?>

<?php ob_start(); ?>
    <div id="content">
        <div id="subcontent">
            <div class="page_header">
                <span>Directorio</span>                
                <span style="float:right;">
                    <a href="somos">
                        <img onmouseover="showItemRight('hide1')" onmouseout="hideItemRight('hide1')"
                             style="cursor:pointer;" height="20px" src="/images/prev_button.png"/ >
                    </a>
                </span>  
                <span id="hide1" style="float:right; margin-right: -8px; margin-top:3px;"></span>
            </div>
            <div class="page_content" style="background: none;">
                <div style="display: table-cell; width: 330px; text-align: center; position: relative; vertical-align: top;">
                    <div style="display: inline-block; background-image: url('/images/header.png'); background-repeat: repeat; height: 130px; width: 330px;"></div>
                    <div style="display: inline-block; background: white; height: 370px; width: 330px;">&nbsp;</div>
                    <div style="display: inline-block; width: 240px; top: 40px; left: 45px; height: 420px; position: absolute; text-align: center;">
                        <div style="height: 340px; background-color: white;">
                            <img src="/images/directory/c01.jpg" width="230px" style="border: 5px solid white;"/>
                        </div>
                        <div style="">
                            <p style="font-family: 'Bevan', cursive; font-size: 1.1em; color: rgb(112,36,36);">
                                <span style="color: rgb(227,95,95);">CPC</span> VICTOR MANUEL
                                BARCENAS PAREDES
                            </p>
                            <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: rgb(120,128,136);">
                                Director General
                            </p>
                        </div>
                    </div>
                    <div class="hide" id="hideCV" style="position: absolute; bottom: 120px; right: 20px;  display:none;">
                        C.V.
                    </div>                        
                    <div style="position: absolute; bottom: 100px; right: 20px;">
                        <a href="vbarcenas/">
                            <img onmouseover="showItem('#hideCV')" onmouseout="hideItem('#hideCV')" src="/images/next_button.png"/>
                        </a>
                    </div>
                </div>
                <div style="display: table-cell; width: 100px; text-align: right;">
                    
                </div>
                <div style="display: table-cell; width: 560px; text-align: right;">
                    <div style="display: table-cell; width: 200px; background-image: url('/images/header.png'); background-repeat: repeat;">
                        <img src="/images/directory/c02.jpg" width="220px" style="border: 5px solid white; margin: 10px 30px;"/>
                    </div>
                    <div style="display: table-cell; width: 400px; background-color: white; text-align: center; vertical-align: middle;">
                        <p style="font-family: 'Bevan', cursive; font-size: 1.1em; color: rgb(112,36,36);">
                            LIC. ADRIANA ANOUK <br/>
                            BARCENAS GARCÍA<br/>
                            <span style="color: rgb(227,95,95);">Socia</span>
                        </p>
                        <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: rgb(120,128,136);">
                            Gerencia de <br/>
                            Administración y Calidad
                        </p>
                    </div>
                    <div style="height: 20px;">&nbsp;</div>
                    <div style="display: table-cell; width: 200px; background-image: url('/images/header.png'); background-repeat: repeat;">
                        <img src="/images/directory/c04.jpg" width="220px" style="border: 5px solid white; margin: 10px 30px;"/>
                    </div>
                    <div style="display: table-cell; width: 400px; background-color: white; text-align: center; vertical-align: middle;">
                        <p style="font-family: 'Bevan', cursive; font-size: 1.1em; color: rgb(112,36,36);">
                            C.P. ALFREDO SALVADOR <br/>
                            HERNÁNDEZ PRUDENCIO<br/>
                            <span style="color: rgb(227,95,95);">Socio</span>
                        </p>
                        <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: rgb(120,128,136);">
                            Gerencia de <br/>
                            Auditoria
                        </p>
                    </div>
                    <div style="height: 20px;">&nbsp;</div>
                    <div style="display: table-cell; width: 200px; background-image: url('/images/header.png'); background-repeat: repeat;">
                        <img src="/images/directory/c03.jpg" width="220px" style="border: 5px solid white; margin: 10px 30px;"/>
                    </div>
                    <div style="display: table-cell; width: 400px; background-color: white; text-align: center; vertical-align: middle;">
                        <p style="font-family: 'Bevan', cursive; font-size: 1.1em; color: rgb(112,36,36);">
                            C.P. CÉSAR <br /> GUZMÁN CÓRDOBA<br/>
                            <span style="color: rgb(227,95,95);">Socio</span>
                        </p>
                        <p style="font-family: 'Droid Sans', sans-serif; font-size: 1em; color: rgb(120,128,136);">
                            Gerencia de <br/>
                            Consultoria y Contabilidad
                        </p>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php include dirname(__FILE__).'/_html_layout.php' ?>

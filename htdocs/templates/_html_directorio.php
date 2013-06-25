<?php $title = 'Directorio'; ?>
<?php $menu_selected = 'somos'; ?>

<?php ob_start(); ?>
    <div id="content">
        <div id="subcontent">
            <div class="page_header">
                Directorio
            </div>
            <div class="page_content" style="background: none;">
                <div style="display: table-cell; width: 330px; text-align: center; position: relative; vertical-align: top;">
                    <div style="display: inline-block; background-image: url('/images/header.png'); background-repeat: repeat; height: 130px; width: 330px;"></div>
                    <div style="display: inline-block; background: white; height: 370px; width: 330px;">&nbsp;</div>
                    <div style="display: inline-block; width: 240px; top: 40px; left: 45px; height: 420px; position: absolute; text-align: center;">
                        <div style="height: 340px; background-color: white;"></div>
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
                    <div style="position: absolute; bottom: 100px; right: 20px;">
                        <a href="vbarcenas/">
                            <img src="/images/next_button.png"/>
                        </a>
                    </div>
                </div>
                <div style="display: table-cell; width: 450px; text-align: right;">
                    <div style="display: inline-block; background-image: url('/images/cvsocio.png'); background-repeat: no-repeat; width: 300px; height: 200px; float: right;"></div>
                    <div style="display: inline-block; background-image: url('/images/cvsocio.png'); background-repeat: no-repeat; width: 300px; height: 200px; float: right;"></div>
                    <div style="display: inline-block; background-image: url('/images/cvsocio.png'); background-repeat: no-repeat; width: 300px; height: 200px; float: right;"></div>
                </div>
            </div>
            
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php include dirname(__FILE__).'/_html_layout.php' ?>

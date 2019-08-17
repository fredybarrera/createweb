<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autoprogramable - CreateWeb</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/grid.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate-1.1.1.js"></script>
          <!--[if lt IE 8]><div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div><![endif]-->
        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
                <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
                <link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <![endif]-->
    </head>

    <body>
        <header>
            <div class="container_12">
                <div class="grid_12">
                    <div class="wrapper">
                        <a href="<?php echo base_url(); ?>welcome" class="logo"></a>
                        <nav>
                            <ul class="menu">
                                <li><?php echo anchor('welcome', 'Inicio'); ?></li>
                                <li><?php echo anchor('welcome/portafolio', 'Portafolio'); ?></li>
                                <li><?php echo anchor('welcome/tecnologia', 'Tecnología'); ?></li>
                                <li><?php echo anchor('welcome/blog', 'Blog'); ?></li>
                                <li><?php echo anchor('welcome/contacto', 'Contacto'); ?></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div id="content">            
            <div class="inner">
                <div class="container_12">    
                    <div class="wrapper">
                        <div class="grid_12">
                            <div class="block">
                                <div class="info-block">     
                                    <a href="#" rel="nofollow" class="link">¿Porque mi página web autoprogramable?</a><br />
                                    Admisistra el contenido de tu página web, sube las fotográfias que desees a tu galería de imágenes, ingresa, edita o elimina contenido.<br />Sé el administrador de tu sitio, nosotros lo configuramos para tí.
                                </div>
                                <a href="<?php echo base_url(); ?>welcome/contacto" class="button" rel="nofollow">Cotizar &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="grid_12">
                            <h2 class="h-pad1">¿En que consiste la autoprogramación?</h2>
                            <ul class="wrapper works">
                                <img src="<?php echo base_url(); ?>images/ciclo5.png" alt="ciclo" />                     
                            </ul>
                        </div>
                    </div>
                </div>			
            </div>
        </div>
        <footer>
            <div class="container_12">
                <div class="wrapper">
                    <div class="grid_8">
                        CreateWeb &copy; 2013 &nbsp;  | <a href="http://www.createweb.cl" rel="nofollow" class="link">CreateWeb</a>
                    </div>
                    <div class="grid_4">
                        <div class="social">
                            Redes:<a href="https://www.facebook.com/pages/Createweb/443540615721037?ref=hl"><img src="<?php echo base_url(); ?>images/facebook-icon.png" alt=""></a><a href="#"><img src="<?php echo base_url(); ?>images/twitter-icon.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

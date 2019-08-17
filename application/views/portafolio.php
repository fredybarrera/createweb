<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portafolio - CreateWeb</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/grid.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
        
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate-1.1.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>        
        
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
                                <li class="active"><?php echo anchor('welcome/portafolio', 'Portafolio'); ?></li>
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
                                    <a href="<?php echo base_url(); ?>welcome/autoprogramable" rel="nofollow" class="link">Páginas web Autoprogramables</a><br />
                                    ¿Cansado de tener que pagar para realizar cambios en tu pagina web? <br />Sé el administrador de tu sitio, nosotros lo configuramos para tí.
                                </div>
                                <a href="<?php echo base_url(); ?>welcome/autoprogramable" class="button" rel="nofollow">Ver más &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="grid_12">
                            <h2 class="h-pad1">Proyectos</h2>
                            <ul class="wrapper works">
                                <li class="grid_4 alpha">
                                    <figure>
                                        <img src="<?php echo base_url(); ?>images/guvim3.png" alt="Guvim"/></a>                                        
                                    </figure>
                                    <p><a  target="_blank" href="http://www.guvim.cl" class="link">Guvim tiendas virtuales</a></p>
                                    Crea tu tienda virtual a medida y vende tus productos a través de internet, recibe los pagos todos los dias del año.
                                    <p><a target="_blank" href="http://www.guvim.cl" class="button">Visitar</a></p>
                                </li>
                                <li class="grid_4">
                                    <figure>
                                        <img src="<?php echo base_url(); ?>images/develart3.png" alt="Develart"/></a>                                        
                                    </figure>
                                    <p><a target="_blank" href="http://www.develartconsultores.cl" class="link">Develart Cocultoría y Capacitación</a></p>
                                    Página web 100% autoadministrable, contenidos, fotografías, blog, cursos y capacitaciones.
                                    <p><a target="_blank" href="http://www.develartconsultores.cl" class="button">Visitar</a></p>
                                </li>
                                <li class="grid_4 omega">
                                    <figure><img src="<?php echo base_url(); ?>images/casa.png" alt=""></figure>
                                    <p><a target="_blank" href="http://www.casadeljuguete.cl" class="link">Casa del juguete</a></p>
                                    Proyecto en desarrollo, contenido dinámico, compras con pago en línea y envío de productos.
                                    <p><a target="_blank" href="http://www.casadeljuguete.cl" class="button">Visitar</a></p>
                                </li>
                                <li class="grid_4 alpha">
                                    <figure><img src="<?php echo base_url(); ?>images/zalazar.png" alt=""></figure>
                                    <p><a target="_blank" href="http://www.zalazar.cl" class="link">Zalazar Surfboards</a></p>
                                    Traduccion Español - Ingles + Autoadministración de contenidos, información y galerías, Zalazar Surfboards.
                                    <p><a target="_blank" href="http://www.zalazar.cl" class="button">Visitar</a></p>
                                </li>
                                <li class="grid_4">
                                    <figure><img src="<?php echo base_url(); ?>images/consiente.png" alt=""></figure>
                                    <p><a target="_blank" href="http://www.con-siente.cl" class="link">Con-siente</a></p>
                                    Contenido 100% autoadministrable, información, galerías y noticias.<br /> Con-siente.cl
                                    <p><a target="_blank" href="http://www.con-siente.cl" class="button">Visitar</a></p>
                                </li>
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

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inicio - CreateWeb</title>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/grid.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/camera.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate-1.1.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/camera.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
        <script>
            jQuery(function() {
                jQuery('#camera_wrap_1').camera({
                    height: '317px',
                    loader: false,
                    pagination: false,
                    thumbnails: false
                });
            });
        </script>
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
                                <li class="active"><?php echo anchor('welcome', 'Inicio'); ?></li>
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
            <div id="slider">
                <div class="container_12">
                    <div class="grid_12">
                        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                            <div data-src="<?php echo base_url(); ?>images/precios.png">
                                <div class="camera_caption fadeIn">
                                    <h2>Plan LIGHT</h2>
                                    <ul class="list_inicio">										                                        
                                        <li><a href="#">Inscripción de Dominio .cl gratuito por 1 año</a></li>
                                        <li><a href="#">Hosting gratuito durante 1 año</a></li>
                                        <li><a href="#">Soporte técnico gratuito por 30 días</a></li>                                                                               
                                        <li><a href="#">10 Cuentas de correo</a></li>                                        
                                        <li><a href="#">Entrega 7 dias hábiles</a></li> 
                                    </ul>
                                    <p><a href="<?php echo base_url(); ?>welcome/contacto" class="button">Cotizar</a></p>
                                </div>
                            </div>
                            <div data-src="<?php echo base_url(); ?>images/precios2.png">
                                <div class="camera_caption fadeIn">
                                    <h2>Plan PLUS</h2>
                                    <ul class="list_inicio">										                                        
                                        <li><a href="#">Inscripción de Dominio .cl gratuito por 1 año</a></li>
                                        <li><a href="#">Hosting gratuito durante 1 año</a></li>
                                        <li><a href="#">Soporte técnico gratuito por 45 días</a></li>
                                        <li><a href="#">15 Cuentas de correo</a></li>                                        
                                        <li><a href="#">Entrega 15 días hábiles</a></li> 
                                    </ul>
                                    <p><a href="<?php echo base_url(); ?>welcome/contacto" class="button">Cotizar</a></p>
                                </div>
                            </div>
                            <div data-src="<?php echo base_url(); ?>images/precios3.png">
                                <div class="camera_caption fadeIn">
                                    <h2>Plan FULL</h2>
                                    <ul class="list_inicio">										                                        
                                        <li><a href="#">Inscripción de Dominio .cl gratuito por 1 año</a></li>
                                        <li><a href="#">Hosting gratuito durante 1 año</a></li>
                                        <li><a href="#">Soporte técnico gratuito por 60 días</a></li>
                                        <li><a href="#">20 Cuentas de correo</a></li>
                                        <li><a href="#">Entrega 25 días hábiles</a></li> 
                                    </ul>
                                    <p><a href="<?php echo base_url(); ?>welcome/contacto" class="button">Cotizar</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="block">
                            <div class="grid_8">
                                <div class="grid-inner">
                                    <h2>Nosotros</h2>
                                    <div class="wrapper">
                                        <figure class="img-indent"><img src="<?php echo base_url(); ?>images/icon.png" alt=""></figure>
                                        Somos una joven y emergente empresa informática dedicada a las tecnologías web, poseemos sólidos conocimientos en nuestro trabajo, además de pasión por la tecnología.
                                    </div>
                                    <p class="pad"></p>
                                </div>
                            </div>
                            <div class="grid_4">
                                <h2>Misión</h2>
                                <div class="testimonial-block">
                                    <em>Satisfacer las necesidades tecnológicas de nuestros clientes, con el mayor nivel de compromiso y responsabilidad.</em><p><strong>Equipo CreateWeb</strong></p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="grid_12">
                            <h2 class="h-pad">Nuestros clientes</h2>
                            <ul class="clients-list">
                                <li><a href="#"><img src="<?php echo base_url(); ?>images/cliente1.png" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo base_url(); ?>images/cliente2.png" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo base_url(); ?>images/cliente3.png" alt=""></a></li>                                
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
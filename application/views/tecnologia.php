<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tecnologías - CreateWeb</title>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/grid.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate-1.1.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jcarousellite_1.0.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
        <script>
            $(document).ready(function() {
                $(".carousel").jCarouselLite({
                    btnNext: ".next",
                    btnPrev: ".prev",
                    visible: 4
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

    <body>
        <header>
            <div class="container_12">
                <div class="grid_12">
                    <div class="wrapper">
                        <div class="wrapper">
                            <a href="<?php echo base_url(); ?>welcome" class="logo"></a>
                            <nav>
                                <ul class="menu">
                                    <li><?php echo anchor('welcome', 'Inicio'); ?></li>
                                    <li><?php echo anchor('welcome/portafolio', 'Portafolio'); ?></li>
                                    <li class="active"><?php echo anchor('welcome/tecnologia', 'Tecnología'); ?></li>
                                    <li><?php echo anchor('welcome/blog', 'Blog'); ?></li>
                                    <li><?php echo anchor('welcome/contacto', 'Contacto'); ?></li>
                                </ul>
                            </nav>
                        </div>
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
                            <div class="block">
                                <h2>Tecnologías</h2>
                                <a href="#" class="prev"></a>
                                <a href="#" class="next"></a>
                                <div class="carousel">
                                    <ul class="clients-list">
                                        <li><a href="http://ellislab.com/codeigniter"><img src="<?php echo base_url(); ?>images/ci2.png" alt="codeigniter" height="52" width="188"></a></li>
                                        <li><a href="http://php.net/"><img src="<?php echo base_url(); ?>images/php.png" alt="php" height="52" width="188"></a></li>
                                        <li><a href="http://es.wikipedia.org/wiki/HTML5"><img src="<?php echo base_url(); ?>images/html52.png" alt="html5" height="52" width="188"></a></li>
                                        <li><a href="http://es.wikipedia.org/wiki/Hojas_de_estilo_en_cascada"><img src="<?php echo base_url(); ?>images/css2.png" alt="css" height="52" width="188"></a></li>
                                        <li><a href="http://jquery.com/"><img src="<?php echo base_url(); ?>images/jquery.png" alt="jquery" height="52" width="188"></a></li>
                                        <li><a href="http://api.jquery.com/jQuery.ajax/"><img src="<?php echo base_url(); ?>images/ajax.png" alt="ajax" height="52" width="188"></a></li>
                                        <li><a href="http://www.mysql.com/"><img src="<?php echo base_url(); ?>images/mysql.png" alt="mysql" height="52" width="188"></a></li>
                                        <li><a href="http://www.postgresql.org/"><img src="<?php echo base_url(); ?>images/postgres.png" alt="postgres" height="52" width="188"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="grid_12">
                            <div class="block">
                                <div class="wrapper">
                                    <div class="grid_7 alpha">
                                        <h2>Software</h2>
                                        <div class="wrapper">
                                            <figure class="img-indent"><img src="<?php echo base_url(); ?>images/codeigniter.png" alt=""></figure>
                                            <strong class="title">Download CodeIgniter 2.1.4</strong>
                                            Descarga la última versión de este espectacular framework php desde su página oficial.
                                            <br /><a href="http://ellislab.com/codeigniter/download" >Descargar</a>
                                        </div>
                                        <div class="wrapper pad">
                                            <figure class="img-indent"><img src="<?php echo base_url(); ?>images/wamp.png" alt=""></figure>
                                            <strong class="title">Wamp Server (64 BITS & PHP 5.4) 2.4</strong>
                                            Todo lo necesario para comenzar a crear aplicaciones web en un solo programa: WAMP.
                                            <br /><a href="http://www.wampserver.com/en/#wampserver-64-bits-php-5-4" >Descargar</a>
                                        </div>
                                        <div class="wrapper pad">
                                            <figure class="img-indent"><img src="<?php echo base_url(); ?>images/jquery2.png" alt=""></figure>
                                            <strong class="title">Download jQuery 1.10.2</strong>
                                            Con una combinación de flexibilidad y extensibilidad, jQuery ha cambiado la forma en que millones de personas escriben JavaScript.                                                                                        
                                            <br /><a href="http://jquery.com/download/" >Descargar</a>
                                        </div>
                                        <div class="wrapper pad">
                                            <figure class="img-indent"><img src="<?php echo base_url(); ?>images/netbeans.png" alt=""></figure>
                                            <strong class="title">Netbeans IDE</strong>
                                            Poderoso editor HTML-PHP de uso libre, robusto, rápido y fácil de usar, Netbeans.
                                            <br /><a href="http://jquery.com/download/" >Descargar</a>
                                        </div>   

                                    </div>
                                    <div class="grid_4 prefix_1 omega">
                                        <h2>Recursos</h2>
                                        <ul class="list">										
                                            <li><a href="http://www.martiniglesias.eu/">Blog de Martin Iglesias</a></li>
                                            <li><a href="http://www.codejobs.biz/">Code Jobs</a></li>
                                            <li><a href="http://norfipc.com/index.html">Norfi PC</a></li>
                                            <li><a href="http://buildinternet.com/project/supersized/">Supersized, fullscreen slideshow</a></li>
                                            <li><a href="http://www.tutorialesvirtuales.com/">Tutoriales virtuales</a></li>
                                            <li><a href="http://www.freedigitalphotos.net/">Free Photos</a></li>
                                            <li><a href="http://web.tursos.com/">WebTursos</a></li>
                                            <li><a href="http://fancyapps.com/fancybox/">FancyBox</a></li>
                                            <li><a href="http://www.mcanerin.com/en/search-engine/robots-txt.asp">Robots generator</a></li>
                                            <li><a href="http://uno-de-piera.com/">Uno de piera</a></li>                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--                            <div class="wrapper h-pad">
                                                            <div class="grid_8 alpha">
                                                                <div class="grid-inner">
                                                                    <h2>Special Proposition</h2>
                                                                    <div class="wrapper">
                                                                        <figure class="img-indent"><img src="images/image3.jpg" alt=""></figure>
                                                                        <strong class="title">Pellentesque sed dolor. Mauris accumsan nulla vel diam.</strong>
                                                                        Phasellus eros turpis, praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid_4 omega">
                                                                <h2>Newsletter</h2>
                                                                <form id="subscribe-form">
                                                                    <fieldset>
                                                                        <input type="text" value="Enter Your Email" onFocus="if (this.value == 'Enter Your Email') {
                                                this.value = ''
                                            }" onBlur="if (this.value == '') {
                                                this.value = 'Enter Your Email'
                                            }">	
                                                                        <a href="#" class="button1" onClick="document.getElementById('subscribe-form').submit()">Subscribe</a>
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                        </div>-->
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

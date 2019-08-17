<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contacto - CreateWeb</title>
        <meta charset="utf-8"><link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/grid.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate-1.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>js/funciones.js"></script>
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
                        <div class="wrapper">
                            <a href="<?php echo base_url(); ?>welcome" class="logo"></a>
                            <nav>
                                <ul class="menu">
                                    <li><?php echo anchor('welcome', 'Inicio'); ?></li>
                                    <li><?php echo anchor('welcome/portafolio', 'Portafolio'); ?></li>
                                    <li><?php echo anchor('welcome/tecnologia', 'Tecnología'); ?></li>
                                    <li><?php echo anchor('welcome/blog', 'Blog'); ?></li>
                                    <li class="active"><?php echo anchor('welcome/contacto', 'Contacto'); ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="content">

            <div class="inner pad1">
                <div class="container_12">
                    <div class="wrapper h-pad">
                        <div class="grid_7">
                            <h2>Información de contacto</h2>
                            <div class="wrapper">
                                <div class="grid_4 alpha">
                                    <iframe width="300" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Paicav%C3%AD+891,+Concepci%C3%B3n&amp;aq=0&amp;oq=Paicav%C3%AD+891,+conce&amp;sll=-36.847148,-72.973426&amp;sspn=0.153854,0.338173&amp;ie=UTF8&amp;hq=&amp;hnear=Paicav%C3%AD+891,+Concepci%C3%B3n,+Biob%C3%ADo&amp;t=m&amp;ll=-36.819248,-73.04492&amp;spn=0.023361,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                                </div>
                                <div class="grid_3 omega">
                                    <div class="contacts">
                                        <strong class="title">CreateWeb</strong>
                                        Paicaví 891 oficina 106, Concepción<br>                                                                                
                                        Teléfono: +569 87165269<br>                                        
                                        E-mail: <a href="mailto:info@createweb.cl" class="link">info@createweb.cl</a> 
                                        Facebook: <a href="https://www.facebook.com/pages/Createweb/443540615721037" title="facebook">CreateWeb</a>
                                    </div>		
                                </div>
                            </div>
                        </div>
                        <div class="grid_4 prefix_1">
                            <h2>Contáctanos</h2>                            
                                <?php echo form_open('#', 'id="contact-form" method="post" class="contacto"'); ?>
                                <fieldset>
                                    <label>
                                        <?php echo form_input('nombre', '','placeholder="(*)Nombre" maxlength="50" required class="nombre"'); ?>
                                    </label>
                                    <label>
                                        <?php echo form_input('email', '','placeholder="(*)Email" maxlength="60" required class="email"'); ?>
                                    </label>
                                    <label>
                                        <?php echo form_input('fono', '','placeholder="Fono" maxlength="8" class="fono"'); ?>
                                    </label>
                                    <label>
                                        <select id="plan" name="plan" onchange="this.className=this.options[this.selectedIndex].className" class="color">
                                            <option value="" selected="selected" class="color">(*)Seleccione Plan</option>
                                            <option value="light" class="color2">LIGHT</option>
                                            <option value="plus" class="color2">PLUS</option>
                                            <option value="full" class="color2">FULL</option>
                                            <option value="Autoprogramable" class="color2">Autoprogramable</option>
                                        </select>
                                    </label>
                                    <?php echo form_textarea('mensaje', '', 'placeholder="(*)Mensaje..." maxlenght="200" class="mensaje"'); ?>                                    
                                    <?php echo form_submit('enviar', 'Enviar', 'class="button1"'); ?>
                                </fieldset>
                            <?php echo form_close(); ?>
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

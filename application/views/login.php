<!DOCTYPE html> 
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]--> 
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]--> 
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]--> 
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]--> 
    <head> 
        <meta charset="utf-8"> 
        <title>Login Admin</title> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/login.css" /> 
    </head> 
    <body> 
        <div class="container"> 
            <section id="content"> 
                <?php echo form_open('welcome/login', '', 'method="post"'); ?>
                <h1>Login Admin</h1> 
                <div> 
                    <input name="username" type="text" placeholder="Nombre de usuario" required id="username" /> 
                </div> 
                <div> 
                    <input name="password"type="password" placeholder="Contraseña" required id="password" /> 
                </div> 
                <div> 
                    <input type="submit" value="Entrar" />                
                </div> 
                <?php echo form_close(); ?>
                </body> 
                </html>
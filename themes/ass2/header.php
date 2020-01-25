<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title><?php bloginfo('name'); ?></title> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1>
                <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?> </a>
                <small><?php bloginfo('description'); ?></small>
            </h1>
            <div class="h_right">
                <form method="get" action="<?php esc_url(home_url('/')); ?>"> 
                    <input type="text" name="s" placeholder="Search...">
             <aside id="login"><form action="login.php?page=<?php echo $name; ?>" method="post"><input name="username" id="username" type="text" placeholder="Username">   <input name="submit" type="submit" value="Login" ></form></aside>
                </form>
            </div>
        </div>
    </header>
    <nav class="nav main-nav">
    <div class="container">
        <?php $args = array('theme_location' => 'primary');?>
        <?php wp_nav_menu($args); ?> 
    </div>
</nav
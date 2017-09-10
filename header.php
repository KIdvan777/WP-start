<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php bloginfo(); ?> </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="container">
        <!-- site-header -->
        <header class="site-header">
            <h1><a href="<?php the_permalink(); ?>"><?php bloginfo('name'); ?></a></h1>
            <h5><?php bloginfo('description'); ?></h5>

                <?php if(is_page('portfolio')){?>

               

                <?}?>



            <nav class="site-nav">
                <?php
                     $args = array(
                        'theme_location'=>'primary',
                    	'menu'            => '',
                    	'container'       => '',
                    	'container_class' => '',
                    	'container_id'    => '',
                    	'menu_class'      => 'menu',
                    	'menu_id'         => '',
                    	'echo'            => true,
                    	'fallback_cb'     => 'wp_page_menu',
                    	'before'          => '',
                    	'after'           => '',
                    	'link_before'     => '',
                    	'link_after'      => '',
                    	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    	'depth'           => 0,
                    	'walker'          => '',
                                        );
                ?>

                <?php  wp_nav_menu($args);?>
            </nav>
        </header>

        <!-- /site-header -->

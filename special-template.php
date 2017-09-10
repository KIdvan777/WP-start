<?php
/*
Template name: Special layout
*/

 get_header();

    if(have_posts()) :
        while (have_posts()) : the_post(); ?>

        <article class="post page">

                <h2><?php the_title(); ?></h2>

                <div class="info-box">
                    <h4><?php the_title(); ?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat nihil iure consectetur ut corporis incidunt, doloribus nisi assumenda sint eos debitis nesciunt enim sapiente fugit quod natus eaque fuga tenetur.
                        </p>
              
                </div>

               <?php the_content(); ?>
        </article>


        <? endwhile;
        else:
            echo '<p>No content found</p>';
     endif;

get_footer();

 ?>

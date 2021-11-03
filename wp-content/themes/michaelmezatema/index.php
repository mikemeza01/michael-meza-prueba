<?php 
    get_header();
?>


    <section id="main-content">

        <?php if (have_posts()) : while( have_posts()) : the_post(); ?>
                    
        <article class="post resume">
            <header class="post-title">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <small class="meta"><?php the_time( get_option( 'date_format' )); ?> &bull; <a href=""><?php the_category(', '); ?></a></small>
            </header>
            <div class="post-content">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir leyendo','test'); ?> &rarr;</a>
            </div>
        </article>	<!-- article -->

        <?php endwhile; else:  ?>
            <article class="post resume">
            <header class="post-title">
                <h2><?php _e( 'No hay entradas para mostrar', 'test' ); ?></h2>           
            </header>
            <?php get_search_form(); ?>
        </article>	<!-- article -->


        <?php endif;?>

        <?php if(get_next_posts_link() || get_previous_posts_link()) {?>
                <?php next_post_link(_e( '&larr; Anterior', 'test' ));  ?>
                <?php previus_post_link(_e( 'Siguiente &rarr;', 'test' ));  ?>
            </div>
        <?php } ?>

    </section>


<?php 

if (is_active_sidebar('main_sidebar')) {
    get_sidebar();
}
    
?>


<?php 
    get_footer();
?>
<?php get_header() ?>

<?php 

    while(have_posts()) {
        the_post(); ?> 

        <h1><?php the_title(); ?> Page</h1>
        <?php the_content(); ?>
        
    <?php }

    get_footer(); 
?>
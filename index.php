<?php get_header() ?>

<?php 

    while(have_posts()) {
        the_post(); ?> 
        <h1>fkdjsfh</h1>
        <div class="banner">
            <div class="banner__content">
                <h1><?php the_title(); ?></h1>
                <div class="banner__content-container">
                    <p><?php  ?></p>
                </div>
            </div>
            <div class="banner__hero">
                <img src="" alt="">
            </div>
        </div>
        

    <?php }

    get_footer();
?>
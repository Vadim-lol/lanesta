<?php
/*Template name: blog*/

get_header();
?>

    <main class="main">
        <section class="p-100">
            <div class="container">
                <div class="blog__container">
                    <?php
                    $my_posts = get_posts( array(
                        'numberposts' => 15,
                        'orderby'     => 'date',
                        'post_type'   => 'post',

                    ) );

                    foreach( $my_posts as $post ){
                        $category = get_the_category($post->ID);
                        $current_cat_name = $category[0]->name;?>

                        <div class="blog__item">
                            <a href="<?php get_post_permalink(); ?>">
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="blog1">
                                <span class="blog__category"><?php echo $current_cat_name ; ?></span>
                                <h4><?php echo get_the_title(); ?></h4>
                                <p><?php echo get_the_date() ?></p>
                            </a>
                        </div>
                    <?php }
 ?>
                </div>
            </div>
        </section>
    </main>

<?php

get_footer();

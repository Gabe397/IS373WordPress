
<?php get_header();?>

<div class = "container">
    <div class="jumbotron">
        <?php
            query_posts('posts_per_page=1');
            while(have_posts()) : the_post(); ?>
                <div>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
<?php endwhile; wp_reset_query(); ?>
    </div>
</div>

<?php get_footer();?>


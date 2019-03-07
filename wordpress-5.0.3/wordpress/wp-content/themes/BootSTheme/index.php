
<?php get_header();?>

<div class = "container">
    <div class="jumbotron">
        <?php
            query_posts('posts_per_page=1');
            while(have_posts()) : the_post(); ?>
                <div>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
<?php endwhile; wp_reset_query(); ?>
    </div>
</div>


<div class = "container">
<div>
    <?php while(have_posts()) : the_post(); ?>
    <h3><a href="<?php the_permalink(); ?>"></a></h3>
    <p><?php the_content(); ?></p>
    <p> posted by <?php the_author(); ?>
        <?php endwhile; ?>
</div>

</div>
<?php get_footer();?>


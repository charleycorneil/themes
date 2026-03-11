<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('single-post'); ?>>

                <h1><?php the_title(); ?></h1>

                <p class="p-date"><?php the_time('F j, Y'); ?></p>
                <p class="p-author">By <?php the_author(); ?></p>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="p-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="p-content">
                    <?php the_content(); ?>
                </div>

            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
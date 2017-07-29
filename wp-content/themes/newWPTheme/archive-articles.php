<?php
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : ?>

                <header class="page-header">

                    <h1 class="page-title">Articals</h1>
                </header><!-- .page-header -->

                <?php
                // Start the Loop.
                while (have_posts()) : the_post(); ?>
                    <h2><a href="<?= get_post_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>

                    <p>By: <?php the_author(); ?> @ <?= get_the_date(); ?></p>
                    <a href="<?= get_post_permalink(); ?>">Read More</a>
                    <hr>
                <?php endwhile;
                // Previous/next page navigation.
                the_posts_pagination(array(
                    'prev_text' => __('Previous page', 'twentysixteen'),
                    'next_text' => __('Next page', 'twentysixteen'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>',
                ));

            // If no content, include the "No posts found" template.
            else :
                _e('Sorry, no posts matched your criteria.');

            endif;
            ?>

        </main>
        <!-- .site-main -->
    </div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
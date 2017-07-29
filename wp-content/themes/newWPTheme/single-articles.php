<?php
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) :
                the_post(); ?>

                <header class="page-header">

                    <h1 class="page-title"><?php the_title(); ?></h1>
                </header><!-- .page-header -->

                <?php the_content(); ?>
                <p>
                    <?php echo get_the_term_list($post->ID, 'category', 'Categories: ', ', '); ?>
                </p>
                <p>By: <?php the_author(); ?> @ <?= get_the_date(); ?></p>
                <?php
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
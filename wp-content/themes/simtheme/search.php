<?php get_header(); ?>

THIS IS THE TOP OF SEARCH.PHP

    <section id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="search-title">
                    <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
                </h1>
            </header><!-- .page-header -->

                <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                 //get_template_part('content','none');

                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );

                    endwhile;
                    /*
                    // Previous/next post navigation.
                    twentyfourteen_paging_nav();*/

                else :
                    // If no content, include the "No posts found" template.
                    get_template_part( 'content', 'none' );

                endif;
            ?>

        </div><!-- #content -->
    </section><!-- #primary -->

THIS IS AFTER THE SECTION OF SEARCH.PHP

<?php
// get_sidebar( 'content' );
// get_sidebar();
get_footer();?>
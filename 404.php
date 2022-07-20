<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *
 */

get_header();
?>
    <main id="primary" class="site-main">
        <section class="notfound-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png" alt="404" class="404-img">
            <p>Oops! We can’t seem to find the page you’re looking for, sorry!</p>
        </section>

    </main><!-- #main -->
<?php
get_footer();

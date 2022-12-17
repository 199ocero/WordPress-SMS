<!-- This is the page for single page. -->
<?php
get_header();
while (have_posts()) {
    the_post();?>
        <h1>This is a single page.</h1>
        <h2><?php the_title();?></h2>
        <p><?php the_content();?></p>

    <?php
}
get_footer();
?>
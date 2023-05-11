<!doctype html>

<?php get_header(); ?>


<section>
<!-- ========== START PAGE TEMPLATE ========== -->

  <h2>events</h2>

  <?php
$news_posts = get_posts();
?>
$news_posts = get_posts( [
 'category' => 'news',
 'numberposts' => 3,
 'order' => 'DESC'
] );

foreach ( $news_posts as $post ) {
 setup_postdata($post); ?>
 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 <?php the_excerpt();
}

wp_reset_postdata();

  
<!-- ========== END PAGE TEMPLATE ========== -->
</section>


<?php get_footer(); ?>

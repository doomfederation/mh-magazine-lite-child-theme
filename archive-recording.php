<?php get_header();?>

<?php $loop = new WP_Query( array( 'recording' => 'posts_per_page' => 10 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <?php the_title();?>
  <?php if(has_post_thumbnail() ) { the_post_thumbnail(); } ?>
  <?php the_content();?>
<?php endwhile; ?>

<?php wp_reset_query(); ?>      

<?php get_footer();?>

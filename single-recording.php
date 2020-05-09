<?php get_header();?>

<?php 
  $args = array( 'post_type' => 'recording' );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();

    $postid = get_the_ID();
    $player1 = get_post_meta($postid, 'player1', true);
    $player2 = get_post_meta($postid, 'player2', true);
    $player1_frags = get_post_meta($postid, 'player1_frags', true);
    $player2_frags = get_post_meta($postid, 'player2_frags', true);
    $map = get_post_meta($postid, 'map', true);
    $engine= get_post_meta($postid, 'engine', true);
    $date_played = get_post_meta($postid, 'date_played', true);
    $files = get_post_meta($postid, 'files', true);
    $youtube_link = get_post_meta($postid, 'youtube_link', true);
    $download_link = get_post_meta($postid, 'download_link', true);

    echo "<h1>{$player1} [{$player1_frags}] vs {$player2} [{$player2_frags}]</h1>";
    echo "<h2>{$date_played}</h2>";
    echo "<h2>{$engine}</h2>";
    echo "<h2>{$map}</h2>";

    echo "<p>{$youtube_link}</p>";
    echo "<p>{$download_link}</p>";

    endwhile; 
?>

<?php get_footer();?>

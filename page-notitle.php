<?php

/*
  Template Name: Page No Title
*/

get_header(); ?>

  <?php

  if( have_posts() ):

    while( have_posts() ): the_post(); ?>

    <h1>This is my static title for my contact page</h1>

      <small>Posted on: <?php the_time('j, F Y'); ?>at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

      <p><?php the_content(); ?></p>

    <?php endwhile;

  endif;

  ?>

  <hr>

<?php get_footer(); ?>

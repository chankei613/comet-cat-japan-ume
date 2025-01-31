<?php get_header();?>

<div class="flex justify-between items-start max-w-screen-xl mx-auto py-20 max-md:block max-md:py-10">
  <main class="w-9/12 p-4 max-md:w-full format-content">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
      the_content();
      endwhile;
    endif;
    
    while (have_posts()) : the_post();

      get_template_part('template-parts/content', 'single');

      if (comments_open() || get_comments_number()) :
        comments_template();
      endif;

    endwhile;
    ?>
    </div>
  </main>
  <?php get_sidebar();?>
</div>

<?php get_footer();?>
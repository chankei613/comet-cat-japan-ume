<?php get_header();?>

<div class="flex justify-between items-start max-w-screen-xl mx-auto py-20 max-md:block max-md:py-10">
  <main class="w-9/12 p-4 max-md:w-full format-content">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
      ?>
      <div class="cc-thumbnail"><?php the_post_thumbnail();?></div>
      <div class="cc-head">
        <h1><?php the_title();?></h1>
        <p>Post date：<time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time></p>
        <?php the_category();?>
        <?php the_tags(); ?>
      </div>
      <div class="cc-body">
        <?php the_content( __( 'Continue reading', 'comet-cat-japan-ume' ) );?>
      </div>
      <div class="cc-pager">
        <?php
        wp_link_pages(array(
          'before' => '<div class="page-links">' . __('Pages:', 'comet-cat-japan-ume'),
          'after'  => '</div>',
          'link_before' => '<span>',
          'link_after'  => '</span>',
        ));
        ?>
      </div>
    <?php 
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
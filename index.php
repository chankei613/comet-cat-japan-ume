<?php get_header();?>

<div class="hero bg-thirdplace">
<?php if (get_header_image()) : ?>
    <img src="<?php header_image(); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
<?php 
  else:
  $custom_header_support = get_theme_support('custom-header');
?>
    <img src="<?php echo $custom_header_support[0]["default-image"]; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
<?php endif; ?>
</div>

<div class="flex justify-between items-start max-w-screen-xl mx-auto py-20 max-md:block max-md:py-10">
  <main class="w-9/12 p-4 max-md:w-full">
    <?php 
    if ( have_posts() ) :?>
    <section>
      <h2 class="text-2xl font-bold mb-8"><?php esc_html_e('All Post','comet-cat-japan_ume');?></h2>
      <ul class="flex flex-wrap max-md:block">
        <?php while ( have_posts() ) : the_post();
        $recommend_cat = get_the_category();
        $recommend_name = !empty($recommend_cat[0]->name) ? $recommend_cat[0]->name : "";
        ?>
        <li class="w-1/3 px-2 mb-8 max-md:w-full">
          <a href="<?php the_permalink();?>" class="rounded-3xl overflow-hidden bg-thirdplace square-thumbnail">
          <?php 
          if ( has_post_thumbnail() ) {
            the_post_thumbnail();
          }
          ?>
          </a>
          <a href="<?php the_permalink();?>" class="flex justify-between mt-5">
            <div class="text-sm text-primary"><?php echo $recommend_name;?></div>
            <time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
          </a>
          <h3 class="mt-5 text-sm"><a href="<?php the_permalink();?>">
            <?php
            if(mb_strlen($post->post_title)>40) {
              $title= mb_substr($post->post_title,0,40) ;
                echo $title . '...';
              } else {
                echo $post->post_title;
              }
            ?>
          </a></h3>
        </li>
        <?php endwhile; ?>
      </ul>
    </section>
    <?php endif; ?>

    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        get_template_part('template-parts/content', get_post_format());
      endwhile;

      the_posts_pagination();

    else :
      get_template_part('template-parts/content', 'none');

    endif;
    ?>

  </main>
  <?php get_sidebar();?>
</div>

<?php get_footer();?>
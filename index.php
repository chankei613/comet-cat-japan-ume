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
    <div class="grid grid-cols-12 gap-4 mb-12">
        <?php 
        $sticky = get_option('sticky_posts');
        $args_head_one = array(
          'posts_per_page' => 1,
          'ignore_sticky_posts' => true
        );
        if (!empty($sticky)) {
          $args_head_one['post__in'] = array_slice($sticky, 0, 1);
          $args_head_one['orderby'] = 'post__in';
        }
        $query_head_one = new WP_Query($args_head_one);
        if ( $query_head_one->have_posts() ) :
        while ( $query_head_one->have_posts() ) : $query_head_one->the_post();
        $recommend_cat = get_the_category();
        $recommend_name = !empty($recommend_cat[0]->name) ? $recommend_cat[0]->name : "";
        ?>
        <div class="col-span-12 md:col-span-8 relative"><a href="<?php the_permalink();?>">
            <div class="bg-white rounded-lg shadow">
              <?php
              if (get_post_time('U') > strtotime('-3 days')) {
                echo '<span class="absolute top-4 left-4 bg-pink-200 text-xs px-2 py-1 rounded bg-secondary">NEW</span>';
              }
              ?>
              <div class="w-full h-[400px] rounded-lg bg-thirdplace">
              <?php 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('midium',array('class' => 'rounded-lg object-cover'));
              }
              ?>
              </div>
              <div class="p-4">
                <p class="text-sm text-gray-600"><?php echo $recommend_name;?></p>
                <h2 class="mt-2">
                <?php
                if(mb_strlen($post->post_title)>40) {
                  $title= mb_substr($post->post_title,0,40) ;
                    echo $title . '...';
                  } else {
                    echo $post->post_title;
                  }
                ?>
                </h2>
                <time datetime="<?php the_time('Y-m-d');?>" class="text-sm text-gray-600 mt-2"><?php the_time('Y.m.d');?></time>
                </div>
            </div>
          </a></div>
        <?php 
        endwhile; wp_reset_postdata(); endif; 
        $args_head_two = array(
          'offset' => 1,
          'posts_per_page' => 2,
          'ignore_sticky_posts' => true
        );
        if (!empty($sticky)) {
          $args_head_two['post__in'] = array_slice($sticky, 1, 3);
          $args_head_two['orderby'] = 'post__in';
        }
        $query_head_two = new WP_Query($args_head_two);
        if ( $query_head_two->have_posts() ) :
        ?>
        <div class="col-span-12 md:col-span-4 space-y-4">
            <?php while ( $query_head_two->have_posts() ) : $query_head_two->the_post();?>
            <div class="bg-white rounded-lg shadow">
                <div class="w-full h-[190px] object-cover rounded-lg bg-thirdplace">
                <?php 
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('midium',array('class' => 'rounded-lg object-cover'));
                }
                ?>
                </div>
                <div class="p-4">
                    <h2 class="text-sm text-gray-600">
                    <?php
                    if(mb_strlen($post->post_title)>40) {
                      $title= mb_substr($post->post_title,0,40) ;
                        echo $title . '...';
                      } else {
                        echo $post->post_title;
                      }
                    ?>
                    </h2>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
        <?php endif; ?>
    </div>
    <?php 
    $args_body = array(
      'offset' => 3,
      'ignore_sticky_posts' => true
    );
    
    $query_body = new WP_Query($args_body);
    if ( $query_body->have_posts() ) :?>
    <section>
      <h2 class="text-2xl font-bold mb-8"><?php esc_html_e('All Post','comet-cat-japan_ume');?></h2>
      <ul class="flex flex-wrap max-md:block">
        <?php while ( $query_body->have_posts() ) : $query_body->the_post();
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
        <?php endwhile; wp_reset_postdata();?>
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
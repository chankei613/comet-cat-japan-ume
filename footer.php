</div>
<footer class="bg-thirdplace pb-8 pt-24 px-4">
  <div class="max-w-screen-xl">
    <?php
    printf(
      /* Display link to top page and copyright information */
      esc_html__('Copyright %1$s %2$s', 'comet-cat-japan_ume'),
      date('Y'),
      '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>'
    );
    ?>
  </div>
</footer> 
<?php wp_footer(); ?>
</body>
</html>

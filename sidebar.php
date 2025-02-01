<aside class="w-3/12 p-4 max-md:w-full">
    <?php get_search_form();?>
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <!-- Default content if sidebar has no widgets -->
        <section class="widget">
            <h2 class="widget-title"><?php esc_html_e('Default Sidebar','comet-cat-japan_ume');?></h2>
            <p><?php esc_html_e('Add widgets to this sidebar in the WordPress Dashboard.','comet-cat-japan_ume');?></p>
        </section>
    <?php endif; ?>
</aside>

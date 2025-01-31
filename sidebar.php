<aside class="w-3/12 p-4 max-md:w-full">
    <?php get_search_form();?>
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <div class="bg-gray-400 rounded-full w-32 h-32 mx-auto mb-4"></div>
            <p class="text-center text-sm">WordPressサイトの運営者さんについての説明がここに入ります。</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h4 class="text-center border-b border-gray-300 pb-2 mb-4">Category</h4>
            <ul class="space-y-2">
                <li class="flex justify-between">
                    <span>Photo</span>
                    <span>(3)</span>
                </li>
                <li class="flex justify-between">
                    <span>生活</span>
                    <span>(3)</span>
                </li>
                <li class="flex justify-between">
                    <span>商品レビュー</span>
                    <span>(3)</span>
                </li>
                <li class="flex justify-between">
                    <span>Fashion</span>
                    <span>(3)</span>
                </li>
            </ul>
        </div>
        <!-- Default content if sidebar has no widgets -->
        <section class="widget">
            <h2 class="widget-title"><?php esc_html_e('Default Sidebar','comet-cat-japan_ume');?></h2>
            <p><?php esc_html_e('Add widgets to this sidebar in the WordPress Dashboard.','comet-cat-japan_ume');?></p>
        </section>
    <?php endif; ?>
</aside>

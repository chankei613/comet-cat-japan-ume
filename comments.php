<?php if( have_comments() ): ?>
    <h2>Comments</h2>
    <ol id="comments-list">
        <?php wp_list_comments(); ?>
    </ol>
    <?php endif; ?>
    <?php paginate_comments_links(); ?>
<?php comment_form(); ?>
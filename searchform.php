<form role="search" method="get" class="mb-2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="border border-secondary p-1 rounded" value="<?php echo get_search_query(); ?>" name="s" />
	<input type="submit" class=" text-sm bg-thirdplace border p-1 border-primary rounded" value="<?php echo esc_attr_e('Search', 'comet-cat-japan_ume');?>" />
</form>

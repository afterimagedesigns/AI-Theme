<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
    	<label class="sr-only" for="exampleInputEmail3">Email address</label>
    	<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'ai-theme' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'ai-theme' ); ?>">
  	</div>
  	<button type="submit" class="btn btn-primary"><?php echo esc_attr_x( 'Search', 'submit button', 'ai-theme' ); ?></button>
</form>
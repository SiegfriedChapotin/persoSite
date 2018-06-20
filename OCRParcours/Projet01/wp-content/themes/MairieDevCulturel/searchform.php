<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field search-sm form-control" placeholder="<?php echo esc_attr_x( 'Vous cherchez &hellip;', 'placeholder', 'wp-bootstrap-starter' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'wp-bootstrap-starter' ); ?>">
    </label>
	<label>
   		<input type="submit" class="search-icon btn-sm btn btn-dark" value="<?php echo esc_attr_x('OK', 'submit button', 'wp-bootstrap-starter' ); ?>">
	</label>
</form>
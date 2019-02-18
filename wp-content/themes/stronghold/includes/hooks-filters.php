<?php

	function stronghold_footer_credits() { ?>
		<p>Powered by <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'stronghold' ) ); ?>"><?php printf( __( '%s', 'stronghold' ), 'WordPress' ); ?></a>
		<span class="sep"> .</span>
		<?php printf( __( 'Theme: %1$s by %2$s', 'stronghold' ), 'StrongHold', '<a href="http://www.webulousthemes.com/" rel="designer">Webulous Themes</a>' ); ?></p>
<?php
	}
	
	add_action('stronghold_credits','stronghold_footer_credits');
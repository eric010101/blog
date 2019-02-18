<?php 
/**
 * Customizer Custom Control Class for Menus Dropdown 
 */
if( ! class_exists('Wbls_Customize_Menu_Control')) {
	class Wbls_Customize_Menu_Control extends WP_Customize_Control {
		public $type = 'menu';

		public function render_content() {
			?>
			<label>
				<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
				<select <?php $this->link(); ?>>
					<?php 
						$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
						if(! empty($menus) ) {
							echo '<option value="0">Select Menus</option>';
							foreach ($menus as $menu) {
								echo '<option value="' . $menu->term_id . '">' . $menu->name . '</option>';
							}							
						} else {
							echo '<option value="0">No Menus</option>';
						}
					?>
				</select>
			</label>
		<?php
		}
	}
}
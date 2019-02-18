<?php 
/**
 * Customizer Custom Control Class for Category Dropdown 
 */
if( ! class_exists('Wbls_Customize_Category_Control')) {
	class Wbls_Customize_Category_Control extends WP_Customize_Control {
		public $type = 'category';

		public function render_content() {
			?>
			<label>
				<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
				<select <?php $this->link(); ?>>
					<?php 
						$categories = get_categories();
						if(! empty($categories) ) {
							echo '<option value="0">Select Category</option>';
							foreach ($categories as $category) {
								echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
							}							
						} else {
							echo '<option value="0">No Categoris</option>';
						}
					?>
				</select>
			</label>
		<?php
		}
	}
}
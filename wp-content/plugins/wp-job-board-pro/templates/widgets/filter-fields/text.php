<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="form-group form-group-<?php echo esc_attr($key); ?> <?php echo esc_attr(!empty($field['toggle']) ? 'toggle-field' : ''); ?> <?php echo esc_attr(!empty($field['hide_field_content']) ? 'hide-content' : ''); ?>">
	<?php if ( !isset($field['show_title']) || $field['show_title'] ) { ?>
    	<label for="<?php echo esc_attr( $args['widget_id'] ); ?>_<?php echo esc_attr($key); ?>" class="heading-label">
    		<?php echo wp_kses_post($field['name']); ?>
    		<?php if ( !empty($field['toggle']) ) { ?>
                <i class="fas fa-angle-down"></i>
            <?php } ?>
    	</label>
    <?php } ?>
    <div class="form-group-inner inner <?php echo (!empty($field['icon']))?'has-icon':'' ?>">
	    <?php if ( !empty($field['icon']) ) { ?>
	    	<i class="<?php echo esc_attr( $field['icon'] ); ?>"></i>
	    <?php } ?>
	    <input type="text" name="<?php echo esc_attr($name); ?>" class="form-control <?php echo esc_attr(!empty($field['add_class']) ? $field['add_class'] : '');?>"
	           value="<?php echo esc_attr($selected); ?>"
	           id="<?php echo esc_attr( $args['widget_id'] ); ?>_<?php echo esc_attr($key); ?>" placeholder="<?php echo esc_attr(!empty($field['placeholder']) ? $field['placeholder'] : ''); ?>">
	</div>
</div><!-- /.form-group -->

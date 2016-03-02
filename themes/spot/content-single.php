<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template used for displaying a single article (blog post) with sidebar
 *
 * @package flat-bootstrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_single () ) : ?>
		<?php //get_template_part( 'content', 'post-header' ); ?>
	<?php endif; ?>
	
	<div class="entry-content">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<!-- DISPLAY CUSTOM FIELDS -->
		<?php
			$custom_fields = get_post_meta( get_the_ID() );
			$exclud_arr = array('wpcr_enable', '_wpas_done_all', '_edit_last', '_edit_lock');
			echo '<table data-toggle="table" data-url="data1.json" data-cache="false" data-height="299">';
			echo '<thead>';
			foreach ( $custom_fields as $field_key => $field_values ) {
				foreach ( $field_values as $key => $value )
					if(!in_array($field_key, $exclud_arr)):
					echo '<tr>';
					echo '<th width="40%" style="color:#0A84C1;">'.$field_key.'</th>';
					echo '<th>'.$value.'</th>';
					echo '</tr>';
					//echo $field_key . ' - ' . $value . '<br />';
					endif;
			}
			echo '</thead></table>';
			?>
		<?php // Show the categories and tags ?>
		<?php if ( is_single () ) : ?>
			<?php //get_template_part( 'content', 'post-footer' ); ?>
		<?php endif; ?>

		<?php // If multiple pages, display next/previous page links ?>
		<?php get_template_part( 'content', 'page-nav' ); ?>
		
	</div><!-- .entry-content -->

	<?php //get_template_part( 'content', 'post-nav' ); ?>

</article><!-- #post-## -->

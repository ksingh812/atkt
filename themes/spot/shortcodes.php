<?php
//Add All shortcodes here.
/*
 * Add ROW
 */
function airtkt_row( $atts, $content = "" ) {
	extract(shortcode_atts(array(
		"id" => 'airtkt-row'
		), $atts));
		
	$html = '<div class="row '. $id .'" style="margin-top:10px;">'.do_shortcode($content).'</div>';
	return $html;
}
add_shortcode( 'row', 'airtkt_row' );

/*
 * Add 2-Columns
 */
 function airtkt_2col( $atts, $content = "" ) {
	extract(shortcode_atts(array(
		"id" => '',
		), $atts));
	return '<div class="col-md-6 '. $id .'">'.do_shortcode($content).'</div>';
}
add_shortcode( 'col2', 'airtkt_2col' );

/*
 * Add 3-columns
 */
 function airtkt_3col( $atts, $content = "" ) {
	extract(shortcode_atts(array(
		"id" => '',
		), $atts));
	return '<div class="col-md-4 '. $id .'">'.do_shortcode($content).'</div>';
}
add_shortcode( 'col3', 'airtkt_3col' );

/*
 * Location Block
 */
 function airtkt_location( $atts, $content = "" ) {
	extract(shortcode_atts(array(
		"name" => '',
		"img" => '',
		"id" => 'location-block',
		"link" => '#',
		"num" => ''
		), $atts));
		$html = '<div class="'. $id .'" style="margin-top:30px;">';
		$html .= '<a href="'.$link.'" class="location-link"><img src="'.$img.'" class="img-responsive loc-img" style="min-height:270px;"/></a>';
		$html .= '<div class="loc-name"><h3 style="float:left;margin:0;"><a href="'.$link.'" class="location-link">'.$name.'</a></h3><span style="float:right;">'.$num.' Hotels</span></div>';
		$html .= '</div>';
	return $html;
}
add_shortcode( 'location', 'airtkt_location' );
?>
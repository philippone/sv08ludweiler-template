<?php
function modChrome_sv08section($module, &$params, &$attribs)
{

	$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

	echo '<section><div class="sv08-section">';
	// section-anchor
	echo '<a id="' . $module->title . '" class="scrollspy" ></a>';
//	if ($module->showtitle) {
//		echo '<div class="sv08-section'. $moduleclass_sfx .'">';
//		echo '<h4>' . $module->title . '</h4>';
//		echo '</div>';
//	}

	echo $module->content;
	echo '</div></section>';


}


//function modChrome_teaserbig( $module, &$params, &$attribs )
//{
//
//	echo '<div class="parallax-container"><div class="parallax">';
////	 section-anchor
//	echo '<img src="';
//	echo $params->get('backgroundimage');
//	echo '" />';
//
//	echo '</div></div>';
//
//	// ohne parallax
//	//echo 'div class="custom-sv08-teaser-big" style="background-image:'.$params->get('backgroundimage').'"></div';
//}

function modChrome_navmobile($module, &$params, &$attribs)
{

	echo '<div class="nav-mobile">';

	echo $module->content;

	echo '</div>';

}

?>

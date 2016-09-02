<?php
function modChrome_sv08section( $module, &$params, &$attribs )
{

	echo '<div>';
	// section-anchor
	echo '<a id="'. $module->title .'" class="scrollspy" ></a>';
//	if ($module->showtitle)
//	{
//		echo '<h3>' .$module->title .'</h3>';
//	}

	echo $module->content;
	echo '</div>';
}


//function modChrome_teaserbig( $module, &$params, &$attribs )
//{

//	echo '<div class="parallax-container"><div class="parallax">';
	// section-anchor
//	echo '<img src="';
//	echo $params->get('backgroundimage');
//	echo '" />';

//	echo '</div></div>';

	// ohne parallax
	//echo 'div class="custom-sv08-teaser-big" style="background-image:'.$params->get('backgroundimage').'"></div';
//}

function modChrome_navmobile( $module, &$params, &$attribs )
{

	echo '<div class="nav-mobile">';

	echo $module->content;

	echo '</div>';

}

?>

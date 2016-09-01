<?php
function modChrome_sv08section( $module, &$params, &$attribs )
{

	echo '<div>';
	echo '<a id="'. $module->title .'" class="section-anchor" ></a>';
//	if ($module->showtitle)
//	{
//		echo '<h3>' .$module->title .'</h3>';
//	}

	echo $module->content;
	echo '</div>';
}
?>

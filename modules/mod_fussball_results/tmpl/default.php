<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


if ($de_title_displayed):
	echo '<h4>';
	echo $de_title;
	echo '</h4>';
endif;
?>

<div class="row">
	<div class="col s12">
		<ul class="tabs">
			<li class="tab col s3"><a class="active" href="#Spieltage">Spieltage</a></li>
			<li class="tab col s3"><a href="#Mannschaftsspielplan">Mannschaftsspielplan</a></li>
		</ul>
	</div>
	<div id="Spieltage" class="col s12">
		<div id="widget<?php echo $counter ?>"></div>
		<script type="text/javascript">
			new fussballdeWidgetAPI().showWidget('widget<?php echo $counter ?>', '<?php echo $de_id; ?>');
		</script>
	</div>
	<div id="Mannschaftsspielplan" class="col s12">
		<div id="widget<?php echo $counter2 ?>"></div>
		<script type="text/javascript">
			new fussballdeWidgetAPI().showWidget('widget<?php echo $counter2 ?>', '<?php echo $de_id2; ?>');
		</script>
	</div>
</div>
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

<div id="widget<?php echo $counter ?>"></div>
<script type="text/javascript">
	new fussballdeWidgetAPI().showWidget('widget<?php echo $counter ?>', '<?php echo $de_id; ?>');
</script>
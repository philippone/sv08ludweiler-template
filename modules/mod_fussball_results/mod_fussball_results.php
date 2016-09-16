<?php

/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

defined('_JEXEC') or die;

// Include the helper functions only once
//require_once __DIR__ . '/helper.php';


//load javascript from www.fussball.de
$document = JFactory::getDocument();
$document->addScript('https://www.fussball.de/static/layout/fbde2/egm//js/widget2.js');


$de_title = $params->get('module_title', '1');
$de_title_displayed = $params->get('module_title_displayed', '1');
$de_id = $params->get('module_comp_id', '1');
$de_id2 = $params->get('module_staffel_id', '1');

$counter = $params->get('module_comp_counter', '1');
$counter2 = $counter + 1;

require JModuleHelper::getLayoutPath('mod_fussball_results');

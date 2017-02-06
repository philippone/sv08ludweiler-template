<?php
/**
 * @version        $Id: nameofplugin.php revision date lasteditedby $
 * @package        Joomla
 * @subpackage    Content
 * @copyright    Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license        GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined('_JEXEC') or die('Restricted access');


class plgArticleReportplugin extends JPlugin
{

	/**
	 * Load the language file on instantiation.
	 * Note this is only available in Joomla 3.1 and higher.
	 * If you want to support 3.0 series you must override the constructor
	 *
	 * @var boolean
	 * @since <your version>
	 */
	protected $autoloadLanguage = true;

	/**
	 * Prepare form and add my field.
	 *
	 * @param   JForm $form The form to be altered.
	 * @param   mixed $data The associated data for the form.
	 *
	 * @return  boolean
	 *
	 * @since   <your version>
	 */
	function onContentPrepareForm($form, $data)
	{
		$app = JFactory::getApplication();
		$option = $app->input->get('option');

		switch ($option) {
			case 'com_content' :
				if ($app->isAdmin()) {
					JForm::addFormPath(__DIR__ . '/forms');
					$form->loadFile('contact', false);
				}

				return true;
		}

		return true;
	}
}

?>

<?php

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$user = JFactory::getUser();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Output as HTML5
$doc->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option = $app->input->getCmd('option', '');
$view = $app->input->getCmd('view', '');
$layout = $app->input->getCmd('layout', '');
$task = $app->input->getCmd('task', '');
$itemid = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');
JHtml::_('jquery.framework');

$doc->addScriptVersion($this->baseurl . '/templates/' . $this->template . '/js/template.js');
$doc->addScriptVersion($this->baseurl . '/templates/' . $this->template . '/js/materialize.min.js');

// Add Stylesheets
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/template.css');
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/materialize.min.css');

// Load optional RTL Bootstrap CSS
//JHtml::_('bootstrap.loadCss', false, $this->direction);

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>"
	  dir="<?php echo $this->direction; ?>">
	<head>
		<meta name="viewport"
			  content="width=device-width, initial-scale=1.0"/>
		<jdoc:include type="head"/>
	</head>
	<body class="site <?php echo $option
		. ' view-' . $view
		. ($layout ? ' layout-' . $layout : ' no-layout')
		. ($task ? ' task-' . $task : ' no-task')
		. ($itemid ? ' itemid-' . $itemid : '')
		. ($params->get('fluidContainer') ? ' fluid' : '');
	echo($this->direction == 'rtl' ? ' rtl' : '');
	?>">
		<!-- Body -->
		<div class="container">
			<?php require_once 'html/body.php'; ?>
		</div>

		<jdoc:include type="modules"
					  name="debug"
					  style="none"/>
	</body>
</html>

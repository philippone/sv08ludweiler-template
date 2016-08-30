<!-- Language module - if activated -->
<?php if ($this->countModules( 'language' )) { ?>
	<jdoc:include type="modules" name="language" style="none" title="<?php echo JText::_('TPL_JOOMBOOT_CHOOSE_LANGUAGE'); ?>" />
<?php } ?>

<!-- Messages module -->
<jdoc:include type="message" />

<!-- Main Content -->
<jdoc:include type="component" />
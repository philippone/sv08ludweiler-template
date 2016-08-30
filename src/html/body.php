<!-- Language module - if activated -->
<?php if ($this->countModules('language')) { ?>
	<jdoc:include type="modules"
				  name="language"
				  style="none"
				  title="<?php echo JText::_('TPL_JOOMBOOT_CHOOSE_LANGUAGE'); ?>"/>
<?php } ?>

<!-- Messages module -->
<jdoc:include type="message" style="none"/>


<!-- Header -->
<!--<header class="header"-->
<!--		role="banner">-->
<!--</header>-->

<!-- Top Navigation -->
<?php if ($this->countModules('navbar')) : ?>
	<nav class="navigation col s12"
		 role="navigation">
		<div class="nav-wrapper">
			<a href="#!"
			   class="brand-logo">SV 08 Logo</a>
			<a href="#"
			   data-activates="mobile-demo"
			   class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li>
					<jdoc:include type="modules"
								  name="navbar"
								  style="none"/>
				</li>
				<jdoc:include type="modules" name="search-pos" style="none" />
			</ul>
			<ul class="side-nav"
				id="mobile-demo">
				<li>
					<jdoc:include type="modules"
								  name="navbar"
								  style="none"/>
				</li>
			</ul>
		</div>
	</nav>

<?php endif; ?>


<!-- teaser-big -->


<!-- SubNavigation -->



<!-- Main Content -->
<jdoc:include type="component" style="none"/>


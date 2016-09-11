<!-- Header -->
<!--<header class="header"-->
<!--		role="banner">-->
<!--</header>-->

<header>
<!-- Top Navigation -->
<?php if ($this->countModules('navbar')) : ?>
	<div class="navbar-fixed">
		<nav class="navbar col s12 green darken-4"
		 	role="navigation">
			<div class="container">
				<div class="nav-wrapper">
					<img class="wappen-desktop" src="<?php echo JURI::base(); ?>/templates/<?php echo JFactory::getApplication()->getTemplate(); ?>/img/wappen.png" alt="wappen"/>
					<a href="#!"
					   class="brand-logo">SV 08 Ludweiler</a>
					<a href="#"
					   data-activates="mobile-demo"
					   class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li>
							<jdoc:include type="modules" name="navbar" />
						</li>
						<li><jdoc:include type="modules" name="search-pos" /></li>
					</ul>
					<ul class="side-nav"
						id="mobile-demo">
						<div class="wappen-mobile-container">
							<img class="wappen-mobile" src="<?php echo JURI::base(); ?>/templates/<?php echo JFactory::getApplication()->getTemplate(); ?>/img/wappen.png" alt="wappen"/>
						</div>
						<jdoc:include type="modules" name="navbar"/>
					</ul>
				</div>
			</div>
		</nav>
	</div>
<?php endif; ?>
<!-- Language module - if activated -->
<?php if ($this->countModules('language')) { ?>
	<jdoc:include type="modules"
				  name="language"
				  style="none"
				  title="<?php echo JText::_('TPL_JOOMBOOT_CHOOSE_LANGUAGE'); ?>"/>
<?php } ?>

<!-- teaser-big -->
<?php if ($this->countModules('teaser-big')) : ?>
<div class="teaser-big-container">
	<div class="teaser-big col s12">
		<jdoc:include type="modules" name="teaser-big" style="teaserbig"/>
	</div>
</div>
<?php endif; ?>
<!-- sub-navbar -->
<?php if ($this->countModules('sub-navbar')) : ?>
	<nav class="sub-navigation col s12 green darken-3">
		<div class="container">
<!--			<ul class="left">-->
				 <jdoc:include type="modules" name="sub-navbar" style="none"/>
<!--			</ul>-->
		</div>
	</nav>
<?php endif; ?>

<?php if ($this->countModules('sub-navbar') == 0 && $this->countModules('highlight-top'))  : ?>
	<div class="highlight-top container">
		<jdoc:include type="modules" name="highlight-top"/>
	</div>
<?php endif;?>

</header>

<!-- Messages module -->
<jdoc:include type="message"/>

<main >
	<?php if ($this->countModules('left')) : ?>
		<div class="row-left"">
			<jdoc:include type="modules" name="left"/>
		</main>
	<?php endif; ?>

	<div class="row-middle">

		<!-- sub-component-top -->
		<?php if ($this->countModules('sub-component-top')) : ?>
			<jdoc:include type="modules" name="sub-component-top" style="sv08section"/>
		<?php endif; ?>

		<!-- Main Content -->
		<jdoc:include type="component"/>

		<!-- sub-component-bottom -->
		<?php if ($this->countModules('sub-component-bottom')) : ?>
			<jdoc:include type="modules" name="sub-component-bottom"/>
		<?php endif; ?>
	</div>

	<?php if ($this->countModules('right')) : ?>
		<div class="row-right">
			<jdoc:include type="modules" name="right"/>
		</div>
	<?php endif; ?>
</main>

<?php if ($this->countModules('footer')) : ?>
	<footer class="page-footer green darken-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">SV 08 Ludweiler</h5>
					<img class="wappen" src="<?php echo JURI::base(); ?>/templates/<?php echo JFactory::getApplication()->getTemplate(); ?>/img/wappen.png" alt="wappen"/>
					<p class="grey-text text-lighten-4">Der Traditionsverein aus dem Warndt.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Menu</h5>
					<ul>
						<li><jdoc:include type="modules" name="navbar" /></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<jdoc:include type="modules" name="footer" />
<!--				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
				<jdoc:include type="modules" name="footer-menu"/>
			</div>
		</div>
	</footer>
<?php endif; ?>



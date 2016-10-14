<header>
<!-- Top Navigation -->
<?php if ($this->countModules('navbar')) : ?>
	<div class="navbar-fixed">
		<nav class="navbar col s12 green darken-4"
		 	role="navigation">
			<div class="container">
				<div class="nav-wrapper">
					<img class="wappen-desktop" src="<?php echo JURI::base(); ?>/templates/<?php echo JFactory::getApplication()->getTemplate(); ?>/img/wappen.png" alt="wappen"/>
					<a href="<?php echo JURI::base(); ?>index.php"
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
<!-- navbar-extended -->
<?php if ($this->countModules('navbar-extended')) : ?>
	<div class="navbar-fixed-2">
	<nav class="navbar-extended col s12 green darken-3">
		<div class="container">
			<!--			<ul class="left">-->
			<jdoc:include type="modules" name="navbar-extended" style="none"/>
			<!--			</ul>-->
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
		<jdoc:include type="modules" name="teaser-big" style="teaserbig"/>
</div>
<?php endif; ?>
<?php if ($this->countModules('teaser-big-no-style')) : ?>
	<div class="teaser-big-container">
		<jdoc:include type="modules" name="teaser-big-no-style" style=""/>
	</div>
<?php endif; ?>
<!-- sub-navbar -->
<?php if ($this->countModules('sub-navbar')) : ?>
	<nav class="sub-navigation col s12 green darken-3">
		<div class="container">
				 <jdoc:include type="modules" name="sub-navbar" style="none"/>
		</div>
	</nav>
<?php endif; ?>

<?php if ($this->countModules('sub-navbar') == 0 && $this->countModules('highlight-top'))  : ?>
	<div class="highlight-top">
		<jdoc:include type="modules" name="highlight-top"/>
	</div>
<?php endif;?>
</header>
<!-- Messages module -->
<jdoc:include type="message"/>
<main>
	<?php if ($this->countModules('banner-partner-premium')) : ?>
		<div class="banner-partner-premium">
			<div class="center">
				<jdoc:include type="modules" name="banner-partner-premium"/>
			</div>
		</div>
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
<?php if ($this->countModules('sub-footer')) : ?>
	<jdoc:include type="modules" name="sub-footer" />
<?php endif; ?>
<?php if ($this->countModules('footer')) : ?>
	<footer class="page-footer green darken-4">
		<div class="row green darken-3">
			<div class="wappen-container center">
				<img class="wappen" src="<?php echo JURI::base(); ?>/templates/<?php echo JFactory::getApplication()->getTemplate(); ?>/img/wappen.png" alt="wappen"/>
			</div>
	<?php if ($this->countModules('banner-partner')) : ?>
			<div class="banner-partner container">
				<a id="Partner" class="scrollspy"></a>
				<h4>Partner</h4>
				<div class="center">
					<jdoc:include type="modules" name="banner-partner"/>
				</div>
			</div>
	<?php endif; ?>
		</div>
		<?php if ($this->countModules('banner-social-media')) : ?>
			<div class="row-social-media container">
				<a id="Social-Media" class="scrollspy"></a>
				<h4>Social Media</h4>
				<div class="center">
					<jdoc:include type="modules" name="banner-social-media"/>
				</div>
			</div>
		<?php endif; ?>
		<?php if ($this->countModules('footer-menu')) : ?>
			<!--			footer-menu-->
			<div class="footer-menu container">
				<jdoc:include type="modules" name="footer-menu"/>
			</div>
		<?php endif; ?>
			<!--			copyright-->
			<div class="row">
				<div class="footer-copyright">
					<div class="container">
						<jdoc:include type="modules" name="footer"/>
					</div>
				</div>
			</div>
	</footer>
<?php endif; ?>
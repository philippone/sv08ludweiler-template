<!-- Header -->
<!--<header class="header"-->
<!--		role="banner">-->
<!--</header>-->

<!-- Top Navigation -->
<?php if ($this->countModules('navbar')) : ?>
	<div class="navbar-fixed">
		<nav class="navbar col s12"
		 	role="navigation">
			<div class="nav-wrapper">
				<a href="#!"
				   class="brand-logo">SV 08 Logo</a>
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
					<li>
						<jdoc:include type="modules" name="navbar" />
					</li>
				</ul>
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
<!-- Messages module -->
<jdoc:include type="message"/>
<!-- teaser-big -->
<?php if ($this->countModules('teaser-big')) : ?>
<div class="parallax-container">
	<div class="teaser-big col s12 parallax">
		<jdoc:include type="modules" name="teaser-big" style="none"/>
	</div>
</div>
<?php endif; ?>
<!-- sub-navbar -->
<?php if ($this->countModules('sub-navbar')) : ?>
	<nav class="sub-navigation col s12">
		<ul class="left">
			<li>
				<jdoc:include type="modules" name="sub-navbar" style="none"/>
			</li>
		</ul>
	</nav>
<?php endif; ?>


<div class="content row">

	<?php if ($this->countModules('left')) : ?>
		<div class="row-left"">
			<jdoc:include type="modules" name="left"/>
		</div>
	<?php endif; ?>

	<div class="row-middle">

		<!-- sub-component-top -->
		<?php if ($this->countModules('sub-component-top')) : ?>
			<jdoc:include type="modules" name="sub-component-top"/>
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

</div>



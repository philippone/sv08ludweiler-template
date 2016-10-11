<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<ul class="category-module<?php echo $moduleclass_sfx; ?>">
	<?php if ($params->get('module_title_displayed', 0)):
		echo "<h4>" . $params->get('module_title', 0) . "</h4>";
	endif;
	?>
	<?php if ($grouped) : ?>
		<?php foreach ($list as $group_name => $group) : ?>
			<li>
				<div class="mod-articles-category-group"><?php echo $group_name; ?></div>
				<ul>
					<?php foreach ($group as $item) : ?>
						<li>
							<?php if ($params->get('link_titles') == 1) : ?>
								<a class="mod-articles-category-title <?php echo $item->active; ?>"
								   href="<?php echo $item->link; ?>">
									<?php echo $item->title; ?>
								</a>
							<?php else : ?>
								<?php echo $item->title; ?>
							<?php endif; ?>

							<?php if ($item->displayHits) : ?>
								<span class="mod-articles-category-hits">
								(<?php echo $item->displayHits; ?>)
							</span>
							<?php endif; ?>

							<?php if ($params->get('show_author')) : ?>
								<span class="mod-articles-category-writtenby">
								<?php echo $item->displayAuthorName; ?>
							</span>
							<?php endif; ?>

							<?php if ($item->displayCategoryTitle) : ?>
								<span class="mod-articles-category-category">
								(<?php echo $item->displayCategoryTitle; ?>)
							</span>
							<?php endif; ?>

							<?php if ($item->displayDate) : ?>
								<span class="mod-articles-category-date"><?php echo $item->displayDate; ?></span>
							<?php endif; ?>

							<?php if ($params->get('show_introtext')) : ?>
								<p class="mod-articles-category-introtext">
									<?php echo $item->displayIntrotext; ?>
								</p>
							<?php endif; ?>

							<?php if ($params->get('show_readmore')) : ?>
								<p class="mod-articles-category-readmore">
									<a class="mod-articles-category-title <?php echo $item->active; ?>"
									   href="<?php echo $item->link; ?>">
										<?php if ($item->params->get('access-view') == false) : ?>
											<?php echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE'); ?>
										<?php elseif ($readmore = $item->alternative_readmore) : ?>
											<?php echo $readmore; ?>
											<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
											<?php if ($params->get('show_readmore_title', 0) != 0) : ?>
												<?php echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit')); ?>
											<?php endif; ?>
										<?php elseif ($params->get('show_readmore_title', 0) == 0) : ?>
											<?php echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE'); ?>
										<?php else : ?>
											<?php echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE'); ?>
											<?php echo JHtml::_('string.truncate', ($item->title), $params->get('readmore_limit')); ?>
										<?php endif; ?>
									</a>
								</p>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</li>
		<?php endforeach; ?>
	<?php else : ?>
		<div class="row-col-wrap">
			<?php foreach ($list as $item) : ?>
				<!--				<div class="col s12">-->
				<div class="card hoverable waves-effect waves-brown waves-ripple"
					 onclick="window.location='<?php echo $item->link; ?>'">
					<?php if ($item->images && json_decode($item->images)->image_intro): ?>
						<div class="article-image-container">
							<img src="<?php echo json_decode($item->images)->image_intro; ?>"
								 alt="<?php echo $item->title; ?>"/>
						</div>
					<?php endif; ?>
					<div class="card-content">

						<?php if ($params->get('link_titles') == 1) : ?>
							<div class="article-title-container">
								<a class="article-title <?php echo $item->active; ?>"
								   href="<?php echo $item->link; ?>">
									<?php echo $item->title; ?>
								</a>
							</div>
						<?php else : ?>
							<span class="card-title">
								<?php echo $item->title; ?>
							</span>
						<?php endif; ?>

						<?php if ($item->displayCategoryTitle) : ?>
							<p class="article-category">
								<?php echo $item->displayCategoryTitle; ?>
							</p>
						<?php endif; ?>

						<div class="article-info-container">
							<?php if ($item->displayHits) : ?>
								<p class="mod-articles-category-hits">
									Aufrufe: <?php echo $item->displayHits; ?>
								</p>
							<?php endif; ?>

							<?php if ($params->get('show_author')) : ?>
								<p class="mod-articles-category-writtenby">
									<?php echo $item->displayAuthorName; ?>
								</p>
							<?php endif; ?>

							<?php if ($item->displayDate) : ?>
								<p class="mod-articles-category-date">
									<?php echo $item->displayDate; ?>
								</p>
							<?php endif; ?>
						</div>

						<?php if ($params->get('show_introtext')) : ?>
							<p class="mod-articles-category-introtext">
								<?php echo $item->displayIntrotext; ?>
							</p>
						<?php endif; ?>
					</div>
					<div class="card-action">
						<?php if ($params->get('show_readmore')) : ?>
							<a class="mod-articles-category-title btn green darken-4 <?php echo $item->active; ?>"
							   href="<?php echo $item->link; ?>">
								<?php if ($item->params->get('access-view') == false) : ?>
									<?php echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE'); ?>
								<?php elseif ($readmore = $item->alternative_readmore) : ?>
									<?php echo $readmore; ?>
									<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
								<?php elseif ($params->get('show_readmore_title', 0) == 0) : ?>
									<?php echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE'); ?>
								<?php else : ?>
									<?php echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE'); ?>
									<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
								<?php endif; ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
				<!--			</div>-->
			<?php endforeach; ?>
		</div>
		<?php if ($params->get('category_show_all') == 1) : ?>
			<div class="row center">
				<a class="waves-effect waves-light btn-large green darken-4"
				   href="<?php echo JURI::root(); ?>index.php/<?php echo $params->get('category_link'); ?>">Zeige
					alle Artikel</a>

			</div>
		<?php endif; ?>
	<?php endif; ?>
</ul>

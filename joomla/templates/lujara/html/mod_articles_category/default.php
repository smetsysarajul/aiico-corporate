<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$categoryList = array();
foreach ($list as $key => $listItem) {
	$category = $listItem->category_title;
	if (array_key_exists($category, $categoryList)) {
		$categoryList[$category][]=$listItem;
	}
	else{
		$categoryList[$category]=[$listItem];
	}
	
}
?>

	<?php if ($grouped) : ?>
	<ul class="category-module<?php echo $moduleclass_sfx; ?> mod-list">
		<?php foreach ($list as $group_name => $group) : ?>
		<li>
			<div class="mod-articles-category-group"><?php echo JText::_($group_name); ?></div>
			<ul>
				<?php foreach ($group as $item) : ?>
					<li>
						<?php if ($params->get('link_titles') == 1) : ?>
							<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
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

						<?php if ($params->get('show_tags', 0) && $item->tags->itemTags) : ?>
							<div class="mod-articles-category-tags">
								<?php echo JLayoutHelper::render('joomla.content.tags', $item->tags->itemTags); ?>
							</div>
						<?php endif; ?>

						<?php if ($params->get('show_introtext')) : ?>
							<p class="mod-articles-category-introtext">
								<?php echo $item->displayIntrotext; ?>
							</p>
						<?php endif; ?>

						<?php if ($params->get('show_readmore')) : ?>
							<p class="mod-articles-category-readmore">
								<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
									<?php if ($item->params->get('access-view') == false) : ?>
										<?php echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE'); ?>
									<?php elseif ($readmore = $item->alternative_readmore) : ?>
										<?php echo $readmore; ?>
										<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
											<?php if ($params->get('show_readmore_title', 0) != 0) : ?>
												<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
											<?php endif; ?>
									<?php elseif ($params->get('show_readmore_title', 0) == 0) : ?>
										<?php echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE'); ?>
									<?php else : ?>
										<?php echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE'); ?>
										<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
									<?php endif; ?>
								</a>
							</p>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</li>
		<?php endforeach; ?>
		</ul>
	<?php else : ?>
		<!-- put the custom code here -->
			<section class="section section__products">
			  <div class="container">
			    <div class="section__intro">
			      <h3 class="section__heading">Need a cover as an individual or corporate body?</h3>
			      <p class="section__sub-heading">
			        Our products are made specially for you. Get access to fully customised portfolios and a range of
			        solutions developed by our experts. We offer a wide range of products and services which are tailored
			        towards our customers' needs.
			      </p>
			    </div>
			
			    <div class="tabs product-tabs">
			      <ul class="nav justify-content-center mb-5" id="myTab" role="tablist">
<?php $ct=0?>
			      	<?php foreach (array_keys($categoryList) as $key): ?>
			      		<?php $keyTag = str_replace(' ', '_', $key); ?>

			        <li class="nav-item">
			          <a
			            class="nav-link nav-link-home <?= $ct++<=0?'active':''?> d-flex align-items-center justify-content-center"
			            id="<?=$key?>-tab"
			            data-toggle="tab"
			            href="#<?=$keyTag?>"
			            role="tab"
			            aria-controls="<?=$keyTag?>"
			            aria-selected="true"
			            ><i class=" pr-3"></i><?=$key?></a
			          >
			        </li>
			        
			        <?php endforeach ?>
			      </ul>

			      <div class="tab-content tabs__inner" id="myTabContent">
			          <?php $counter=0;?>
			      	<?php foreach ($categoryList as $key => $categories): ?>
			      	
			      		<?php $keyTag = str_replace(' ', '_', $key); ?>
			        <div class="tab-pane fade show <?= $counter++<=0?'active':''?>" id="<?=$keyTag?>" role="tabpanel" aria-labelledby="<?=$keyTag?>">
			          <div class="row">
			          	<?php foreach ($categories as $article): ?>
			          		<?php 
			          			$image = json_decode($article->images);
			          			$imagePath =$image->image_intro?$image->image_intro:'images/products/annuity.png';
			          		 ?>
			          		<div class="col-md-4 col-lg-3 mb-5">
			          		  <div class="card">
			          		    <div class="card__image" style="background-image: url('<?=$imagePath?>')"></div>
			          		    <div class="card__content">
			          		      <a class="card__title" href="<?=$article->link?>"
			          		        ><?=$article->title?> </a
			          		      >
			          		      <p class="card__text"><?php echo substr( strip_tags($article->introtext), 0,150) ?></p>
			          		    </div>
			          		  </div>
			          		</div>
                           
			          	<?php endforeach ?>
			          	 </div>
			          </div>
			          	<?php endforeach ?>
			        </div>

			      </div>
			    </div>
			</section>
	<?php endif; ?>

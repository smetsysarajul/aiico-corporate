<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_breadcrumbs
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$app = JFactory::getApplication();
$activeMenu = $app->getMenu()->getActive();
$article         = & JTable::getInstance('Content', 'JTable');
$table_plan_return  = $article->load(array('id'=>$activeMenu->query['id']));
$imageParam = json_decode($article->images);
$imagePath = $imageParam->image_intro?$imageParam->image_intro:"images/about/about.png";
$separator='';
?>
<section aria-label="<?php echo $module->name; ?>" role="navigation" class="page-intro page-intro--alt" style="background-image: url(<?=$imagePath?>)">
	<div class="container">
		<div class="row">
			<div class="col">
				<nav aria-label="breadcrumb">
	<ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb<?php echo $moduleclass_sfx; ?>">
		<?php if ($params->get('showHere', 1)) : ?>
			<li class="breadcrumb-item">
				<?php echo JText::_('MOD_BREADCRUMBS_HERE'); ?>&#160;
			</li>
		<?php endif; ?>

		<?php
		// Get rid of duplicated entries on trail including home page when using multilanguage
		for ($i = 0; $i < $count; $i++)
		{
			if ($i === 1 && !empty($list[$i]->link) && !empty($list[$i - 1]->link) && $list[$i]->link === $list[$i - 1]->link)
			{
				unset($list[$i]);
			}
		}

		// Find last and penultimate items in breadcrumbs list
		end($list);
		$last_item_key   = key($list);
		prev($list);
		$penult_item_key = key($list);

		// Make a link if not the last item in the breadcrumbs
		$show_last = $params->get('showLast', 1);
		$shown=false;
		// Generate the trail
		foreach ($list as $key => $item) :
			if ($key !== $last_item_key) :
				// Render all but last item - along with separator ?>
				<?php if ($shown): ?>
					<?php continue; ?>
				<?php else: ?>
					
				
				<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<?php if (!empty($item->link)) : ?>
						<a itemprop="item" href="<?php echo $item->link; ?>" class="pathway"><span itemprop="name"><?php echo $item->name; ?></span></a>
					<?php else : ?>
						<span itemprop="name">
							<?php echo $item->name; ?>
						</span>
					<?php endif; ?>

					<?php if (($key !== $penult_item_key) || $show_last) : ?>
						<span class="divider">
							<?php echo $separator; ?>
						</span>
					<?php endif; ?>
					<meta itemprop="position" content="<?php echo $key + 1; ?>">
				</li>
				<?php $shown=true; ?>
				<?php endif ?>
			<?php elseif ($show_last) :
				// Render last item if reqd. ?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item active">
					<span itemprop="name">
						<?php echo $item->name; ?>
					</span>
					<meta itemprop="position" content="<?php echo $key + 1; ?>">
				</li>
			<?php endif;
		endforeach; ?>
	</ol>
				</nav>
				<h3 class="page-title"><?=$activeMenu->title?></h3>
				<?php 
				$pageTitle =$activeMenu->params->get('page_heading');
				 ?>
				<p class="page-desc"><?=$pageTitle?$pageTitle:$article->title?> </p>
			</div>
		</div>
	</div>
	
</section>
<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lujaracarousel
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// $num = count($list);
// echo "now things are working from the default fi";
// print_r($otherParam['type']);exit;
$app = JFactory::getApplication();
$menu = $app->getMenu();
$active = $menu->getActive();
$default = $menu->getDefault();
$parentMenu = $menu->getItem($active->parent_id);
?>

<!-- the main code for the view will start here -->
<main class="services">
  <section class="page-intro">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="mx-auto" style="max-width: 450px">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$default->link?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $parentMenu->link ?>"><?php echo $parentMenu->title ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $active->title?></li>
              </ol>
            </nav>
            <h3 class="page-title1 pl-1"> <?php echo $settings['plan_title'] ?></h3>
          </div>
        </div>
        <div class="col-md-6 text-left text-md-right service-image">
          <img src="<?php echo $settings['caption_image'] ?>" width="95%" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="section pt-2">
    <div class="container-fluid p-0">
      <div class="tabs services-tab">
        <ul class="nav nav-fill bg-white" id="servicesTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link product active" id="product-tab" data-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="true">The Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link benefit" id="benefit-tab" data-toggle="tab" href="#benefit" role="tab" aria-controls="benefit" aria-selected="false">
              The Benefit
            </a>
          </li>
          <?php if ($settings['premium_section']): ?>
             <li class="nav-item">
            <a class="nav-link premium" id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="premium" aria-selected="false">
              Premium
            </a>
          </li>
          <?php endif ?>

          <li class="nav-item">
            <a class="nav-link quote" href="<?=$menu->getItem($settings['action_link'])->link?>">
              <?=$settings['action_text']?>
            </a>
          </li>
        </ul>

        <div class="container">
          <div class="tab-content tabs__inner" id="myTabContent">
            <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="product-tab">
              <?php echo $settings['product_section'] ?>
            </div>

            <div class="tab-pane fade" id="benefit" role="tabpanel" aria-labelledby="benefit-tab">
              <?php echo $settings['benefit_section'] ?>
            </div>
            <?php if ($settings['premium']): ?>
              <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                <?php echo $settings['premium_section'] ?>
              </div>
            <?php endif ?>

          </div>
        </div>
      </div>
    </div>
  </section>
  <?php echo $settings['extra'] ?>
</main>

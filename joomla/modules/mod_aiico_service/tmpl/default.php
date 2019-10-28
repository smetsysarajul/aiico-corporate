<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lujaracarousel
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$num = count($list);
// echo "now things are working from the default fi";
// print_r($otherParam['type']);exit;
$app = JFactory::getApplication();
$menu = $app->getMenu();
?>

<!-- the main code for the view will start here -->
<?php if ($otherParam['type']=='finance'): ?>
        <section class="section section__numbers">
        <div class="container">
          <div class="text-center mb-4">
            <h3 class="section__heading mb-2"><?=$otherParam['caption']?></h3>
            <p>
              <?=$otherParam['subtitle']?>
            </p>
          </div>

          <div class="numbers__carousel pt-5 mb-5">
            <?php foreach ($list as $key => $item): ?>
              <div class="slick__item">
              <div class="number-item">
                <?php if ($item->icon): ?>
                  <img src="<?=JURI::base().$item->icon?>" class="pb-5" width="54" alt="" />
                <?php else: ?>
                  <span class="fa <?=$item->icon_class?>"></span>
                <?php endif ?>
               
                <h3 class="heading heading--secondary">
                  <?=$item->slide_caption?>
                </h3>
                <p class="small text-uppercase">
                  <?=$item->title_text?>
                </p>
              </div>
            </div>
            <?php endforeach ?>
          </div>
          <div class="text-center">
            <a
              href="<?=$menu->getItem($otherParam['action_link'])->link?>"
              class="btn btn--secondary-white white mt-4 ml-4"
              ><?=$otherParam['action_text']?> &raquo;</a
            >
          </div>
        </div>
      </section>
      <style>
        <?php if ($otherParam['background_image']): ?>
          .section__numbers{
            background-image: url("<?=JURI::base().$otherParam['background_image']?>");
          }
         <?php else: ?>
            .section__numbers{
              background-image: none;
            }
        <?php endif ?>
        <?php if ($otherParam['background_color']): ?>
          .section__numbers{
            background-color: none;
          }
         <?php else: ?>
            .section__numbers{
              background-color: "<?=$otherParam['background_color']?>";
            }
        <?php endif ?>
      </style>
<?php else: ?>
  <section class="section section__clients">
    <div class="container">
      <div class="section__intro">
        <h3 class="section__heading"><?=$otherParam['caption']?></h3>
        <p class="section__sub-heading">
          <?php echo $otherParam['subtitle'] ?>
        </p>
      </div>

      <div class="clients__carousel mb-5">
        <?php foreach ($list as $key => $item): ?>
          <div class="slick__item">
          <div class="client-image">
            <img src="<?=JURI::base().$item->icon?>" alt="client" class="img-fluid" />
          </div>
        </div>
        <?php endforeach ?>

      </div>
    </div>
  </section>
<?php endif ?>

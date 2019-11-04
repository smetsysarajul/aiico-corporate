<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

function formatDate($date)
{
    $dateObject = date_create_from_format("Y-m-d H:i:s",$date);
    $result =$dateObject->format("F d, Y");
    return $result;
}
//make sure the list is not more than 3
$newslen = 3;
$list = array_slice($list, 0,$newslen);
$app = JFactory::getApplication();
$templateParams = $app->getTemplate('true')->params;
$menu = $app->getMenu();
$introLen=150;

?>

<!-- this is what ei need displayed -->
<section class="section section__news">
  <div class="container">
    <div class="section__intro">
      <h3 class="section__heading">From Our News Desk</h3>
      <p class="section__sub-heading">
        Read through our latest stories and company statements, watch videos and explore news coverage about us
        and our subsidiaries and stay up to date by signing up to receive email alerts.
      </p>
    </div>
    <div class="row">
        <?php foreach ($list as $key => $news): ?>

            <div class="col-md-6 col-lg-4 mb-5">
              <div class="news">
                <figure class="news__cover-wrapper ">
                    <?php 
                        $images = json_decode($news->images);
                     ?>
                  <img class="news__cover" src="<?=$images->image_intro?$images->image_intro:'../images/press/aiico-student.jpg'?>" />
                </figure>
                <div class="news__body">
                  <span class="news__date"> <?php echo formatDate($news->publish_up) ?></span>
                  <a href="<?=$news->link?>" class="news__headline"><?=$news->title?></a>
                  <p class="paragraph news__excerpt">
                    <?=substr(strip_tags($news->introtext), 0,$introLen)?>
                  </p>
                  <a href="<?=$news->link?>" class="news__cta">
                    <?php echo $news->linkText ?>
                  </a>
                </div>
              </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="text-center">
      <a href="<?=$menu->getItem($templateParams['news_page'])->link?>" class="btn btn--link mt-4">GO TO NEWS SECTION &raquo;</a>
    </div>
  </div>
</section>
<style>
    article{
        display: none;
    }
</style>


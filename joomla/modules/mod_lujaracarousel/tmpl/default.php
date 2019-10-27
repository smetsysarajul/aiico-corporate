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

?>
<section class="section section__hero">
  <div id="mainSlider" class="carousel slide main-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
		<?php 
			for ($i=0; $i < $num; $i++) { 
			
		 ?>
      		<li data-target="#mainSlider" data-slide-to="<?=$i?>" <?=$i==0?'class="active"':''?>></li>
	    <?php 
	      	}
	     ?>

<!--       <li data-target="#mainSlider" data-slide-to="1"></li>
      <li data-target="#mainSlider" data-slide-to="2"></li>
      <li data-target="#mainSlider" data-slide-to="3"></li> -->
    </ol>
    <div class="carousel-inner">
    	<?php foreach ($list as $key => $item): ?>
    		<div class="carousel-item <?=$key==0?'active':''?>">
    		  <img src="<?=$item->image?>" class="carousel-image" alt="image<?=($key+1)?>" />
    		  <div class="carousel-item__mask">
    		    <div class="carousel-item__container">
    		      <div class="carousel-item__details">
    		        <h1 class="carousel-item__heading"><?=$item->caption?></h1>
    		        <p class="carousel-item__sub-heading">
    		         <?=$item->text?>
    		        </p>
    		        <a href="<?=$item->buttonLink1?>" class="carousel-item__btn"><?=$item->buttonText1?></a>
    		        <?php if ($item->buttonText2 && $item->buttonLink2): ?>
    		        	<a href="<?=$item->buttonLink2?>" class="carousel-item__btn carousel-item__btn--secondary">learn more</a>
    		        <?php endif ?>
    		      </div>
    		    </div>
    		  </div>
    		</div>
    	<?php endforeach ?>

<!--       <div class="carousel-item">
        <img src="../images/carousel/image2.png" class="carousel-image" alt="image2" />
        <div class="carousel-item__mask">
          <div class="carousel-item__container">
            <div class="carousel-item__details">
              <h1 class="carousel-item__heading">At AIICO, Our business is looking up</h1>
              <p class="carousel-item__sub-heading">
                Welcome to a new world of Insurance. It will no longer be complex, time consuming or impersonal.
                We are changing our customer.
              </p>
              <a href="#" class="carousel-item__btn">Find out more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/carousel/image3.png" class="carousel-image" alt="image3" />
        <div class="carousel-item__mask">
          <div class="carousel-item__container">
            <div class="carousel-item__details">
              <h1 class="carousel-item__heading">MoneyWise – 100% cash back term life insurance</h1>
              <p class="carousel-item__sub-heading">
                Welcome to a new world of Insurance. It will no longer be complex, time consuming or impersonal.
                We are changing our customer.
              </p>
              <a href="#" class="carousel-item__btn">apply now</a>
              <a href="#" class="carousel-item__btn carousel-item__btn--secondary">learn more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/carousel/image4.png" class="carousel-image" alt="image4" />
        <div class="carousel-item__mask">
          <div class="carousel-item__container">
            <div class="carousel-item__details">
              <h1 class="carousel-item__heading">Travel Insurance - $1000 cover anywhere in the world</h1>
              <p class="carousel-item__sub-heading">
                You can’t tell what will happen on the road. Get Insured Now. Call us today on 01 279 2930, 0700
                AIIContact (0700 2442 6682 28) or visit our website www.aiicoplc.com to learn more.
              </p>
              <a href="#" class="carousel-item__btn">Find out more</a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>

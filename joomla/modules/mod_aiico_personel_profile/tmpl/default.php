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
<section class="section section__about-page">
    <div class="container">
      <div class="row">
        <?php foreach ($list as $key => $profile): ?>
          <div class="col-md-4 mb-4">
            <div class="person">
              <figure class="person__avatar-wrapper">
                <img class="person__avatar" src="<?=$profile->profile_image?>" alt="<?=$profile->fullname?>" />
              </figure>
              <div class="person__info">
                <h4 class="person__name"><?=$profile->fullname?></h4>
                <span class="person__designation"><?=$profile->position?></span>
                <button class="person__profile-btn"  data-toggle="modal" data-target="#profileModal">
                  view profile
                </button>
                <div  class="d-none">
                  <span class="bio"><?=$profile->profile_bio?></span>
                  <span class="edu"><?=$profile->profile_education?></span>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>

      </div>

    </div>
  </section>



  <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="full-profile">
            <div class="full-profile__picture">
              <figure class="person__avatar-wrapper">
                <img class="person__avatar" src="" />
              </figure>
            </div>
            <div class="full-profile__info">
              <h5 class="person__name2"></h5>
              <span class="person__designation2">Executive Director, Operations</span>
              <p class="paragraph my-5 person__bio">

              </p>
              <h5 class="heading heading--tertiary">Educational Background</h5>
              <p class="paragraph person__education">

              </p>
            </div>
            <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
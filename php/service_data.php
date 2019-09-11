<?php 
$serviceData = array
(
		'auto_insurance'=>array
		(
			'page_title'=>"Auto Insurance | AIICO Insurance Plc.",
			'page_name'=>'Auto Insurance Plan',

			'parent'=>array
			(
				'title'=>'Individual Plans',
				'link'=>'#'
			),
			'action_link'=>array(
				'title'=>'GET QUOTE',
				'link'=>"#"
			),

			'top_page'=>array
			(
				'title'=>'Auto-Insurance Plan',
				'image'=>'../images//auto-insurance.jpg'
			),
			'product'=><<<EOD

			<div class="row why__row py-5">
			  <div class="col-md-6 why__col">
			    <div class="why__content">
			      <h3 class="heading heading--services">About AIICO Auto-Insurance?</h3>

			      <p class="paragraph">
			        AIICO Auto Insurance covers all types of automobiles for both private and commercial uses.
			        Also covered are motorcycles and tricycles.
			      </p>
			      <p class="paragraph">
			        Auto insurance is one of the compulsory insurance classes and anyone using a motor vehicle on
			        the public highway must have it.
			      </p>
			      <p class="paragraph">
			        Auto insurance which is the most common of all the known classes of insurance is designed to
			        protect the insured for loss of or damage to his/her vehicle, damage to Third Party property
			        including bodily injury and death to Third Party caused by an accident whilst using their
			        vehicle.
			      </p>

			      <ul class="big-list mb-3">
			        <li class="big-list__item">
			          <span class="text-dark">Third Party Auto Insurance</span>
			          <p class="paragraph text-secondary">
			            We offer a wide range of products and services which are tailored towards our customers'
			            needs.We offer a wide range of products and services which are tailored.
			          </p>
			        </li>
			        <li class="big-list__item">
			          <span class="text-dark">Comprehensive Auto Insurance</span>
			          <p class="paragraph text-secondary">
			            AIICO Insurance offers fully comprehensive, cost effective, motor vehicle insurance that
			            cover all risks related to owning and driving a vehicle. Our motor policies are all
			            customized and structured to suit your needs.
			          </p>
			          <p class="paragraph text-secondary">
			            The Comprehensive Auto Insurance plan covers the loss or damage to insured vehicles as a
			            result of fire, theft, vandalism, accidental damage or collision. Coverage also includes
			            Legal Liability for death, bodily injury or damage to the property of 3rd parties arising
			            out of the use of insured vehicles.
			          </p>
			        </li>
			      </ul>
			    </div>
			  </div>

			  <div class="filler"></div>

			  <div class="col-md-5 why__col p-0">
			    <div class="why__content h-100">
			      <img class="services__image" src="../images//services/service.png" />
			      <div class="services__overlay">
			        <div class="services__image-icon"></div>
			      </div>
			    </div>
			  </div>
			</div>
			EOD 
			,
			'benefit'=><<<EOD

			<div class="row why__row align-items-center py-5">
			  <div class="col-md-5 why__col p-0">
			    <div class="why__content">
			      <figure>
			        <img width="100%" src="../images//product-img.jpg" />
			      </figure>
			    </div>
			  </div>

			  <div class="col-md-7 why__col">
			    <div class="why__content px-5">
			      <h3 class="heading heading--secondary text-dark">Why do I need auto insurance?</h3>

			      <ul class="big-list mb-3">
			        <li class="big-list__item">
			          <!-- <span class="text-dark">Maturity</span> -->
			          <p class="paragraph text-dark">
			            It is compulsory; it is the Law! (Road Traffic Act,1950)
			          </p>
			        </li>
			        <li class="big-list__item">
			          <!-- <span class="text-dark">Interest</span> -->
			          <p class="paragraph text-dark">
			            Provides replacement cost of damage or theft of your car
			          </p>
			        </li>
			        <li class="big-list__item">
			          <!-- <span class="text-dark">Death Benefits</span> -->
			          <p class="paragraph text-secondary">
			            To provide financial support for you when you damage other people’s property
			          </p>
			        </li>
			        <li class="big-list__item">
			          <!-- <span class="text-dark">Death Benefits</span> -->
			          <p class="paragraph text-dark">
			            Re-imbursement of litigation cost
			          </p>
			        </li>
			      </ul>
			    </div>
			  </div>
			</div>

			EOD,
			
			'premium'=><<<EOD
			<div class="row why__row align-items-center py-5">
			  <div class="col-md-7 why__col">
			    <div class="why__content px-5">
			      <h3 class="heading heading--services">Who should be interested in this plan?</h3>
			      <ul class="check-list">
			        <li class="check-list__item">Private Vehicle Owners</li>
			        <li class="check-list__item">Multiple Family Owners</li>
			        <li class="check-list__item">Taxi Owners</li>
			        <li class="check-list__item">Bus Owners</li>
			        <li class="check-list__item">Delivery vehicles</li>
			        <li class="check-list__item">Commercial fleets</li>
			      </ul>
			    </div>
			  </div>
			  <div class="col-md-5 why__col p-0">
			    <div class="why__content">
			      <figure>
			        <img width="100%" src="../images//product-img2.jpg" />
			      </figure>
			    </div>
			  </div>
			</div>

			EOD
		),
// example for filling the data
	'annuity'=>array
		(
			'top_page'=>array
			(
				'title'=>'Enter the title here',
				'image'=>'specify image path heere'
			),
			'page_name'=>'the title of the page to displayed as breadcrumbs',
			'parent'=>array('name'=>'link'),
			'product'=><<<EOD
				insert the html code for product here

			EOD 
			,
			'benefit'=><<<EOD
				insert the html code for benefit here

			EOD,
			
			'premium'=><<<EOD
				insert the html code for benefit here

			EOD,
		),

)


 ?>
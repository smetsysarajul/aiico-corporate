<?php $page ="services"; ?>
<?php include 'php-component/header.php' ?>
<link rel="stylesheet" href="css/service.css">
    <main>
      <section class="page-intro">
        <div class="container">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
              </nav>
              <h3 class="page-title">Savings Plan</h3>
            </div>
          </div>
        </div>
      </section>
      <section class="section section__tabbed">
        <div class="container">
          <div class="row align-items-start justify-content-between sticky-top">
            <nav id="navbar-example3" class="col-md-3 navbar">
              <ul class="nav">
                <li><a class="nav-link" href="#item-1">The Product</a></li>
                <li><a class="nav-link" href="#item-2">The Benefit</a></li>
                <li><a class="nav-link" href="#item-3">Premium</a></li>
                <li><a class="nav-link" href="#item-4">Who Purchases the cover</a></li>
                <li><a class="btn btn-primary" href="#"> GET QUOTE</a></li>
              </ul>
            </nav>
            <div class="col-md-8"  data-target="#navbar-example3" >
              <!-- <div class="col-md-8" style="height: 800px; overflow-y:scroll" data-spy="scroll" data-target="#navbar-example3" data-offset="0"> -->
              <figure class="image-wrapper">
                <img class="image" src="../images/girl.png">
              </figure>
              <p class="paragraph">A unique savings plan that offers financial protection including life insurance coverage which is payable in the event of your death within the policy.</p>

              <div id="item-1" class="text-wrapper">
                <h3 class="heading heading--tertiary">The product</h3>
                <p class="paragraph">Savings plus life cover arrangement.</p>
                <p class="paragraph">Provides a return on investment.</p>
                <p class="paragraph">Financial protection for dependents in the event of untimely death.</p>
                <p class="paragraph">Requires no medical examination.</p>
                <p class="paragraph">Can be effected for a minimum period of 1 year.</p>
              </div>

              <div id="item-2" class="text-wrapper">
                <h3 class="heading heading--tertiary">benefits</h3>
                <p class="paragraph"><b>Maturity:</b> Total amount accumulated in the policy holder’s investment account.</p>
                <p class="paragraph"><b>Interest:</b> Interested credited to the policyholder is an average savings rate of 3% per annum and per annum to a maximum of 5% per annum for policies that are on the books for more than a year.</p>
                <p class="paragraph"><b>Death Benefits:</b></p>
                <ul class="square-list">
                  <li class="square-list__item">Guarantee chosen sum assured plus Total amount in an investment account</li>
                  <li class="square-list__item">A waiting period of 3 months except for death by accident</li>
                  <li class="square-list__item">Optional Withdrawal Benefit: 50% of annual contribution after 1st year</li>
                  <li class="square-list__item">Made once in a year provided the account is left with a minimum balance equal to 1-year</li>
                </ul>
              </div>

              <div id="item-3" class="text-wrapper">
                <h3 class="heading heading--tertiary">premium</h3>
                <p class="paragraph"><b>Frequency:</b> Monthly, Quarterly, Half-yearly and Yearly.</p>
                <p class="paragraph"><b>Risk premium:</b> Policyholder chooses the sum assured he wants and can afford. The risk premium is paid annually from N1,000.00 up to N20,000.00 to purchase a chosen sum assured ranging from N100,000.00 to a maximum of N2million.</p>
                <p class="paragraph">Risk premium = Sum assured</p>
                <p class="paragraph">N 1,000.00 - 100,000.00</p>
                <p class="paragraph">N 2,000.00 - 200,000.00</p>
                <p class="paragraph">N 3,000.00 - 300,000.00</p>
                <p class="paragraph">N 4,000.00 - 400,000.00 etc. subject to a maximum of N20,000.00 for sum assured of N2million.</p>
                <p class="paragraph">The policyholder picks one the above-mentioned risk premium and the equivalent sum assured applies. The regular savings contribution can then be paid along.</p>
                <p class="paragraph">E.g</p>
                <p class="paragraph">Contribution: N 10,000.00</p>
                <p class="paragraph">Risk premium: N 1,000.00</p>
                <p class="paragraph">First premium: N11, 000.00</p>
                <p class="paragraph">Subsequent premium: 10,000.00</p>
                <p class="paragraph">Anniversary/ Renewal premium: 11,000.00</p>
                <p class="paragraph">Full savings premium allocated to investment account.</p>
              </div>

              <div id="item-4" class="text-wrapper">
                <h3 class="heading heading--tertiary">Who purchases this cover?</h3>
                <p class="paragraph">Individuals wishing to make long term investments who also require life protection.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php include 'php-component/footer.php' ?>
$(document).ready(function() {
  processFormDisplay();
  window.scrollTo(0, 0);

  function resetView() {
    $("#auto-insurance-form, #life-insurance-form, #travel-insurance-form").hide();
  }

  function resetInvestorsView() {
    $("#shareholders-view, #financial-view, #investors-view").hide();
  }

  function hideOtherAutoSteps() {
    $("#auto-section-two, #auto-section-three, #auto-section-four").hide();
  }
  function hideOtherTravelSteps() {
    $("#travel-section-two, #travel-section-three, #travel-section-four").hide();
  }
  function hideOtherLifeSteps() {
    $("#life-section-two, #life-section-three, #life-section-four").hide();
  }

  function resetAllAuto() {
    $("#auto-section-one").hide();
    hideOtherAutoSteps();
  }

  function resetAllTravel() {
    $("#travel-section-one").hide();
    hideOtherTravelSteps();
  }

  function resetAllLife() {
    $("#life-section-one").hide();
    hideOtherLifeSteps();
  }

  hideOtherAutoSteps();
  hideOtherTravelSteps()
  hideOtherLifeSteps();

  var claimsPosition = $(".claims-tab");
 if(claimsPosition.length){
  claimsPosition.offset().top;
}


  // Handle claims tab click
  $(".claims-tab)").click(function() {
    $(this).addClass("active");
    $(".claims-tab")
      .not(this)
      .removeClass("active");
      if ($(this).hasClass('pill_tabs')) {
        console.log($(this));
        $('.pill-content').hide();
        window.scrollTo(0, claimsPosition - 200);
      }
  });

  // Handle Auto Insurance
  $("#auto-insurance-tab").click(function() {
    // reset form view
    resetView();
    // show auto insurance form
    $("#auto-insurance-form").show();
  });

  // Handle Travel Insurance
  $("#travel-insurance-tab").click(function() {
    // reset form view
    resetView();
    // show auto insurance form
    $("#travel-insurance-form").show();
  });

  // Handle Life Insurance
  $("#life-insurance-tab").click(function() {
    // reset form view
    resetView();
    // show auto insurance form
    $("#life-insurance-form").show();
  });

  // Handle Auto Steps
  $("#auto-step-1, #autoback-step-1").click(function() {
    resetAllAuto();
    $("#auto-section-one").show();
  });
  $("#auto-step-2, #autoback-step-2").click(function() {
    resetAllAuto();
    $("#auto-section-two").show();
  });
  $("#auto-step-3, #autoback-step-3").click(function() {
    resetAllAuto();
    $("#auto-section-three").show();
  });
  $("#auto-step-4").click(function() {
    resetAllAuto();
    $("#auto-section-four").show();
  });

  // Handle Travel Steps
  $("#travel-step-1, #travelback-step-1").click(function() {
    resetAllTravel();
    $("#travel-section-one").show();
  });
  $("#travel-step-2, #travelback-step-2").click(function() {
    resetAllTravel();
    $("#travel-section-two").show();
  });

  $("#travel-step-3, #travelback-step-3").click(function() {
    resetAllTravel();
    $("#travel-section-three").show();
  });
  $("#travel-step-4").click(function() {
    resetAllTravel();
    $("#travel-section-four").show();
  });

  // Handle Travel Steps
  $("#life-step-1, #lifeback-step-1").click(function() {
    resetAllLife();
    $("#life-section-one").show();
  });
  $("#life-step-2, #lifeback-step-2").click(function() {
    resetAllLife();
    $("#life-section-two").show();
  });

  $("#life-step-3, #lifeback-step-3").click(function() {
    resetAllLife();
    $("#life-section-three").show();
  });
  $("#life-step-4").click(function() {
    resetAllLife();
    $("#life-section-four").show();
  });
  

  // Handle Financial
  $("#financial-tab").click(function() {
    resetInvestorsView();
    $("#financial-view").show();
  });

  // Handle Investor
  $("#investors-tab").click(function() {
    resetInvestorsView();
    $("#investors-view").show();
  });

  // Handle Shareholders
  $("#shareholders-tab").click(function() {
    resetInvestorsView();
    $("#shareholders-view").show();
  });
});
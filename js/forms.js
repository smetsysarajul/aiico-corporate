$(document).ready(function() {
  function resetView() {
    $("#auto-insurance-form, #life-insurance-form, #travel-insurance-form").hide();
  }

  function hideOtherAutoSteps() {
    $("#auto-section-two, #auto-section-three, #auto-section-four").hide();
  }
  function resetAllAuto() {
    $("#auto-section-one").hide();
    hideOtherAutoSteps();
  }

  hideOtherAutoSteps();

  // Handle claims tab click
  $(".claims-tab").click(function() {
    $(this).addClass("active");
    $(".claims-tab")
      .not(this)
      .removeClass("active");
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
});

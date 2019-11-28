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
  $(".claims-tab").click(function() {
    $(this).addClass("active");
    $(".claims-tab")
      .not(this)
      .removeClass("active");

    if ($(this).hasClass('pill-tabs')) {
       //try to get the tab to show
       $('.pill-content').addClass('d-none');
        var target = $(this).attr('data-target');
        console.log(target);
        $(target).removeClass('d-none');
      }
      else{
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

function processFormDisplay() {
  $('form').addClass('general-form');
  $('.horizontal-forms form').addClass('claims-form');
  $('.horizontal-forms form').show();
  $('.bfPageIntro').addClass(' col-12 w-100 ');
  $('.bfPageIntro>p').addClass('h4 form-section__name ');
  $('section.bfElemWrap').addClass('form-group');
  $('.bfPage-m').addClass('form-section');
   $('span.bfElemWrap').addClass('col-6 m-0');
   $('.horizontal-forms span.bfElemWrap').removeClass('col-6');
   $('.horizontal-forms span.bfElemWrap').css('float','none');
  $('.bfElemWrap>label').addClass('form-label');
  $('.horizontal-forms .bfElemWrap').addClass('row align-items-center');
  $('.horizontal-forms .bfElemWrap >label').addClass('col-md-5');
   $('.horizontal-forms .bfElemWrap >input').addClass('col-md-4');
   $('.horizontal-forms .bfElemWrap >select').addClass('col-md-4');
  $('button.button').addClass('btn btn-primary submit-btn text-center');
  $('.horizontal-forms #bfSubmitButton').removeClass('btn-default');
   $('.horizontal-forms #bfSubmitButton').addClass('btn-success ');
$('.bfElemWrap>label').css('float','none');
  $('.bfElemWrap input,.bfElemWrap textarea,.bfElemWrap select').addClass('form-control');
  $('.bfElemWrap input[type=text]').addClass('text-box');
  $('.bfElemWrap input[type=checkbox]').addClass('check-box');
  $('.bfElemWrap select').addClass('select-box');
  $('.bfElemWrap input,section.bfElemWrap textarea').css({
display: 'block',
width: '100%'
  });
  $('.whistle-blower .bfNoSection>.bfClearfix').addClass('row');
  $('.bfNoSection').addClass('row');
   $('.horizontal-forms .bfNoSection').removeClass('row');
  $('.bfNoSection>.bfClearfix').css('margin','0px');
  $('.contact-page .bfPage').addClass('row');
  $('.bfNoSection section.bfElemWrap').addClass('col-6');
  $('.contact-page section.bfElemWrap').addClass('col-6');
  $('.contact-page section.bfElemWrap').each(function(index, el) {
          if (index==2) {
            $(this).removeClass('col-6');
            $(this).addClass('col-12');
          }
  });

  $('.bfPage').each(function(index, el) {
      $(this).find('button').each(function(i, elem) {
        if (i==0) {
          $(this).css({
              'margin-left': '35%',
              'float':'none'
            });
        }else{
          $(this).css({
              'margin-left': '0',
              'float':'none'
            });
        }
      });

  });

  $('section.bfElemWrap textarea').addClass('text-area');
 var fileField = $('input[type=file]');
 fileField.addClass('form-control-file file-input');
 fileField.removeClass('form-control');
 fileField.hide();
 var fileContainer =fileField.parents('.form-group');
 fileContainer.append("<div class='custom-file-browser'><button class='file-browser-btn'><i class='fas fa-cloud-upload-alt file-browser-btn__icon' aria-hidden='true'></i>Choose file</button><span class='file-info'>No file chosen</span></div");
}
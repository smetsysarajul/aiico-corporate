$(document).ready(function () {
  $(".person__profile-btn").on("click", function () {
    var infoContainer = $(this).parents('.person');
    console.log(infoContainer);
    var image = infoContainer.find('img').attr('src');
    var fullname = infoContainer.find('.person__name').html();
    var position = infoContainer.find('.person__designation').html();
    var bio = infoContainer.find('.bio').html();
    var edu  = infoContainer.find('.edu').html();
    //i think i have all i want 
    $("#profileModal")
      .find(".person__avatar")
      .attr("src", image);

    $("#profileModal")
      .find(".person__name2")
      .html(fullname);

    $("#profileModal")
      .find(".person__designation2")
      .html(position);

    $("#profileModal")
      .find(".person__bio")
      .html(bio);

    $("#profileModal")
      .find(".person__education")
      .html(edu);
  });
});
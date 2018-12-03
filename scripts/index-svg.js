$(".header-title > svg").click(function () {
  loadProject();
  setTimeout(function(){ window.location.replace("http://www.miaske.com"); }, 500);
});

function loadProject() {
  $(".layer").fadeOut(500);
  $(".skill").fadeOut(500);
  $(".wrapper").css({
    "transition":"all 500ms ease",
    "width":"100vw",
    "height":"100vh"
  }).delay(500).promise().done(function () {
    $("body").css({"background":"#E3E5EC"}); // platinum
    $(".wrapper").css({"display":"none"});
  });
  $(".skills-wrapper").css({
    "transition":"all 500ms ease",
    "width":"100vw",
    "height":"100vh"
  }).delay(500).promise().done(function () {
    $("body").css({"background":"#E3E5EC"}); // platinum
    $(".skills-wrapper").css({"display":"none"});
  });
}

$(".header-title > svg").mouseenter(function () {
  $("#svg2683 path").css({
    "fill":"#E3E5EC"
  });
  $("#svg2683 rect").css({
    "fill":"#E3E5EC"
  });

  $(this).mouseleave(function () {
    $("#svg2683 path").css({
      "fill":"initial"
    });
    $("#svg2683 rect").css({
      "fill":"initial"
    });
  });
});

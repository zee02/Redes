$(document).ready(function () {
  efeitos();
  fade();
  slide();
  animar();
  function efeitos() {
    $("#js").hide(3000);
    $("#js").show(3000);
  }

  function fade() {
    $("#js").fadeOut(3000);
    $("#js").fadeIn(3000);
  }

  function slide() {
    $("#js").slideUp(3000);
    $("#js").slideDown(3000);
  }

  function animar() {
    $("#js").animate(
      {
        height: "+=200px",
        width: "+=200px",
        opacity: "0.5",
        left: "0%",
      },
      3000
    );

    $("#js").animate(
      {
        height: "-=200px",
        width: "-=200px",
        opacity: "1",
        left: "50%",
      },
      3000
    );
  }
});

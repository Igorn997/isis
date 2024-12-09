$(function () {
  var $numberElement = $(".box-1-number");

  if ($numberElement.length) {
    var originalText = $numberElement.text();
    var sign = "+";
    var targetNumber = parseInt(originalText.replace(/[^0-9]/g, ""), 10);

    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.create({
      trigger: ".hero-wrapper",
      start: "top center",
      onEnter: function () {
        $numberElement.text("0" + sign);

        gsap.to(
          {},
          {
            duration: 2,
            onUpdate: function () {
              var progress = this.progress();
              var currentNumber = Math.floor(progress * targetNumber);
              $numberElement.text(currentNumber + sign);
            },
            onComplete: function () {
              $numberElement.text(targetNumber + sign);
            },
          }
        );
      },
      onLeaveBack: function () {
        // Reset broja na 0 kada se izađe iz sekcije
        $numberElement.text(sign + "0");
      },
    });
  }
});

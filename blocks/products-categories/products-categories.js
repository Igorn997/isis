$(function () {
  var $section = $(".products-categories-wrapper");

  if ($section.length) {
    gsap.registerPlugin(ScrollTrigger);
    gsap.set($section, { opacity: 0 });

    gsap.to($section, {
      opacity: 1,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".products-categories-wrapper",
        start: "top 80%",
        end: "top 20%",
        onEnter: function () {
          animateNumber();
        },
      },
    });

    function animateNumber() {
      var $number = $(".products-categories-number");
      if ($number.length) {
        var targetNumber = parseInt($number.text(), 10);
        var duration = 2;

        gsap.fromTo(
          $number,
          { textContent: 0 },
          {
            textContent: targetNumber,
            duration: duration,
            ease: "power2.out",
            snap: { textContent: 1 },
            onUpdate: function () {
              $number.text(Math.floor(this.targets()[0].textContent));
            },
          }
        );
      }
    }
  }
});

$(function () {
  var $section = $(".satisfied-customers-wrapper");

  if ($section.length) {
    gsap.registerPlugin(ScrollTrigger);

    gsap.to(".line", {
      width: "100%",
      duration: 2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".satisfied-customers-wrapper",
        start: "top 80%",
        toggleActions: "play none none none",
      },
    });

    gsap.to(".rev1 .review-line", {
      width: "90%",
      duration: 5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".satisfied-customers-wrapper",
        start: "top 80%",
        toggleActions: "play none none none",
      },
    });

    gsap.to(".rev2 .review-line", {
      width: "95%",
      duration: 5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".satisfied-customers-wrapper",
        start: "top 80%",
        toggleActions: "play none none none",
      },
    });

    gsap.to(".rev3 .review-line", {
      width: "95%",
      duration: 5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".satisfied-customers-wrapper",
        start: "top 80%",
        toggleActions: "play none none none",
      },
    });

    gsap.to(".rev5 .review-line", {
      width: "95%",
      duration: 5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".satisfied-customers-wrapper",
        start: "top 80%",
        toggleActions: "play none none none",
      },
    });

    gsap.to(".rev4 .review-line", {
      width: "98%",
      duration: 4,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".satisfied-customers-wrapper",
        start: "top 80%",
        toggleActions: "play none none none",
      },
    });
  }
});

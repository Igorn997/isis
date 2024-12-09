import global from "./global";

let _this = {
  /*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
  $dom: {
    menuToggle: $(".menu-toggle"),
    mainNavigation: $(".main-navigation"),
  },

  vars: {
    arrowDownHTML: `<svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.18519 6.40143L11.779 1.52644C12.1306 1.15144 12.1423 0.612371 11.8142 0.284251C11.4626 -0.0790294 10.8884 -0.0907488 10.5602 0.260811L6.02509 5.06553L1.48992 0.260811C1.15008 -0.0907488 0.575864 -0.0907494 0.224304 0.284251C-0.0803865 0.624091 -0.0803864 1.15144 0.259454 1.52644L4.86492 6.40143C5.59149 7.18663 6.44699 7.18663 7.18519 6.40143Z" fill="#1F3233"/>
</svg>
`,
    arrowRightHTML: "<i class='icon-angle-right' aria-hidden='true'></i>",
    arrowLefttHTML: "<i class='icon-angle-left' aria-hidden='true'></i>",
    selectors: {
      mainMenuWrapper: ".logo-menu-wrapper",
      triggerMenu: ".menu-toggle, .menu-toggle span",
      navItemsWithChildren: "li.menu-item-has-children",
    },
    menuOpened: false,
  },

  /*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
  init: function () {
    _this = this;
    _this.setup();
    _this.bind();
  },

  toggle: function (e, close) {
    if (typeof e !== "undefined") {
      e.preventDefault();
    }

    if (close) {
      global.$dom.body.removeClass("menu-opened");
      global.functions.enableScroll();
      _this.$dom.mainNavigation.attr("area-expanded", "false");
      _this.vars.menuOpened = false;

      return false;
    }

    _this.$dom.mainNavigation.attr("area-expanded", function (index, attr) {
      return attr === "true" ? "false" : "true";
    });

    _this.vars.menuOpened = !_this.vars.menuOpened;

    if (_this.vars.menuOpened) {
      global.functions.disableScroll();
    } else {
      global.functions.enableScroll();
    }

    global.$dom.body.toggleClass("menu-opened");
  },

  bind: function () {
    _this.$dom.menuToggle.on("click", _this.toggle);

    // Close the menu when we press escape button
    global.functions.escKey(function () {
      _this.toggle(undefined, true);
    });

    // Close the menu when we click outside the container

    global.functions.clickOutsideContainer(
      _this.vars.selectors.mainMenuWrapper,
      _this.$dom.mainNavigation,
      _this.vars.selectors.triggerMenu,
      function () {
        _this.toggle(undefined, true);
      }
    );

    global.$dom.window.on(
      "resize",
      global.functions.throttle(function () {
        _this.setup();
        _this.toggleSubmenuArrows();
      }, 200)
    );
  },

  setup: function () {
    //No menu present on the website
    if (!_this.$dom.mainNavigation.length) {
      return;
    }

    _this.$dom.mainNavigation.attr("area-expanded", "false");

    _this.toggleSubmenuArrows();
  },

  toggleSubmenuArrows: function () {
    const isPortable = global.device.isPortable;

    _this.$dom.mainNavigation
      .find(_this.vars.selectors.navItemsWithChildren)
      .each(function () {
        const $parent = $(this);
        let $arrow;

        // Dodaj strelicu ako ne postoji
        if ($parent.find(" > a").has(".arrow-toggle").length === 0) {
          $arrow = $(
            "<span class='arrow-toggle'>" +
              (isPortable
                ? _this.vars.arrowDownHTML
                : _this.vars.arrowRightHTML) +
              "</span>"
          );
          $parent.find("> a").append($arrow);
        } else {
          $arrow = $parent.find(".arrow-toggle");
        }

        // Postavi klik za prenosne uređaje
        if (isPortable) {
          $arrow.html(_this.vars.arrowDownHTML);

          $parent
            .find("> a")
            .off("click")
            .on("click", function (e) {
              e.preventDefault();

              $parent.toggleClass("sub-menu-open");
              $parent.find("> .sub-menu").slideToggle(400);
              $arrow.find("i").toggleClass("icon-angle-up icon-angle-down");
            });
        } else {
          // Postavi ponašanje za desktop
          $arrow.html(
            $parent.parent().is(".sub-menu")
              ? _this.vars.arrowRightHTML
              : _this.vars.arrowDownHTML
          );

          $parent.off("mouseenter mouseleave").hover(
            function () {
              $(this).addClass("sub-menu-open");
              $(this).find("> .sub-menu").stop().slideDown(400);
            },
            function () {
              $(this).removeClass("sub-menu-open");
              $(this).find("> .sub-menu").stop().slideUp(400);
            }
          );

          // Dodaj klik za desktop
          $arrow.off("click").on("click", function (e) {
            e.preventDefault();

            $parent.toggleClass("sub-menu-open");
            $parent.find("> .sub-menu").stop().slideToggle(400);
          });
        }
      });
  },
};

export default _this;

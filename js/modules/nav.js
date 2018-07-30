// Navbar code
$j = jQuery.noConflict();

// Hmbrgr Init
$j(window).on("load", function() {
  var toggle = $j(".nav__item--type--menu-toggle");

  toggle.hmbrgr({
    width: 30,
    height: 30,

    barHeight: 5,
    barRadius: 3,
    
    speed: 150
  });

  toggle.click(function() {
    var submenu = $j(".nav-menu__sub-menu");

    toggle.toggleClass("nav__item--active");
    $j(".nav__menu").toggleClass('nav__menu--open');

    submenu.slideUp(150, "easeOutCirc", function() {
      $j(this).removeClass(".nav-menu__sub-menu--open");
    });
  });
});

// Nav Toggles
$j(window).on("load resize", function() {
  var menulink = $j(".nav-menu__anchor");
  menulink.unbind("click");

  if ( $j(".nav__item--type--menu-toggle").css("display") != "none" ) {
    var active = $j(".nav__item--active").length > 0;

    $j(".nav__menu").toggleClass('nav__menu--open', active);

    menulink.click(function (e) {
        var child = $j(this).parent().find(".nav-menu__sub-menu");

        if (child) {
          child.slideToggle(150, "easeOutCirc");
          child.toggleClass('nav-menu__sub-menu--open');
        }
    });
  } else {
    $j(".nav__menu").removeClass('nav__menu--open');
    $j(".nav-menu__sub-menu").removeClass('nav-menu__sub-menu--open')
    $j(".nav-menu__sub-menu").removeAttr("style");
  }
});

// Transparency Transition
function transitionTransparency() {
  $j(".nav").toggleClass("nav--transparent", $j(window).scrollTop() === 0 && $j(document).width() > 768);
};

$j(document).on("ready", transitionTransparency);

$j(window).on("resize scroll", transitionTransparency);
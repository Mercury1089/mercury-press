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
    var submenu = $j(".site-nav-menu__sub-menu");

    toggle.toggleClass("nav__item--active");
    $j(".nav__menu").toggleClass('nav__menu--open');

    submenu.slideUp(150, "easeOutCirc", function() {
      $j(this).removeClass(".site-nav-menu__sub-menu--open");
    });
  });
});

// Nav Toggles
$j(window).on("load resize", function() {
  var menulink = $j(".site-nav-menu-link");
  menulink.unbind("click");

  if ( $j(".site-nav__menu-toggle").css("display") != "none" ) {
    var active = $j(".site-nav__menu-toggle--active").length > 0;

    $j(".site-nav-menu").toggleClass('site-nav-menu--open', active);

    menulink.click(function (e) {
        var sibling = $j(this).parent().find(".site-nav-menu__sub-menu");

        if (sibling) {
          sibling.slideToggle(150, "easeOutCirc");
          sibling.toggleClass('.site-nav-menu__sub-menu--open');
        }

        e.preventDefault();
    });
  } else {
    $j(".site-nav-menu").removeClass('site-nav-menu--open');
    $j(".site-nav-menu__sub-menu").removeClass('.site-nav-menu__sub-menu--open')
    $j(".site-nav-menu__sub-menu").removeAttr("style");
  }
});

// Transparency Transition
$j(window).on("load resize scroll", function() {
  $j(".site-nav").toggleClass("site-nav--transparent", $j(window).scrollTop() === 0 && $j(document).width() > 768);
});
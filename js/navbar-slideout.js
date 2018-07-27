$j = jQuery.noConflict();

$j(window).on("load", function() {
  var toggle = $j(".site-nav__menu-toggle");
  
  toggle.hmbrgr({
    width: 30,
    height: 30,

    barHeight: 5,
    barRadius: 3,
    
    speed: 150
  });
  
  toggle.click(function() {
    toggle.toggleClass("site-nav__menu-toggle--active");
    $j(".site-nav-menu").toggleClass('site-nav-menu--open');
  });
});
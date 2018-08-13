// Fadeable Blocks
$j = jQuery.noConflict();

$j(document).ready(function () {
  var element = $j(".fadeable");
  $j(".fadeable").addClass('fadeable--hidden');

  $j(window).scroll(function () {
    if ($j(".fadeable").length > 0) {
      var elementTopToPageTop = $j(element).offset().top;
      var windowTopToPageTop = $j(window).scrollTop();
      var windowInnerHeight = window.innerHeight;
      var elementTopToWindowTop = elementTopToPageTop - windowTopToPageTop;
      var elementTopToWindowBottom = windowInnerHeight - elementTopToWindowTop;
      var distanceFromBottomToAppear = 300;

      if (elementTopToWindowBottom > distanceFromBottomToAppear) {
        $j(element).addClass('fadeable--visible');
      }
      else if (elementTopToWindowBottom < 0) {
        $j(element).removeClass('fadeable--visible');
        $j(element).addClass('fadeable--hidden');
      }
    }
  });
});
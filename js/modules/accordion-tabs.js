$j = jQuery.noConflict();

$j(document).ready(function () {
    $j('.accordion-tabs').each(function (index) {
        $j(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
    });

    $j('.accordion-tabs').on('click', 'li > a.tab-link', null, function (event) {
        if (!$j(this).hasClass('is-active')) {
            event.preventDefault();

            var accordionTabs = $j(this).closest('.accordion-tabs');

            // Restart iframes inside tabs
            var iframe = accordionTabs.find('.is-open').find('.iframe-container').find('.iframe');
            iframe.attr('src', iframe.attr('src'));

            accordionTabs.find('.is-open').removeClass('is-open').hide();

            $j(this).next().toggleClass('is-open').toggle();
            accordionTabs.find('.is-active').removeClass('is-active');
            $j(this).addClass('is-active');
        } else {
            event.preventDefault();
        }
    });
});
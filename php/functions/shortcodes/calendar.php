<?php
/**
 * Generates the markup to embed the team calendar
 *
 * @return void
 */
function calendar_func() {
?>
<div class="iframe-container calendar">
    <iframe class="iframe calendar__month" src="https://calendar.google.com/calendar/embed?title=%3Ciframe%20src%3D%22https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fembed%3FshowTitle%3D0%26amp%3BshowDate%3D0%26amp%3BshowPrint%3D0%26amp%3BshowTabs%3D0%26amp%3BshowCalendars%3D0%26amp%3BshowTz%3D0%26amp%3Bheight%3D720%26amp%3Bwkst%3D1%26amp%3Bbgcolor%3D%2523ffffff%26amp%3Bsrc%3D1089media%2540gmail.com%26amp%3Bcolor%3D%2523853104%26amp%3Bctz%3DAmerica%252FNew_York%22%20style%3D%22border-width%3A0%22%20width%3D%221280%22%20height%3D%22720%22%20frameborder%3D%220%22%20scrolling%3D%22no%22%3E%3C%2Fiframe%3E&amp;showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=720&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=1089media%40gmail.com&amp;color=%23853104&amp;ctz=America%2FNew_York" style="border-width:0" frameborder="0" scrolling="no"></iframe>
    <iframe class="iframe calendar__agenda" src="https://calendar.google.com/calendar/embed?title=%3Ciframe%20src%3D%22https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fembed%3FshowTitle%3D0%26amp%3BshowDate%3D0%26amp%3BshowPrint%3D0%26amp%3BshowTabs%3D0%26amp%3BshowCalendars%3D0%26amp%3BshowTz%3D0%26amp%3Bheight%3D720%26amp%3Bwkst%3D1%26amp%3Bbgcolor%3D%2523ffffff%26amp%3Bsrc%3D1089media%2540gmail.com%26amp%3Bcolor%3D%2523853104%26amp%3Bctz%3DAmerica%252FNew_York%22%20style%3D%22border-width%3A0%22%20width%3D%221280%22%20height%3D%22720%22%20frameborder%3D%220%22%20scrolling%3D%22no%22%3E%3C%2Fiframe%3E&amp;showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=720&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=1089media%40gmail.com&amp;color=%23853104&amp;ctz=America%2FNew_York" style="border-width:0" frameborder="0" scrolling="no"></iframe>
</div>
<?php
}

add_shortcode( 'calendar', 'calendar_func' );
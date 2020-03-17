(function () {
'use strict';

var breadcrumbsOption = (function ($) {
  $('#as_customizer_breadcrumbs').on('click', function () {
    $('#hide_breadcrumbs').prop('disabled', $(this).prop('checked'));
  });
});

var autoCheckQuadmenuDev = (function ($) {
  $('#update-nav-menu').on('click', function ($) {
    $('#locations-quadmenu_dev').prop('checked', true);
  });
});

(function ($) {
  $(document).ready(function () {
    breadcrumbsOption($);
    autoCheckQuadmenuDev($);
  });
})(jQuery);

}());

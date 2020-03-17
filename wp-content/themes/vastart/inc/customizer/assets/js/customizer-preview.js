(function () {
'use strict';

var masonryInit = (function () {
  var $ = jQuery;
  new AnimOnScroll(document.querySelector('#vastart-grid'), {
    minDuration: 0.4,
    maxDuration: 1.7,
    viewportFactor: 0.2
  });
  $('.vastart-grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    horizontalOrder: true,
    gutter: 24,
    transitionDuration: '0.8s',
    percentPosition: true
  });
});

var eventTypes = {
  HTML: 'html',
  CSS: 'css',
  CLASS: 'addClass',
  TOGGLE_CLASS: 'toggleClass',
  OVERRIDE_STYLES: 'override-styles',
  TOGGLE_MASONRY: 'toggle-masonry'
};

(function ($) {
  $(document).ready(function () {
    var stylesReloaderId = 'live-reload-styles-' + Date.now();
    wp.customize.preview.bind('event:change', function (_ref) {
      var el = _ref.el,
          type = _ref.type,
          val = _ref.val,
          styles = _ref.styles;
      var stylesReloader = $('#' + stylesReloaderId);
      var newStyles = '';
      switch (type) {
        case eventTypes.HTML:
          $(el).html(val);
          break;
        case eventTypes.CSS:
          $(el).css(val);
          break;
        case eventTypes.OVERRIDE_STYLES:
          if (stylesReloader.size() === 0) {
            $('head').append($('<style id="' + stylesReloaderId + '" />'));
          }
          for (var property in styles) {
            if (Object.prototype.hasOwnProperty.call(styles, property)) {
              var item = styles[property];
              newStyles += item.selector + '{' + property + ':' + item.value + '}';
            }
          }
          $(stylesReloader).html(newStyles);
          break;
        case eventTypes.TOGGLE_CLASS:
          val.classes.forEach(function (item) {
            $(el).removeClass(item);
          });
          $(el).addClass(val.toggle);
          break;
        case eventTypes.TOGGLE_MASONRY:
          if (val === 'vastart-masonry-layout') {
            masonryInit();
          } else {
            $('.vastart-grid').masonry('destroy');
          }
          break;
        default:
          break;
      }
    });
  });
})(jQuery);

}());

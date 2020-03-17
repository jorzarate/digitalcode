(function () {
'use strict';

var eventTypes = {
  HTML: 'html',
  CSS: 'css',
  CLASS: 'addClass',
  TOGGLE_CLASS: 'toggleClass',
  OVERRIDE_STYLES: 'override-styles',
  TOGGLE_MASONRY: 'toggle-masonry'
};

wp.customize.bind('ready', function () {
  var $ = jQuery;
  $(document).on('input', '.vastart-input-slider-control input', function (e) {
    e.preventDefault();
    var value = $(this).val();
    var unit = $(this).data('unit');
    $(this).next('.value').html(value + unit);
  });
  wp.customize('logo-height', function (setting) {
    setting.bind(function (val) {
      wp.customize.previewer.send('event:change', {
        el: '.custom-logo-link img',
        type: eventTypes.CSS,
        val: {
          maxHeight: val + 'px'
        }
      });
    });
  });
  wp.customize('logo-sticky-height', function (setting) {
    setting.bind(function (val) {
      wp.customize.previewer.send('event:change', {
        el: '.custom-logo-sticky-link img',
        type: eventTypes.CSS,
        val: {
          maxHeight: val + 'px'
        }
      });
    });
  });
  wp.customize('primary-color', function (setting) {
    setting.bind(function (val) {
      wp.customize.previewer.send('event:change', {
        type: eventTypes.OVERRIDE_STYLES,
        styles: {
          'border-color': {
            selector: 'blockquote,.pagination .current',
            value: val
          },
          color: {
            selector: 'a:hover, .uf-breadcrumbs>span>span, .widget .rsswidget:hover, .widget .recentcomments .comment-author-link .url:hover, .widget #wp-calendar tbody td a:hover, .widget.uf-dark-scheme .rsswidget:hover, .widget.uf-dark-scheme #wp-calendar tbody tr td a:hover, #navbar ul li:hover .sub-menu li:hover, main#content #archive-post a.more-link:hover, main#content #blog-entries a.more-link:hover, main#content #blog-entries .sticky-icon span.icon-bookmark2,main#content #archive-post .sticky-icon span.icon-bookmark2, .uf-single-post .wp-caption-text a:hover, #footer .widget a:hover, .error404 #not-found h1, .mejs-container * .mejs-controls .mejs-volume-button a:hover, .navbar-light .navbar-nav .menu-item:hover::before, .navbar-light .navbar-nav .menu-item:hover > .nav-link, .list-item .kc-entry_meta > span i, .kc_tabs_nav li.ui-tabs-active a, .kc_tabs_nav li.ui-tabs-active a:hover, .kc_tabs_nav li:hover a, .post-grid > div > .content > .post-title-alt > a:hover, .post-grid > div > .content > .entry-meta > span > a, .list-post-type > .list-item > .post-content > h3 > a:hover, .list-item .kc-entry_meta > span a:hover, .uf-single-post__content a',
            value: val
          },
          'background-color': {
            selector: '.uf-checkbox .uf-checkbox-label input:checked ~ .checkmark, .widget #wp-calendar tr #today, .widget.uf-dark-scheme #wp-calendar tbody tr td#today, .selectize-control.single .selectize-dropdown .option.active, .uf-dark-scheme .selectize-control.single .selectize-dropdown .option.active, a.uf-buttons,.uf-buttons,input[type=\'submit\'],input[type=\'reset\'],input[type=\'button\'],#comments .comment-form .form-submit input, .kc-ui-progress, .kc_button, .content-button a, .pills.pills-primary,.widget.widget_tag_cloud .pills-primary.tag-cloud-link, .pagination .current, .mejs-container * .mejs-controls .mejs-time-rail .mejs-time-current, .mejs-container * .mejs-controls .mejs-volume-button .mejs-volume-current, .mejs-container * .mejs-controls .mejs-horizontal-volume-current, a.kc-read-more, .kc-team .content-socials a, .owl-theme .owl-controls .owl-page span',
            value: val + ' !important'
          },
          'box-shadow': {
            selector: '.uf-radio input:checked ~ .uf-radio-label::before',
            value: 'inset 0 0 0 3px ' + val + ' !important'
          },
          filter: {
            selector: '.uf-single-post__content a:hover',
            value: 'brightness(90%)'
          }
        }
      });
    });
  });
  wp.customize('navbar-font-color', function (setting) {
    setting.bind(function (val) {
      wp.customize.previewer.send('event:change', {
        type: eventTypes.OVERRIDE_STYLES,
        styles: {
          color: {
            selector: '.home .navbar-light .navbar-nav .nav-link, .home #navbar .icon-chevron-down::before, .home #header.sticky.sticky--top #quadmenu.detheme_default_menu .quadmenu-navbar-nav > li > a > .quadmenu-item-content',
            value: val + ' !important'
          }
        }
      });
    });
  });
  wp.customize('navbar-background-color', function (setting) {
    setting.bind(function (val) {
      wp.customize.previewer.send('event:change', {
        type: eventTypes.OVERRIDE_STYLES,
        styles: {
          'background-color': {
            selector: '#header.sticky.sticky--top',
            value: val + ' !important'
          }
        }
      });
    });
  });
  wp.customize('navbar-font-sticky-color', function (setting) {
    setting.bind(function (val) {
      wp.customize.previewer.send('event:change', {
        type: eventTypes.OVERRIDE_STYLES,
        styles: {
          color: {
            selector: '#header.sticky.sticky--not-top .navbar-light .navbar-nav .nav-link, .sticky.sticky--not-top .icon-chevron-down::before, #header #quadmenu.detheme_default_menu .quadmenu-navbar-nav > li > a > .quadmenu-item-content,#header #quadmenu.quadmenu-default_theme .quadmenu-navbar-nav > li:not(.quadmenu-item-type-button) > a > .quadmenu-item-content,.home #header.sticky.sticky--not-top #quadmenu.detheme_default_menu .quadmenu-navbar-nav > li > a > .quadmenu-item-content',
            value: val + ' !important'
          }
        }
      });
    });
  });
  wp.customize('navbar-background-sticky-color', function (setting) {
    setting.bind(function (val) {
      wp.customize.previewer.send('event:change', {
        type: eventTypes.OVERRIDE_STYLES,
        styles: {
          'background-color': {
            selector: '#header.sticky.sticky--not-top',
            value: val + ' !important'
          }
        }
      });
    });
  });
  wp.customize('blog-layout', function (setting) {
    setting.bind(function (val) {
      wp.customize.previewer.send('event:change', {
        el: 'body',
        type: eventTypes.TOGGLE_CLASS,
        val: {
          classes: ['vastart-layout-boxed', 'vastart-layout-fullwidth'],
          toggle: val
        }
      });
      $('[name="save"]').trigger('click');
    });
  });
  wp.customize('footer-legal', function (setting) {
    setting.bind(function (val) {
      if (val === '') {
        val = vastartCustomizerDefault['footer-legal'];
      }
      wp.customize.previewer.send('event:change', {
        el: '#legal',
        type: eventTypes.HTML,
        val: val
      });
    });
  });
  wp.customize('header_image_show_frontpage', function (setting) {
    setting.bind(function (val) {
      wp.customize.previewer.send('event:change', {
        el: 'body',
        type: eventTypes.TOGGLE_CLASS,
        val: {
          classes: ['vastart-header-image-hide', 'vastart-header-image-show'],
          toggle: val
        }
      });
      $('[name="save"]').trigger('click');
    });
  });
  wp.customize('related-posts', function (setting) {
    setting.bind(function (layout) {
      var displayRelatedPosts = '';
      if (layout === 'related-posts-off') {
        displayRelatedPosts = 'none';
      } else {
        displayRelatedPosts = 'block';
      }
      wp.customize.previewer.send('event:change', {
        el: '.related-posts',
        type: eventTypes.CSS,
        val: {
          display: displayRelatedPosts
        }
      });
      $('[name="save"]').trigger('click');
    });
  });
  wp.customize('footer-display-copyright', function (setting) {
    setting.bind(function (val) {
      if (val === '0') {
        $('#customize-control-vastart-footer-legal-control').hide();
      } else {
        $('#customize-control-vastart-footer-legal-control').show();
      }
    });
  });
  if (wp.customize.instance('footer-display-copyright').get() === '0') {
    $('#customize-control-vastart-footer-legal-control').hide();
  } else {
    $('#customize-control-vastart-footer-legal-control').show();
  }
  wp.customize('footer-option', function (setting) {
    setting.bind(function (val) {
      if (val === 'footer-page') {
        $('#vastart-footer-url-control').hide();
        $('#customize-control-vastart-footer-content-control').show();
      } else {
        $('#customize-control-vastart-footer-content-control').hide();
        $('#vastart-footer-url-control').show();
      }
    });
  });
  if (typeof wp.customize.instance('footer-option') !== 'undefined') {
    if (wp.customize.instance('footer-option').get() === 'footer-page') {
      $('#vastart-footer-url-control').hide();
      $('#customize-control-vastart-footer-content-control').show();
    } else {
      $('#customize-control-vastart-footer-content-control').hide();
      $('#vastart-footer-url-control').show();
    }
  }
  $(document).on('click', '#vastart-footer-url-control', function (e) {
    e.preventDefault();
    $('#accordion-panel-widgets h3').trigger('click');
  });
});

}());

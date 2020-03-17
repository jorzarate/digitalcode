(function () {
'use strict';

var commentForm = (function () {
  var $ = jQuery;
  $(document).on('click', '.comment-reply-link', function (event) {
    event.preventDefault();
    var cancelReplyEl = $('#cancel-comment-reply-link');
    var cancelReplyClone = cancelReplyEl.clone().attr('id', '#cancel-comment-reply-' + Date.now());
    cancelReplyClone.unbind('click');
    cancelReplyClone.bind('click', function (event) {
      event.preventDefault();
      cancelReplyEl.trigger('click');
      cancelReplyClone.remove();
    });
    cancelReplyEl.appendTo($('.form-submit'));
    $('html, body').animate({
      scrollTop: $('.comment-respond').offset().top - 30
    });
  });
});

var popover = (function () {
  var $ = jQuery;
  $('[data-toggle="popover"]').popover({
    html: true
  });
  var content = $('#sosial-share-content').html();
  $('.social-share').popover({
    html: true,
    trigger: 'focus',
    animation: true,
    placement: 'right',
    content: content
  });
});

var carousel = (function () {
  var $ = jQuery;
  $('.uf-carousel').carousel();
});

var related = (function () {
  var $ = jQuery;
  var cards = $('.related-posts .card');
  cards.each(function (index, el) {
    var height = $(el).height();
    
  });
});

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

var mobileNav = (function () {
  var $ = jQuery;
  $('.uf-mobile-nav-expand-submenu').on('click', function () {
    $(this).next('.sub-menu').addClass('open');
    var navWidth = $('.uf-mobile-nav-content').width();
    var navLeft = $('#mobile_navigation').position().left - navWidth;
    $('#mobile_navigation').css('transform', 'translateX(' + navLeft + 'px)');
  });
  $('.uf-mobile-nav-close-submenu').on('click', function () {
    $(this).parent().parent('.sub-menu').removeClass('open');
    var navWidth = $('.uf-mobile-nav-content').width();
    var navLeft = $('#mobile_navigation').position().left + navWidth;
    $('#mobile_navigation').css('transform', 'translateX(' + navLeft + 'px)');
  });
  $('.uf-mobile-nav-modal').on('hidden.bs.modal', function () {
    $('.sub-menu').removeClass('open');
    $('#mobile_navigation').css('transform', 'translateX(0)');
  });
});

var fullscreenModal = (function () {
  var $ = jQuery;
  $('.dt_show_fullscreen_button').on('click', function (e) {
    e.preventDefault();
    $('#dt_fullscreen_modal').addClass('dt_show_popup');
  });
  $('.dt_close_fullscreen_button').on('click', function (e) {
    e.preventDefault();
    $('#dt_fullscreen_modal').removeClass('dt_show_popup');
  });
});

(function ($) {
  $(document).ready(function () {
    commentForm();
    carousel();
    related();
    popover();
    mobileNav();
    fullscreenModal();
    if ($('body').hasClass('blog') || $('body').hasClass('category') || $('body').hasClass('archive') || $('body').hasClass('search')) {
      if ($('body').hasClass('vastart-masonry-layout')) {
        if (!$('body').hasClass('single')) {
          masonryInit();
        }
      }
    }
  });
})(jQuery);

}());

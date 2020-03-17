/* global jQuery */
// export default () => {
  var $ = jQuery

  $('ul.nav li.dropdown').on('mouseenter', function () {
    const dropdownEl = $(this).find('.dropdown-toggle').first().next('.dropdown-menu')

    dropdownEl.stop(true, true).delay(200).slideDown(250, function () {
      if ($(this).hasClass('uf-submenu-right')) {
        if (isOffscreen($(this))) {
          $(this).addClass('uf-submenu-left').removeClass('uf-submenu-right')
        }
      }
    })
  })

  $('ul.nav li.dropdown').on('mouseleave', function () {
    $(this).find('.dropdown-toggle').first().next('.dropdown-menu').stop(true, true).delay(500).slideUp(250)
  })

  function isOffscreen(el) {
    /* global window */
    const rect = el.offset()

    return (
      (rect.left) < 0 ||
        (rect.top) < 0 ||
        (rect.left + el.outerWidth()) > window.innerWidth ||
        (rect.top + el.outerHeight()) > window.innerHeight ||
        (rect.left > window.innerWidth || rect.top > window.innerHeight)
    )
  }
// }

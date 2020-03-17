/* global Headroom, jQuery */

// export default () => {
  var $ = jQuery
  const header = $('#header')
  const headerHeight = header.height()
  const headroom = new Headroom(header.get(0), {
    classes: {
      initial: 'sticky',
      pinned: 'sticky--pinned',
      unpinned: 'sticky--unpinned',
      top: 'sticky--top',
      notTop: 'sticky--not-top',
      bottom: 'sticky--bottom',
      notBottom: 'sticky--not-bottom'
    },
    // STILL ON INVESTIGATION
    onPin() {
      $('#page').css('padding-top', headerHeight)
    },
    onTop() {
      $('#page').css('padding-top', headerHeight)
    }
  })
  headroom.init()
// }
// if ($('body').hasClass('vastart-sticky')) {
//   sticky()
// }

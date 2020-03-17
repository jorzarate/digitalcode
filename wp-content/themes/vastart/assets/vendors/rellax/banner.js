/* global Rellax, jQuery */

// export default () => {
  var $ = jQuery

  /* eslint-disable no-new */
  if ($('#header-image-bg').size() > 0) {
    new Rellax('#header-image-bg', {
      speed: -4,
      center: false,
      round: false,
      vertical: true,
      horizontal: false
    })
  }
  /* eslint-enable no-new */
// }

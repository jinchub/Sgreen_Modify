(function (d) {
  var c = d.createElement('link')
  c.rel = 'stylesheet'
  c.href = '../js/tq/weather-simple.css?v=2.0'
  var s = d.createElement('script')
  s.src = '../js/tq/weather-simple.js?v=2.0'
  var sn = d.getElementsByTagName('script')[0]
  sn.parentNode.insertBefore(c, sn)
  sn.parentNode.insertBefore(s, sn)
})(document)

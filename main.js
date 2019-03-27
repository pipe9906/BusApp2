
  addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
        var options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};

function success(pos) {
  var crd = pos.coords;

   console.log('Your current position is:');
   console.log('Latitude : ' + crd.latitude);
  console.log('Longitude: ' + crd.longitude);
  //console.log('More or less ' + crd.accuracy + ' meters.');
  return crd
};

function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
};

console.log(navigator.geolocation.getCurrentPosition(success, error, options));
console.log(success)

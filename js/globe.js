
   var planet = planetaryjs.planet();

// You can remove this statement if `world-110m.json`
// is in the same path as the HTML page:
planet.loadPlugin(planetaryjs.plugins.earth({
  topojson: { file: 'https://raw.githubusercontent.com/BinaryMuse/planetary.js/v1.1.2/dist/world-110m.json' },
  /* Let's add some color to the globe */
  oceans:   { fill:   '#fff' },
  land:     { fill:   '#00f' },
  borders:  { stroke: '#00f' }
}));
planet.loadPlugin(planetaryjs.plugins.pings());
// Load our custom autorotate plugin
planet.loadPlugin(autorotate(10));
 
// // zoom option
// planet.loadPlugin(planetaryjs.plugins.zoom({
//     scaleExtent: [100, 300]
//   }));

// drag
  planet.loadPlugin(planetaryjs.plugins.drag({
    // Dragging the globe should pause the
    // automatic rotation until we release the mouse.
    onDragStart: function() {
      this.plugins.autorotate.pause();
    },
    onDragEnd: function() {
      this.plugins.autorotate.resume();
    }
  }));

  // Every few hundred milliseconds, we'll draw another random ping.
  var colors = ['red', 'yellow', 'white', 'orange', 'green', 'cyan', 'pink'];




// Gujarat
  setInterval(function() {
    var lat = 23.335109;
    var lng = 72.0602604;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
// Maharastra
  setInterval(function() {
    var lat = 18.8020077;
    var lng = 74.5307923;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
// Kenya
  setInterval(function() {
    var lat = 13.0771188;
    var lng = 74.5307923;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);

//   Pakistan

  setInterval(function() {
    var lat = 30.0497238;
    var lng = 60.3338893;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);

//   vietnam
  setInterval(function() {
    var lat = 15.6073932;
    var lng = 96.8709151;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);



//   bangladesh
  setInterval(function() {
    var lat = 23.4905821;
    var lng = 88.1001943;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);



// phlipines
  setInterval(function() {
    var lat = 13.551205;
    var lng = 123.2106673;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
// Australia 
  setInterval(function() {
    var lat = -25.889961 ;
    var lng = 135.7659833;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
// Canada
  setInterval(function() {
    var lat = 60.091136;
    var lng = -111.6998617;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
// USA
  setInterval(function() {
    var lat = 38.063711;
    var lng = -101.1406167;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
// NETHERLANDS
  setInterval(function() {
    var lat = 52.184675;
    var lng = 5.5754093;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);



//   UAE
  setInterval(function() {
    var lat = 23.513291;
    var lng = 54.0620873;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);

// Egypt
  setInterval(function() {
    var lat = 26.218802;
    var lng = 30.0158583;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);

//   kyrgystan
  setInterval(function() {
    var lat = 41.356232;
    var lng = 74.5666063;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
//   france
  setInterval(function() {
    var lat = 46.400269;
    var lng = 2.6580333;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);

//   Czech Republic
  setInterval(function() {
    var lat = 49.611168;
    var lng = 15.0815843;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
//   Russia
  setInterval(function() {
    var lat =61.417083;
    var lng = 92.6573753;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
//   Italy
  setInterval(function() {
    var lat =42.713148;
    var lng = 12.5984463;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
//   Chenai
  setInterval(function() {
    var lat =13.079882;
    var lng = 80.2707893;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
//   zimbave
  setInterval(function() {
    var lat =-19.3689311;
    var lng = 29.3063601;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);
//   kenya
  setInterval(function() {
    var lat =0.498544;
    var lng = 37.8813113;
    var color ='#f00';
    planet.plugins.pings.add(lng, lat, { color: color, ttl: 2000, angle: Math.random() * 10 });
  }, 100);





// Load the `pings` plugin to draw animated pings on the globe
// planet.loadPlugin(planetaryjs.plugins.pings({
//   color: '#f00', ttl: 1000, angle: 10
// }));


// Make the planet fit well in its canvas
planet.projection.scale(250).translate([300, 300]);
var canvas = document.getElementById('globe');
planet.draw(canvas);






// This plugin will automatically rotate the globe around its vertical
// axis a configured number of degrees every second.
function autorotate(degPerSec) {
  // Planetary.js plugins are functions that take a `planet` instance
  // as an argument...
  return function(planet) {
    var lastTick = null;
    var paused = false;
    planet.plugins.autorotate = {
      pause:  function() { paused = true;  },
      resume: function() { paused = false; }
    };
    // ...and configure hooks into certain pieces of its lifecycle.
    planet.onDraw(function() {
      if (paused || !lastTick) {
        lastTick = new Date();
      } else {
        var now = new Date();
        var delta = now - lastTick;
        // This plugin uses the built-in projection (provided by D3)
        // to rotate the globe each time we draw it.
        var rotation = planet.projection.rotate();
        rotation[0] += degPerSec * delta / 1000;
        if (rotation[0] >= 180) rotation[0] -= 360;
        planet.projection.rotate(rotation);
        lastTick = now;
      }
    });
  };
};
const particleColor = '#565656'
const lineColor = particleColor

particlesJS("particles", {
  "particles": {
    "number": {
      "value": 200,
      "density": {
        "enable": true,
        "value_area": 1000
      }
    },
    "color": {
      "value": particleColor
    },
    "shape": {
      "type": "edge",
      "stroke": {
        "width": 0,
        "color": lineColor
      },
      "polygon": {
        "nb_sides": 20
      },
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": lineColor,
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
  	"events": {
  		"onhover": { "enable": false },
  		"onclick": { "enable": false }
  	}

  },
  "retina_detect": true
});
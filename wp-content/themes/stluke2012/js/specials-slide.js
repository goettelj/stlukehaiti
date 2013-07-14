 /*
 Cross Slide for Front Page Specials
 */
$(document).ready(function() {
	$('#specialsbox2').crossSlide({
	  sleep: 3,
	  fade: 1
	}, [
	  { src: '/md/images/specials/special01.jpg' },
	  { src: '/md/images/specials/special02.jpg'   },
	  { src: '/md/images/specials/special03.jpg'  },
	])
	});
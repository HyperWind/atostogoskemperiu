(function() {

    var pics = document.getElementsByClassName('pic');

    var onEnter = function() {

	document.getElementById('viewer').classList.add('active');

	var viewerImage = document.getElementById('viewer-image');
	var image = this.getElementsByTagName('img')[0];
	var imagePath;
	
	if (document.body.clientWidth > 1980) {
	    viewerImage.src = image.name;
	} else if (document.body.clientWidth > 720) {
	    imagePath = image.name.split('/');
	    imagePath[imagePath.length - 1] = 'small-' + imagePath[imagePath.length - 1];
	    viewerImage.src = imagePath.join('/');
	} else {
	    imagePath = image.name.split('/');
	    imagePath[imagePath.length - 1] = 'micro-' + imagePath[imagePath.length - 1];
	    viewerImage.src = imagePath.join('/');
	}
	
    };

    var onLeave = function() {
	document.getElementById('viewer').classList.remove('active');
    };

    for (var i = 0; i < pics.length; i++) {
	pics[i].addEventListener('click', onEnter);
	if (!(/Mobi/.test(navigator.userAgent))) {
	    pics[i].addEventListener('mouseenter', onEnter);
	    pics[i].addEventListener('mouseleave', onLeave);
	}
    }

    var viewer = document.getElementById('viewer');
    
    viewer.addEventListener('click', onLeave);

}());

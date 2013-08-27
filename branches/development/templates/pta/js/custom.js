jQuery(function ($) {
	
	// determine iframe height
    var $viewportHeight = parseInt($(window).height());
	
	// test body classes
	var $bodyClasses = [];
	
	if (/Android|webOS|iPhone|iPod|BlackBerry|iPad/i.test(navigator.userAgent)) $bodyClasses.push("mobile");
	if (/Android/i.test(navigator.userAgent)) $bodyClasses.push("android");
	else if (/webOS/i.test(navigator.userAgent)) $bodyClasses.push("webos");
	else if (/iPhone/i.test(navigator.userAgent)) $bodyClasses.push("iphone");
	else if (/iPod/i.test(navigator.userAgent)) $bodyClasses.push("ipod");
	else if (/BlackBerry/i.test(navigator.userAgent)) $bodyClasses.push("blackberry");
	else if (/MSIE/i.test(navigator.userAgent)) $bodyClasses.push("ie");
	else if (/Firefox/i.test(navigator.userAgent)) $bodyClasses.push("firefox");
	else if (/Chrome/i.test(navigator.userAgent)) $bodyClasses.push("chrome");
	else if (/Safari/i.test(navigator.userAgent)) $bodyClasses.push("safari");
	if (/Macintosh/i.test(navigator.userAgent)) $bodyClasses.push("mac");
	else if (/Windows/i.test(navigator.userAgent)) $bodyClasses.push("windows");    
    else if (/iPad/i.test(navigator.userAgent)) {
    	$bodyClasses.push("ipad");
		$viewportHeight = 600;
	}
	
	var $win = $(window).bind('orientationchange', function(){
    // math.abs to reduce logical operators   
    $('body').removeClass('landscape portrait') // reset
        .addClass(Math.abs(this.orientation) === 90 ? "landscape" : "portrait");
	});
	
	// now you can trigger the orientation manually on doc ready to set the class
	$win.trigger('orientationchange');
	
	// add body classes to element
	$bodyClasses.forEach(function($class) {
		$("body").addClass($class);
	});
	
	
	// Loading modal box content
    var $modalText = "modal";
    var $modal = $('div.'+ $modalText);
    $("a[data-toggle='"+$modalText+"']").on('click', function (e) {
		
		// Call the modal manually
		e.preventDefault();
		var url = $(this).attr('href');
		$modal.find(".modal-body").html('<iframe width="100%" height="100%" frameborder="0" scrolling="yes" allowtransparency="true" src="' + url + '"></iframe>');
		$modal.modal({
		    show: true
		});
    });


    $modal.on('hide', function () {
        $modal.find(".modal-body").empty()
        // Clean up
    });
    
    // Loading accordion box content
    $('.accordion-group').on('click', function () {
		var $group = $(this);
		if ($group.data("remoteLoaded") != true) {
			var $inner = $group.find(".accordion-body .accordion-inner");
			var $src = $inner.attr("data-link")+" #content";
			
			$inner.load($src, function(data) {
				$(this).css("background", "#FFFFFF");
				$group.data("remoteLoaded", true);
			});
		}
	});
    
    $('.question-blurb a.button').on('click', function () {
	    $(this).attr('target','_parent');
    });
    
    /*$("form#share_form").validate({
	    rules: {
		    "number-txt[]": {
		      digits: true
		    }
		  }
    });*/
});
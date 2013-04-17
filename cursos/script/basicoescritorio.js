var ANIM_DURATION = 1000;

		function updateClock(){
			var now = new Date();
			var hour = now.getHours();
			if(hour < 10) hour = "0" + hour;
			var mins = now.getMinutes();
			if(mins < 10) mins = "0" + mins;
			var secs = now.getSeconds();
			if(secs < 10) secs = "0" + secs;
			$('#clock').html(hour + ":" + mins);
			setTimeout("updateClock()", 5000);
		}

		$(document).ready(function(){
			updateClock();
			$('.icon').fadeIn(ANIM_DURATION).draggable({
				containment: 'parent',
				cancel: "div.name",
				distance: 20,
				snap: '#main',
				opacity: 0.5,
			});
			$(document).bind("contextmenu",function(e){
				return false;
			});
		});
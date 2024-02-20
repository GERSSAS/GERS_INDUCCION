// function next slider ------->
$("#next").click(function(){
	$(".current").addClass("hide");
	setTimeout(function(){
		updateItems(1);
		$(".current").removeClass("hide");
	}, 300);
});

// function previous slider ------->
$("#prev").click(function(){
	$(".current").addClass("hide");
	setTimeout(function(){
		updateItems(-1);
		$(".current").removeClass("hide");
	}, 300);
});

// function next - previous ------->
function updateItems(delta){
	// slider module ------->
	var $items = $('.contentModule').children();
	var $current = $items.filter('.current');
	var index = $current.index();
	var newIndex = index+delta;
	newIndex = (newIndex < 0) ? 0 : ((newIndex > $items.length) ? $items.length : newIndex); 
	if (newIndex != index){
		$current.removeClass('current');
		$current = $items.eq(newIndex).addClass('current');
		$("#textProg").html(newIndex+1);
		$("#prev").toggle(!$current.is($items.first()));    
		$("#next").toggle(!$current.is($items.last()));    
	}
	// cicle progress ------->
	var $items2 = $('.contCircleBar').children();
	var $current2 = $items2.filter('.current');
	var index2 = $current2.index();
	var newIndex2 = index2+delta;
	newIndex2 = (newIndex2 < 0) ? 0 : ((newIndex2 > $items2.length) ? $items2.length : newIndex2);
	if (newIndex2 != index2){
		$current2.removeClass('current');
		$current2 = $items2.eq(newIndex2).addClass('current');    
	}
	// reset activity h5p ------->
	$('iframe').attr('src', function (i, val) { return val; });
	// scroll position top ------->
	$('html, body').animate({scrollTop:0}, 'slow');
	// function animation slide ------->
	var cont = newIndex+1;
	aniSl19(cont);
	// stop audio video
	$('audio, video')[0].pause();
	//change logo dark
	if ($('body').hasClass('darkStyle')) {
		$('.logoTop').attr("src", 'assets/imagenes/logo_1981png.png');
	} else {
		$('.logoTop').attr("src", 'assets/imagenes/logo_1981png.png');
	}
}

// function progress circle ------->
function progCircle(e){
	$(".current").addClass("hide");
  setTimeout(function(){
    resetMenu();
		var sliderAct = '.contentModule > div:nth-child('+ e +')';
		var progressCircle = '.contCircleBar span:nth-child('+ e +')';
		$(sliderAct).addClass('current');
		$(progressCircle).addClass('current');
		$("#textProg").html(e);
		//reset activity h5p ------->
	    $('iframe').attr('src', function (i, val) { return val; });
		//function animation latest slide------->
		aniSl19(e);
		$(".current").removeClass("hide");
	}, 300);
}

// function button home ------->
function resetMenu(){
	var $items = $('.contentModule').children();
  var $current = $items.filter('.current');
  $current.removeClass('current');
  var $items2 = $('.contCircleBar').children();
  var $current2 = $items2.filter('.current');
  $current2.removeClass('current');
  $("#prev, #next").css('display','inline-block');
}

// add pagination circle footer
createProgCircle();
function createProgCircle(){
	var sliders = $(".contentModule > div").length;
	let htmlCircleBar;
	for(var i = 1; i < sliders; i++) {
		if (i == 1) {
				htmlCircleBar = '<span onclick="progCircle(' + i + ');" class="current"></span>';
		} else {
			htmlCircleBar = '<span onclick="progCircle(' + i + ');"></span>';
		}
		$('.contCircleBar').append(htmlCircleBar);
	}
}

// event modal
$(".modal").on("hidden.bs.modal", function(){
  $(".contentModule video, .contentModule audio").trigger('pause');
});

//function bar menu
$(".fa-bars").on("click", function(){
	event.stopPropagation();
	$(".headerOpc").addClass('act');
});
$('html, .fa-times').click(function() {
  $(".headerOpc").removeClass('act');
});
$('.headerOpc').click(function() {
	event.stopPropagation();
});
$(function(){
	//slider
	var time = 4; // time in seconds
		 
	var $progressBar,
	  	$bar, 
	  	$elem, 
	  	isPause, 
	  	tick,
	  	percentTime;

	//Init the carousel
	$("#owl-demo").owlCarousel({
	  slideSpeed : 500,
	  paginationSpeed : 500,
	  singleItem : true,
	  afterInit : progressBar,
	  afterMove : moved,
	  startDragging : pauseOnDragging,
	  transitionStyle : "fadeUp"
	});

	//Init progressBar where elem is $("#owl-demo")
	function progressBar(elem){
	  $elem = elem;
	  //build progress bar elements
	  buildProgressBar();
	  //start counting
	  start();
	}

	//create div#progressBar and div#bar then prepend to $("#owl-demo")
	function buildProgressBar(){
	  $progressBar = $("<div>",{
	    id:"progressBar"
	  });
	  $bar = $("<div>",{
	    id:"bar"
	  });
	  $progressBar.append($bar).prependTo($elem);
	}

	function start() {
	  //reset timer
	  percentTime = 0;
	  isPause = false;
	  //run interval every 0.01 second
	  tick = setInterval(interval, 10);
	};

	function interval() {
	  if(isPause === false){
	    percentTime += 1 / time;
	    $bar.css({
	       width: percentTime+"%"
	     });
	    //if percentTime is equal or greater than 100
	    if(percentTime >= 100){
	      //slide to next item 
	      $elem.trigger('owl.next')
	    }
	  }
	}

	//pause while dragging 
	function pauseOnDragging(){
	  isPause = true;
	}

	//moved callback
	function moved(){
	  //clear interval
	  clearTimeout(tick);
	  //start again
	  start();
	}

	//uncomment this to make pause on mouseover 
	// $elem.on('mouseover',function(){
	//   isPause = true;
	// })
	// $elem.on('mouseout',function(){
	//   isPause = false;
	// })


	//전체 메뉴 버튼
	$(".tit_btn").click(function(){
		//$("#nav").css("display","block");
		$("#nav").slideToggle();
		$(".tit_btn").toggleClass("open");

		var bt = $(".tit_btn > i").attr("class");
		//alert(bt);
		var tx = $(".tit_btn").text();
		//alert(tx);
		var ht = $(".tit_btn").html();
		//alert(ht);

		if($(".tit_btn").hasClass("open")){
			//가지고 있으면 실행문
			//$(".tit_btn > i").attr("class","fa fa-compress");
			$(".tit_btn").html("<i class='fa fa-compress' aria-hidden='true'></i><span class='blind'>메뉴 접기</span>");
		} else {
			//가지고 있지 않으면 실행문
			//$(".tit_btn > i").attr("class","fa fa-expand");
			$(".tit_btn").html("<i class='fa fa-expand' aria-hidden='true'></i><span class='blind'>메뉴 펼치기</span>");
		}
	});

});
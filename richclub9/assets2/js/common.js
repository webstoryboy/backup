function counter() {
  if ($('.counter .count')
    .size()) {
    $c = $('.counter .count');

    $c.each(function () {
      var $this = $(this);
      $this.data('target', parseInt($this.html()));
      $this.data('counted', false);
      $this.html('0');
    });

    $(window)
      .bind('scroll', function () {
        var speed = 3000;

        $c.each(function (i) {
          var $t = $(this);
          if (!$t.data('counted') && $(window)
            .scrollTop() + $(window)
            .height() >= $t.offset()
            .top) {
            $t.data('counted', true);

            $t.animate({
              dummy: 1
            }, {
              duration: speed,
              step: function (now) {
                var $this = $(this);
                var val = Math.round($this.data('target') * now);
                $this.html(val);
              },
              easing: 'easeInOutQuart'
            });

            // easy pie
            $('.pie')
              .easyPieChart({
                barColor: '#777777',
                trackColor: '#a7a7a7',
                scaleColor: false,
                lineWidth: 5,
                size: 300,
                lineCap: 'square',
                animate: { duration: speed, enabled: true }
              });
          }
        });
      })
      .triggerHandler('scroll');
  }
}

function counter2() {
  if ($('.counter2 .count')
    .size()) {
    $c = $('.counter2 .count');

    $c.each(function () {
      var $this = $(this);
      $this.data('target', parseInt($this.html()));
      $this.data('counted', false);
      $this.html('0');
    });

    $(window)
      .bind('scroll', function () {
        var speed = 3000;

        $c.each(function (i) {
          var $t = $(this);
          if (!$t.data('counted') && $(window)
            .scrollTop() + $(window)
            .height() >= $t.offset()
            .top) {
            $t.data('counted', true);

            $t.animate({
              dummy: 1
            }, {
              duration: speed,
              step: function (now) {
                var $this = $(this);
                var val = Math.round($this.data('target') * now);
                $this.html(val);
              },
              easing: 'easeInOutQuart'
            });

            // easy pie
            $('.pie2')
              .easyPieChart({
                barColor: '#777777',
                trackColor: '#a7a7a7',
                scaleColor: false,
                lineWidth: 10,
                size: 200,
                lineCap: 'square',
                animate: { duration: speed, enabled: true }
              });
          }
        });
      })
      .triggerHandler('scroll');
  }
}   

function mainAni(){
  setTimeout(function(){
    $(".sec1-box").addClass("show");
  },2500);
};

function parallax(){
  var dot = $("#nav>ul>li");
  var contents = $("#contents>div");

  dot.on("click",function(e){
    e.preventDefault();
    var target = $(this);
    var index =target.index();
    var section=contents.eq(index);
    var offset=section.offset().top;
    $("html, body").animate({scrollTop:offset},300,"easeInQuint");
  });

  $(window).scroll(function(){
  var wScroll=$(this).scrollTop();

  if(wScroll >= 300){
    $("#nav").addClass("on");
  } else if (wScroll == 0){
    $("#nav").removeClass("on");
  }

  if(wScroll > $(".vox-list.img1").offset().top-500){
    $(".vox-list.img1").addClass("show");
  };
  if(wScroll > $(".vox-list.img2").offset().top-500){
    $(".vox-list.img2").addClass("show");
  };
  if(wScroll > $(".vox-list.img3").offset().top-500){
    $(".vox-list.img3").addClass("show");
  };

  if(wScroll > contents.eq(4).offset().top-400){
    $(".sec5 .codepen .column").each(function(i){
      setTimeout(function(){
        $(".sec5 .codepen .column").eq(i).addClass("show");
      },300 * (i+2));
    });
  };

  if(wScroll > contents.eq(5).offset().top-700){
    $(".sec6>p").each(function(i){
      setTimeout(function(){
        $(".sec6>p").eq(i).addClass("show");
      },300 * (i+2));
    });
  };

});
};

function imagesProgress() {
			var $container = $('#progress'),
				$progressBar = $container.find('.progress-bar'),
				$progressText = $container.find('.progress-text'),
				imgLoad = imagesLoaded('body'),
				imgTotal = imgLoad.images.length,
				imgLoaded = 0,
				current = 0,
				progressTimer = setInterval(updateProgress, 1000 / 60);

				imgLoad.on('progress', function(){
					imgLoaded++;
				});

				function updateProgress(){
					var target = (imgLoaded / imgTotal) * 100;
						current += (target - current) * 0.1;

					$progressBar.css({ width: current + '%' });
					$progressText.text( Math.floor(current) +  '%' );

					if(current >= 100){
						clearInterval(progressTimer);
						$container.addClass('progress-complete');
						$progressBar.add($progressText).delay(500).animate({ opacity:0 }, 250, function(){
						$container.animate({ top: '-100%' }, 1000, 'easeInOutQuint' );
			  		});
				};

				if(current > 99.9){
					current = 100;
				};
			};
		};
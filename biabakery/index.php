<?php include 'header.php'; ?>
	<div id="content">
	<? // Start Slider ?>
	<style type="text/css">
	.carousel {text-align: center}
		.carousel .bigpic {
			transition: all 0.4s;
			-webkit-transition: all 0.4s;
		}
		.carousel .nav {min-width: 60%;}
		.carousel .nav .controls {
			vertical-align: middle;
			display: inline-block;
			height: 113px;
			font-size: 20px;
		}
		.carousel .nav img {
			max-width: 23.7%;
			margin: 0 5px;
			cursor: pointer;
			float: left;
		}
		#left {
			position: absolute;
			left: 13%;
			font-size: 44px;
			color: #b15e0e;
			opacity: 0.5;
		}
		#right {
			position: absolute;
			right: 13%;
			font-size: 44px;
			color: #b15e0e;
			opacity: 0.5;
		}
		.carousel .nav .thumbnail_holder {
			display: inline-block;
			overflow: hidden;
		}
		.carousel .nav .thumbnail_inner {
			display: inline-block;
			margin-left: 0px;
		}
		.carousel .nav .controls span {cursor: pointer;}</style>
		
		<div class="carousel">
			<img class="bigpic one" src="imgs/slider1.jpg" alt="big slider picture"/>
			<div class="nav">
				<div class="controls left" id="left">
					<span>&lt;</span>
				</div>
				<div class="controls right" id="right">
					<span>&gt;</span>
				</div>
				<span class="thumbnail_holder">
					<span class="thumbnail_inner">
						<img class="active" src="imgs/slider1.jpg" alt="slider"/>
						<img src="imgs/slider2.jpg" alt="slider"/>
						<img src="imgs/slider3.jpg" alt="slider"/>
						<img src="imgs/slider4.jpg" alt="slider"/>
					</span>
				</span>
		</div>
		<script>
			function automate() {
				setTimeout(function() {
					$('.controls.right').click();
					automate();
				},5000);
			}
			$(function() {
				automate();
				$('.carousel .nav img').click(function() {
					this_element = $(this);
					if (this_element.attr('src') != $('.bigpic').attr('src')){
						$('.bigpic').css('opacity', 0);
						setTimeout(function() {
							$('.bigpic').attr('src', this_element.attr('src')).css('opacity', 1);
						},400);
						$('.thumbnail_inner img.active').removeClass('active');
						this_element.addClass('active');
					}
				});
				$('.controls.left').click(function() {
					if($('.thumbnail_inner img.active').prev().attr('src')) {
						$('.thumbnail_inner img.active').prev().click();
					} else {
						$('.thumbnail_inner img:last-child').click();
					}
				});

				$('.controls.right').click(function() {
					if($('.thumbnail_inner img.active').next().attr('src')) {
						$('.thumbnail_inner img.active').next().click();
					} else {
						$('.thumbnail_inner img:first-child').click();
					}
				});
			});
		</script>

	<? // End Slider ?>
	</div>
<script>

</script>
    </div>
	<?php include 'footer.php'; ?>
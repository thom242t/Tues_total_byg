<?php get_header(); ?>
    <!-- END nav -->

	<div class="text-box">

		<div class="about-a1">
			<div class="container1">
				<div class="img1-flex">
					<img height="70px" width="auto" src="<?php the_field ('front_page_icon1'); ?>" alt="">
					<br>
					<h4> <b><?php the_field ('frontpage_info_title1'); ?></b></h4>
					<p><?php the_field ('frontpage_info_text1'); ?></p>
				</div>
				<div class="img2-flex">
					<img height="70px" width="auto" src="<?php the_field ('front_page_icon2'); ?>" alt="">
					<br>
					<h4><b><?php the_field ('frontpage_info_title2'); ?></b></h4>
					<p><?php the_field ('frontpage_info_text2'); ?> </p>
				</div>
				<div class="img3-flex">
					<img height="70px" width="auto" src="<?php the_field ('front_page_icon3'); ?>" alt="">
					<br>
					<h4> <b><?php the_field ('frontpage_info_title3'); ?></b></h4>
					<p><?php the_field ('frontpage_info_text3'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Banner -->


	<!-- Start About us -->

	<div id="about" class="container3">
		<div class="parallax">
		<img  src="<?php the_field ('cover_img2'); ?>" alt="">
		</div>
		<br>

		<div class="about-us">
			<div class="about-text">
				<h1><?php the_field ('about_us_info_title'); ?>
				</h1>
				<p><?php the_field ('about_us_info_text'); ?>
				</p>
			</div>
			<div>
				<video class="video-tue" width="auto" height="500" controls>
					<source src="<?php echo get_template_directory_uri() ?>/images/Tues_fb _video.mp4" 
					type="video/mp4">
				</video>
			</div>
		</div>
	</div>
	</div>
	</div>
	<!-- End About us -->
	<br>
	<br>
	<br>

	<!-- Vi Tilbyder-->
	<div id="story" class="story-box main-timeline-box">
		<div class="Tilbud">
			<img class="parallax" src="<?php the_field ('cover_img3'); ?>" alt="">
		</div>
		<div class="container2">



			<div class="table">
				<img height="70px" width="auto" src="<?php the_field ('offers_icon1'); ?>" alt="">
				<h4><b><?php the_field ('offers_title1'); ?></b></h4>
				<p><?php the_field ('offers_text1'); ?></p>
			</div>
			<div class="table">
				<img height="70px" width="auto" src="<?php the_field ('offers_icon2'); ?>" alt="">
				<h4><b><?php the_field ('offers_title2'); ?></b></h4>
				<p><?php the_field ('offers_text2'); ?></p>
			</div>
			<div class="table">
				<img height="70px" width="auto" src="<?php the_field ('offers_icon3'); ?>" alt="">
				<h4><b><?php the_field ('offers_title3'); ?></b></h4>
				<p><?php the_field ('offers_text3'); ?></p>
			</div>
			<div class="table">
				<img height="70px" width="auto" src="<?php the_field ('offers_icon4'); ?>" alt="">
				<h4><b><?php the_field ('offers_title4'); ?></b></h4>
				<p><?php the_field ('offers_text4'); ?></p>
			</div>
			<div class="table">
				<img height="70px" width="auto" src="<?php the_field ('offers_icon5'); ?>" alt="">
				<h4><b><?php the_field ('offers_title5'); ?></b></h4>
				<p><?php the_field ('offers_text5'); ?></p>
			</div>
			<div class="table">
				<img height="70px" width="auto" src="<?php the_field ('offers_icon6'); ?>" alt="">
				<h4><b><?php the_field ('offers_title6'); ?></b></h4>
				<p><?php the_field ('offers_text6'); ?></p>
			</div>
		</div>
		<!-- End Story -->

		<!-- Start Galleri -->
		<div id="gallery" class="gallery-box">

			<div class="container4">
					<div class="column">
							<img src="<?php the_field ('gallery_img1'); ?>" >
						</div>
						<div class="column">
							<img src="<?php the_field ('gallery_img2'); ?>">
						</div>
						<div class="column">
							<img src="<?php the_field ('gallery_img3'); ?>" >
						</div>
						<div class="column">
							<img src="<?php the_field ('gallery_img4'); ?>" >
						</div>
						<div class="column">
							<img src="<?php the_field ('gallery_img5'); ?>" >
						</div>
						<div class="column">
							<img src="<?php the_field ('gallery_img6'); ?>" >
						</div>
						
			</div>
		</div>
		<!-- End Gallery -->



		<!-- Start Contact -->
		<div id="contact" class="contact-box">
			<div class="container1">
				<div class="img1-flex">
					<img height="70px" width="auto" src="<?php the_field ('contact_icon1'); ?>" alt="">
					<br>
					<h4> <b><?php the_field ('contact_title1'); ?>
					</b></h4>
					<p><?php the_field ('contact_text1'); ?></p>
				</div>
				<div class="img2-flex">
					<img height="70px" width="auto" src="<?php the_field ('contact_icon2'); ?>" alt="">
					<br>
					<h4><b><?php the_field ('contact_title2'); ?>
						</b></h4>
					<p><?php the_field ('contact_text2'); ?></p></p>
				</div>
				<div class="img3-flex">
					<img height="70px" width="auto" src="<?php the_field ('contact_icon3'); ?>" alt="">
					<br>
					<h4> <b><?php the_field ('contact_title3'); ?>
						</b></h4>
					<p><?php the_field ('contact_text3'); ?></p></p>
				</div>
			</div>
		</div>
	</div>

	</div>
	<!-- End Contact -->

	<?php get_footer(); ?>
</body>

</html>
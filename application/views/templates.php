<div class="fh5co-loader"></div>

<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.html">Wedding<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<!-- <ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">Story</a></li>
						<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="gallery.html">Gallery</a>
							
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul> -->
				</div>
			</div>

		</div>
	</nav>
	<?php foreach ($banner as $ba) : ?>
		<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(asset/images/rinha.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1><?php echo $ba->nama_pengantin1 ?> &amp; <?php echo $ba->nama_pengantin2 ?></h1>
								<h2><?php echo $ba->titel ?></h2>
								<h1><?php echo $ba->day ?>-<?php echo $ba->month ?>-<?php echo $ba->year ?></h1>
								<!-- <div class="simply-countdown simply-countdown-one"></div> -->
								<?php $days    = (int)((mktime(0, 0, 0, $ba->month, $ba->day, $ba->year) - time()) / 86400);
								echo "<h5>Masih ada <b>$days</b> hari lagi</h5>";
								?>
								<p><a href="" class="btn btn-default btn-sm">Save the date</a></p>
							<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="fh5co-couple">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2>Assalamu alaikum Wr. Wb!</h2>
						<h3>april 04, 2021</h3>
						<p>Waktu Shlat</p>
					</div>
				</div>
				<div class="couple-wrap animate-box">
					<div class="couple-half">
						<div class="groom">
							<img src="asset/images/groom.jpg" alt="Pengantin Pria" class="img-responsive">
						</div>
						<div class="desc-groom">
							<h3>muh ihwan Rahman</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						</div>
					</div>
					<p class="heart text-center"><i class="icon-heart2"></i></p>
					<div class="couple-half">
						<div class="bride">
							<img src="asset/images/bride.jpg" alt="pengantin Wanita" class="img-responsive">
						</div>
						<div class="desc-bride">
							<h3>sukmawati</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>Acara Khusus Kami</span>
						<h2>Acara Pernikahan</h2>
					</div>
				</div>
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-10 col-md-offset-1">
								<div class="col-md-6 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>Wanita</h3>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span>11:00 WITA</span>
											<span>05:00 WITA</span>
										</div>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span>Sabtu 03</span>
											<span>April, 2021</span>
										</div>
										<p>Jl. H. Muh Tahir Dani. Lawampang, Kel. Takkalasi. Kec. Balusu, Kab. Barru</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>Pria</h3>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span>19:00 WITA</span>
											<span>12:00 WITA</span>
										</div>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span>Ahad 04</span>
											<span>April, 2021</span>
										</div>
										<p>Gedung Baruga Bhakti Adhiguna Jl. A. Pettarani-Makassar (Samping. Kantor Pertanahan BPN)</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple-story">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>Kami Saling Mencintai</span>
						<h2>Cerita Kita</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0">
						<ul class="timeline animate-box">
							<li class="animate-box">
								<div class="timeline-badge" style="background-image:url(asset/images/couple-1.jpg);"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3 class="timeline-title">First We Meet</h3>
										<span class="date">December 25, 2015</span>
									</div>
									<div class="timeline-body">
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted animate-box">
								<div class="timeline-badge" style="background-image:url(asset/images/couple-2.jpg);"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3 class="timeline-title">First Date</h3>
										<span class="date">December 28, 2015</span>
									</div>
									<div class="timeline-body">
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</li>
							<li class="animate-box">
								<div class="timeline-badge" style="background-image:url(asset/images/couple-3.jpg);"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3 class="timeline-title">In A Relationship</h3>
										<span class="date">april 3, 2021</span>
									</div>
									<div class="timeline-body">
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-gallery" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>Our Memories</span>
						<h2>Wedding Gallery</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-gallery-list">

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(asset/images/gallery-1.jpg); ">
								<a href="asset/images/gallery-1.jpg">
									<div class="case-studies-summary">
										<span>14 Photos</span>
										<h2>Two Glas of Juice</h2>
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(asset/images/gallery-2.jpg); ">
								<a href="#" class="color-2">
									<div class="case-studies-summary">
										<span>30 Photos</span>
										<h2>Timer starts now!</h2>
									</div>
								</a>
							</li>


							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(asset/images/gallery-3.jpg); ">
								<a href="asset/images/gallery-1.jpg" class="color-3">
									<div class="case-studies-summary">
										<span>90 Photos</span>
										<h2>Beautiful sunset</h2>
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(asset/images/gallery-4.jpg); ">
								<a href="asset/images/gallery-1.jpg" class="color-4">
									<div class="case-studies-summary">
										<span>12 Photos</span>
										<h2>Company's Conference Room</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(asset/images/gallery-5.jpg); ">
								<a href="asset/images/gallery-1.jpg" class="color-3">
									<div class="case-studies-summary">
										<span>50 Photos</span>
										<h2>Useful baskets</h2>
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(asset/images/gallery-6.jpg); ">
								<a href="asset/images/gallery-1.jpg" class="color-4">
									<div class="case-studies-summary">
										<span>45 Photos</span>
										<h2>Skater man in the road</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(asset/images/gallery-7.jpg); ">
								<a href="asset/images/gallery-1.jpg" class="color-4">
									<div class="case-studies-summary">
										<span>35 Photos</span>
										<h2>Two Glas of Juice</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(asset/images/gallery-8.jpg); ">
								<a href="asset/images/gallery-1.jpg" class="color-5">
									<div class="case-studies-summary">
										<span>90 Photos</span>
										<h2>Timer starts now!</h2>
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(asset/images/gallery-9.jpg); ">
								<a href="asset/images/gallery-1.jpg" class="color-6">
									<div class="case-studies-summary">
										<span>56 Photos</span>
										<h2>Beautiful sunset</h2>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(asset/images/img_bg_5.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-users"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Estimated Guest</span>

								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-user"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">We Catter</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-calendar"></i>
									</span>
									<span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Events Done</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-clock"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Hours Spent</span>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-testimonial">
			<div class="container">
				<div class="row">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<span>Best Wishes</span>
							<h2>Friends Wishes</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="wrap-testimony">
								<div class="owl-carousel-fullwidth">
									<div class="item">
										<div class="testimony-slide active text-center">
											<figure>
												<img src="images/couple-1.jpg" alt="user">
											</figure>
											<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
											<blockquote>
												<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics"</p>
											</blockquote>
										</div>
									</div>
									<div class="item">
										<div class="testimony-slide active text-center">
											<figure>
												<img src="asset/images/couple-2.jpg" alt="user">
											</figure>
											<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
											<blockquote>
												<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
											</blockquote>
										</div>
									</div>
									<div class="item">
										<div class="testimony-slide active text-center">
											<figure>
												<img src="asset/images/couple-3.jpg" alt="user">
											</figure>
											<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
											<blockquote>
												<p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-services" class="fh5co-section-gray">
			<div class="container">

				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>We Offer Services</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
							<span class="icon">
								<i class="icon-calendar"></i>
							</span>
							<div class="feature-copy">
								<h3>We Organized Events</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							</div>
						</div>

						<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
							<span class="icon">
								<i class="icon-image"></i>
							</span>
							<div class="feature-copy">
								<h3>Photoshoot</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							</div>
						</div>

						<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
							<span class="icon">
								<i class="icon-video"></i>
							</span>
							<div class="feature-copy">
								<h3>Video Editing</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							</div>
						</div>

					</div>

					<div class="col-md-6 animate-box">
						<div class="fh5co-video fh5co-bg" style="background-image: url(images/img_bg_3.jpg); ">
							<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
							<div class="overlay"></div>
						</div>
					</div>
				</div>


			</div>
		</div>


		<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Are You Attending?</h2>
						<p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="name" class="form-control" id="name" placeholder="Name">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<button type="submit" class="btn btn-default btn-block">I am Attending</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
							<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
						<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
</div>
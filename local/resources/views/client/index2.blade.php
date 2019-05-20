@extends('client.masterpage2')
@section('title', 'Client Page')
@section('main')
<!-- banner bottom -->
<div class="section-2">
	<div class="container-fluid">
		<div class="row slide">
			<div class="col-xl-4 triple-sec p-5">
				<h5 class="text-wh font-weight-bold">We have something to be proud of</h5>
				<ul class="list-unstyled mt-4">
					<li class="style-bottom-w3">
						<h4 class="text-wh font-weight-bold">6250</h4>
						<p class="text-li">Happy Patients</p>
					</li>
					<li class="style-bottom-w3 mt-3">
						<h4 class="text-wh font-weight-bold">48</h4>
						<p class="text-li">Years of experience</p>
					</li>
				</ul>
			</div>
			<div class="col-xl-4 triple-sec p-5">
				<h5 class="text-wh font-weight-bold">Opening Hours</h5>
				<ul class="list-unstyled text-wh mt-4">
					<li class="clearfix py-3">
						<span class="float-left"> Monday - Friday </span>
						<div class="value float-right"> 9.00 - 20.00 </div>
					</li>
					<li class="clearfix border-top border-bottom py-3">
						<span class="float-left"> Saturday </span>
						<div class="value float-right"> 10.00 - 16.00 </div>
					</li>
					<li class="clearfix py-3">
						<span class="float-left"> Sunday </span>
						<div class="value float-right"> 9.30 - 18.00 </div>
					</li>
				</ul>
			</div>
			<div class="col-xl-4 triple-sec p-5 text-center">
				<p class="text-uppercase text-li mt-xl-5 mt-4 pt-xl-2">Lorem ut</p>
				<h4 class="down-list-w3 text-wh font-weight-bold mt-1 mb-4">Download Now</h4>
				<a href="#" class="some-small-btn bg-wh btn text-bl font-weight-bold mb-xl-0 mb-4">Check It</a>
			</div>
		</div>
	</div>
</div>
<!-- //banner bottom -->

<!-- why -->
<section class="blog_w3ls py-5" id="why">
	<div class="container py-xl-5 py-lg-3">
		<div class="title-section mb-md-5 mb-4">
			<h6 class="w3ls-title-sub">About Us</h6>
			<h3 class="w3ls-title text-uppercase text-bl font-weight-bold">Why Choose Us</h3>
		</div>
		<div class="row">
			<!-- blog grid -->
			<div class="col-lg-4 col-md-6">
				<div class="card border-0 med-blog">
					<div class="card-header p-0">
						<img class="card-img-bottom" src="images/blog1.jpg" alt="image">
					</div>
					<div class="card-body border border-top-0">
						<div class="mb-3">
							<h5 class="blog-title card-title m-0">Lorem ipsum dolor</h5>
							<div class="blog_w3icon">
								<span>
									Magna Kictum - loremipsum</span>
							</div>
						</div>
						<p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
						<a href="single.html" class="btn blog-btn mt-4">Read more</a>
					</div>
				</div>
			</div>
			<!-- //blog grid -->
			<!-- blog grid -->
			<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
				<div class="card border-0 med-blog">
					<div class="card-header p-0">
						<img class="card-img-bottom" src="images/blog3.jpg" alt="image">
					</div>
					<div class="card-body border border-top-0">
						<div class="mb-3">
							<h5 class="blog-title card-title m-0">Sed do eiusmod</h5>
							<div class="blog_w3icon">
								<span>
									Magna Kictum - loremipsum</span>
							</div>
						</div>
						<p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
						<a href="single.html" class="btn blog-btn mt-4">Read more</a>
					</div>
				</div>
			</div>
			<!-- //blog grid -->
			<!-- blog grid -->
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
				<div class="card border-0 med-blog">
					<div class="card-header p-0">
						<img class="card-img-bottom" src="images/blog2.jpg" alt="image">
					</div>
					<div class="card-body border border-top-0">
						<div class="mb-3">
							<h5 class="blog-title card-title m-0">Ut enim minim</h5>
							<div class="blog_w3icon">
								<span>
									Magna Kictum - loremipsum</span>
							</div>
						</div>
						<p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
						<a href="single.html" class="btn blog-btn mt-4">Read more</a>
					</div>
				</div>
			</div>
			<!-- //blog grid -->
		</div>
	</div>
</section>
<!-- //why -->

<!-- doctor form -->
<section class="loan_w3ls py-5" id="form">
	<div class="container py-xl-5 py-lg-3">
		<div class="row">
			<div class="col-lg-3">
				<div class="title-section mb-md-5 mb-4">
					<h6 class="w3ls-title-sub text-li">Lorem uts</h6>
					<h3 class="w3ls-title text-uppercase text-wh font-weight-bold">Visit to the Doctor</h3>
				</div>
			</div>
			<div class="col-lg-9">
				<form action="#" method="post">
					<div class="row loan-form-w3ls">
						<div class="col-lg-4">
							<div class="form-group">
								<input class="form-control" type="text" name="Name" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input class="form-control" type="email" name="email" placeholder="Email" required="">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<input class="form-control" type="text" name="number" placeholder="Phone Number" required="">
							</div>
							<div class="form-group date-plu">
								<input type="date" name="date" id="dateofbirth"  required="">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<select required="" class="form-control">
									<option value="">Hourly Preferences</option>
									<option value="1">Morning</option>
									<option value="2">After Noon</option>
									<option value="3">Evening</option>
								</select>
							</div>
							<button type="submit" class="btn btn_apt">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- //doctor form -->

<!-- services -->
<section class="services py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="row px-lg-5">
			<div class="col-lg-6">
				<div class="d-flex services-box">
					<span class="fa fa-ambulance" aria-hidden="true"></span>
					<!-- .Icon ends here -->
					<div class="service-content ml-4">
						<h3>Emergency</h3>
						<p class="my-3">
							Quisque sagittis lacus eu lorem sodalesd inagittis lacg enean adipiscing.
						</p>
					</div>
					<!-- .Service-content ends here -->
				</div>
				<div class="d-flex services-box mt-5">
					<span class="fa fa-user-md" aria-hidden="true"></span>
					<!-- .Icon ends here -->
					<div class="service-content ml-4">
						<h3>Qualified Doctors</h3>
						<p class="my-3">
							Quisque sagittis lacus eu lorem sodalesd inagittis lacg enean adipiscing.
						</p>
					</div>
					<!-- .Service-content ends here -->
				</div>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<div class="d-flex services-box">
					<span class="fa fa-hospital-o" aria-hidden="true"></span>
					<!-- .Icon ends here -->
					<div class="service-content ml-4">
						<h3>Operation Theater</h3>
						<p class="my-3">
							Quisque sagittis lacus eu lorem sodalesd inagittis lacg enean adipiscing.
						</p>
					</div>
					<!-- .Service-content ends here -->
				</div>
				<div class="d-flex services-box mt-5">
					<span class="fa fa-medkit" aria-hidden="true"></span>
					<!-- .Icon ends here -->
					<div class="service-content ml-4">
						<h3>Free Medicine</h3>
						<p class="my-3">
							Quisque sagittis lacus eu lorem sodalesd inagittis lacg enean adipiscing.
						</p>
					</div>
					<!-- .Service-content ends here -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->

<!-- team -->
<div class="team pb-5" id="team">
	<div class="container pb-xl-5 pb-lg-3">
		<div class="row mt-30">
			<div class="col-lg-4 mt-lg-4 mb-lg-0 mb-4">
				<h6 class="w3ls-title-sub mb-2">Our Doctors</h6>
				<h3 class="w3ls-title text-bl font-weight-bold">Meet Our Best Doctors. <br>Our team of Doctors always ready to
					help
					you.</h3>
				<p class="mt-4">Cras ultricies ligula sed magna dictum porta auris blandita.Ut enim ad nostrud laboris nisi ut
					aliquip.</p>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="box16">
					<img src="images/team1.jpg" alt="" class="img-fluid">
					<div class="box-content">
						<h3 class="title">Sal Monella</h3>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="box16">
					<img src="images/team2.jpg" alt="" class="img-fluid">
					<div class="box-content">
						<h3 class="title">Matt Innae</h3>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-sm-5">
			<div class="offset-lg-4 col-lg-4 col-sm-6">
				<div class="box16">
					<img src="images/team3.jpg" alt="" class="img-fluid">
					<div class="box-content">
						<h3 class="title">Barb Dwyer</h3>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="box16">
					<img src="images/team4.jpg" alt="" class="img-fluid">
					<div class="box-content">
						<h3 class="title">Otto Matic</h3>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //team -->

<!-- services -->
<section class="services-w3ls py-5" id="services">
	<div class="container py-xl-5 py-lg-3">
		<div class="row">
			<div class="col-lg-6">
				<div class="d-flex services-box">
					<span class="fa fa-flask" aria-hidden="true"></span>
					<!-- .Icon ends here -->
					<div class="service-content ml-4">
						<h3 class="text-wh font-weight-bold">Children Center</h3>
						<p class="my-3 text-li">
							Quisque sagittis lacus eu lorem sodalesd inagittis lacg enean adipiscing.
						</p>
						<a href="about.html" class="butn-w3pvt font-weight-bold btn text-wh text-uppercase">Read More</a>
					</div>
					<!-- .Service-content ends here -->
				</div>
				<div class="d-flex services-box mt-5">
					<span class="fa fa-child" aria-hidden="true"></span>
					<!-- .Icon ends here -->
					<div class="service-content ml-4">
						<h3 class="text-wh font-weight-bold">Laboratory</h3>
						<p class="my-3 text-li">
							Quisque sagittis lacus eu lorem sodalesd inagittis lacg enean adipiscing.
						</p>
						<a href="about.html" class="butn-w3pvt font-weight-bold btn text-wh text-uppercase">Read More</a>
					</div>
					<!-- .Service-content ends here -->
				</div>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<div class="d-flex services-box">
					<span class="fa fa-comments" aria-hidden="true"></span>
					<!-- .Icon ends here -->
					<div class="service-content ml-4">
						<h3 class="text-wh font-weight-bold">Care Advice</h3>
						<p class="my-3 text-li">
							Quisque sagittis lacus eu lorem sodalesd inagittis lacg enean adipiscing.
						</p>
						<a href="about.html" class="butn-w3pvt font-weight-bold btn text-wh text-uppercase">Read More</a>
					</div>
					<!-- .Service-content ends here -->
				</div>
				<div class="d-flex services-box mt-5">
					<span class="fa fa-heartbeat" aria-hidden="true"></span>
					<!-- .Icon ends here -->
					<div class="service-content ml-4">
						<h3 class="text-wh font-weight-bold">Heart Surgery</h3>
						<p class="my-3 text-li">
							Quisque sagittis lacus eu lorem sodalesd inagittis lacg enean adipiscing.
						</p>
						<a href="about.html" class="butn-w3pvt font-weight-bold btn text-wh text-uppercase">Read More</a>
					</div>
					<!-- .Service-content ends here -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->

<!-- blog -->
<section class="blog_w3ls py-5" id="blog">
	<div class="container py-xl-5 py-lg-3">
		<div class="title-section mb-md-5 mb-4">
			<h6 class="w3ls-title-sub">Latest Posts</h6>
			<h3 class="w3ls-title text-uppercase text-bl font-weight-bold">Our Blog</h3>
		</div>
		<div class="row">
			<!-- blog grid -->
			<div class="col-lg-4 col-md-6">
				<div class="card border-0 med-blog">
					<div class="card-header p-0">
						<a href="single.html">
							<img class="card-img-bottom" src="images/g1.jpg" alt="image">
						</a>
					</div>
					<div class="card-body border border-top-0 pb-5">
						<div class="mb-3">
							<h5 class="blog-title card-title font-weight-bold m-0">
								<a href="single.html">Dictum porta auris</a>
							</h5>
							<div class="blog_w3icon">
								<span>
									Jan 12, 2019 - loremipsum</span>
							</div>
						</div>
						<p class="mb-4">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
						<a href="single.html" class="blog-btn btn">Read more</a>
					</div>
				</div>
			</div>
			<!-- //blog grid -->
			<!-- blog grid -->
			<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
				<div class="card border-0 med-blog">
					<div class="card-body border border-bottom-0 pb-5">
						<div class="mb-3">
							<h5 class="blog-title card-title font-weight-bold m-0">
								<a href="single.html">Sed do eiusmod</a>
							</h5>
							<div class="blog_w3icon">
								<span>
									Jan 14, 2019 - loremipsum</span>
							</div>
						</div>
						<p class="mb-4">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
						<a href="single.html" class="blog-btn btn">Read more</a>
					</div>
					<div class="card-header p-0">
						<a href="single.html">
							<img class="card-img-bottom" src="images/g3.jpg" alt="image">
						</a>
					</div>
				</div>
			</div>
			<!-- //blog grid -->
			<!-- blog grid -->
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
				<div class="card border-0 med-blog">
					<div class="card-header p-0">
						<a href="single.html">
							<img class="card-img-bottom" src="images/g2.jpg" alt="image">
						</a>
					</div>
					<div class="card-body border border-top-0 pb-5">
						<div class="mb-3">
							<h5 class="blog-title card-title font-weight-bold m-0">
								<a href="single.html">Tempor inci didunt</a>
							</h5>
							<div class="blog_w3icon">
								<span>
									Jan 16, 2019 - loremipsum</span>
							</div>
						</div>
						<p class="mb-4">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
						<a href="single.html" class="blog-btn btn">Read more</a>
					</div>
				</div>
			</div>
			<!-- //blog grid -->
		</div>
		<div class="row mt-5">
			<!-- blog grid -->
			<div class="col-lg-4 col-md-6">
				<div class="card border-0 med-blog">
					<div class="card-header p-0">
						<a href="single.html">
							<img class="card-img-bottom" src="images/blog1.jpg" alt="image">
						</a>
					</div>
					<div class="card-body border border-top-0 pb-5">
						<div class="mb-3">
							<h5 class="blog-title card-title font-weight-bold m-0">
								<a href="single.html">Labore et dolore</a>
							</h5>
							<div class="blog_w3icon">
								<span>
									Jan 18, 2019 - loremipsum</span>
							</div>
						</div>
						<p class="mb-4">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
						<a href="single.html" class="blog-btn btn">Read more</a>
					</div>
				</div>
			</div>
			<!-- //blog grid -->
			<!-- blog grid -->
			<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
				<div class="card border-0 med-blog">
					<div class="card-body border border-bottom-0 pb-5">
						<div class="mb-3">
							<h5 class="blog-title card-title font-weight-bold m-0">
								<a href="single.html">Ut enim ad minim</a>
							</h5>
							<div class="blog_w3icon">
								<span>
									Jan 20, 2019 - loremipsum</span>
							</div>
						</div>
						<p class="mb-4">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
						<a href="single.html" class="blog-btn btn">Read more</a>
					</div>
					<div class="card-header p-0">
						<a href="single.html">
							<img class="card-img-bottom" src="images/blog3.jpg" alt="image">
						</a>
					</div>
				</div>
			</div>
			<!-- //blog grid -->
			<!-- blog grid -->
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
				<div class="card border-0 med-blog">
					<div class="card-header p-0">
						<a href="single.html">
							<img class="card-img-bottom" src="images/g4.jpg" alt="image">
						</a>
					</div>
					<div class="card-body border border-top-0 pb-5">
						<div class="mb-3">
							<h5 class="blog-title card-title font-weight-bold m-0">
								<a href="single.html">Dictum porta auris</a>
							</h5>
							<div class="blog_w3icon">
								<span>
									Jan 24, 2019 - loremipsum</span>
							</div>
						</div>
						<p class="mb-4">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
						<a href="single.html" class="blog-btn btn">Read more</a>
					</div>
				</div>
			</div>
			<!-- //blog grid -->
		</div>
	</div>
</section>
<!-- //blog -->
@stop

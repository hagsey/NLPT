@extends('layouts/layout')

@section('content')
<div class ="home_page">
	@include('partials/header')
	<div class="first-section">
		<div class="big-photo">
		</div>
	</div>
	<div class="second-section">
		<div class="container-fluid">
			<div class="row mission-statement">
				<div class="col-md-6 col-md-offset-3">
					<h1>Our Purpose</h1>
					<blockquote>
						To inspire and empower people, teams, and organizations with the tools and confidence necessary to pursue their next level of performance, health, and wellness.
					</blockquote>
				</div>
			</div>
			<div class="row services">
				<div class="col-md-4 service-block">
					<h3><a href="#">Training Programs</a></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						<p>
						</div>
						<div class="col-md-4 service-block">
							<h3><a href="#">Success Stories</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								<p>
								</div>
								<div class="col-md-4 service-block">
									<h3><a href="#">Rehab</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										<p>
										</div>
									</div>
								</div>
							</div>
							<div class="third-section">
								<div class=container-fluid>
									<div class="row">
										<div class="col-md-6 col-md-offset-3 title-box">
											<h1>What's New?</h1>
										</div>
									</div>
									<div class="row new-stuff">
										<div class="col-md-5 blog">
											<h2 class="blogpost-title">Latest Blog Posts</h2>
											<div class="jumbotron">
												<h3><a href="/blogs">Getting the heart of the kettlebell swing.</a></h3>
												<i class="fa fa-user" aria-hidden="true"><small>Dylan Campion</small></i>
												<p>We love the kettlebell at NLPT (from now on, referred to as a KB…less typing). What makes the KB great is that it works so well in so many different situations. From performing a rehabilitative exercise to a KB-only aerobic circuit, the KB is diverse<a href="/blogs">....</a>
												</p>
											</div>
											<div class="jumbotron">
												<h3><a href="/blogs">The red light district.</a></h3>
												<i class="fa fa-user" aria-hidden="true"><small>Zach Shomphe</small></i>
												<p>If you’re a hockey player I’m sure you’ve heard the phrase that the game is 80% mental more than once growing up. This phrase is most accurate when speaking about the masked men between the pipes<a href="/blogs">....</a>
												</p>
											</div>
										</div>
										<div class="col-md-6 col-md-offset-1">
											<h2>Upcoming Events</h2>
											<div class="events">
												<div>
													<h3><i class="fa fa-arrow-right fa-3" aria-hidden="true"></i>Event #1</h3>
													<p>This is the event where stuff happens. This is most likely a small blog post.</p>
												</div>
												<div>
													<h3><i class="fa fa-arrow-right fa-3" aria-hidden="true"></i>Event #1</h3>
													<p>This is the event where stuff happens. This is most likely a small blog post.</p>
													<div>
														<h3><i class="fa fa-arrow-right fa-3" aria-hidden="true"></i>Event #1</h3>
														<p>This is the event where stuff happens. This is most likely a small blog post.</p>
													</div>						
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

							@include('partials/footer')
						</div>
						@endsection
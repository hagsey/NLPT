@extends('layouts/layout')

@section('content')
	<div class ="sections">
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
					<h1>What's New?</h1>
					<div class="col-md-4 col-md-offset-1 recent-blog">
						<h2>Newest Blog entry</h2>
						<div class="blog-post">
							<h3>An Easy Way to Improve Your Grip (And Overall Strength)</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt ollit anim id est laborum.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-1 video">
						<h2>Recent Video</h2>
						<iframe allowfullscreen="" src="https://www.youtube.com/embed/QO7obYANRCM?rel=0" width="420" frameborder="0" height="315"></iframe>
					</div>
				</div>
			</div>
		</div>
		@include('partials/footer')
	</div>
@endsection
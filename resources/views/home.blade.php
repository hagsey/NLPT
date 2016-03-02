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
					<div class="col-md-6 col-md-offset-3 title-box">
						<h1>What's New?</h1>
					</div>
				</div>
			</div>
		</div>
		@include('partials/footer')
	</div>
@endsection
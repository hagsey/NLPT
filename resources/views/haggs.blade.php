@extends('layouts/layout')

@section('content')
<div class ="coaches_page">
	@include('partials/header')
	<div class="first-section">
		<div class="container">
			<div class="row first-content">
				<div class="col-md-2">
					@include('partials/about_sidebar')
				</div>
				<div class="col-md-10 coaches-text">
					<h1>Eric Hagemann, MSc, CSCS</h1>
					<h3>Director of Training</h3>
					<h5><a href="mailto:andrewhopf@nlptinc.com?Subject=Inquiry" target="_top">andrewhopf@nlptinc.com</a></h5>
				</div>
			</div>
			<div class="row bio">
				<div class="col-md-3">
					<img class="coaches-picture" src="/images/staff/Eric.jpg">
				</div>
				<div class="col-md-9">
					<p>Eric has obtained a degree in Kinesiology from the University of Waterloo (2007) and a Master’s of Science degree in Rehabilitation Science from the University of Toronto (2009). In 2010, Eric joined Next Level Performance Training as Head Strength and Conditioning Coach, where he is currently in charge of athlete programming and training systems research and development. During that time, Eric has worked with and designed training programs for many of Waterloo region’s elite athletes from a variety of sports including hockey, baseball, speed skating, Alpine skiing, rugby, and snowboarding.</p>
					<p>Eric’s resume also includes the following:
						<ul>
							<li>Poliquin International Certification Program, Level 1 – 2011
							</li>
							<li>Certified Strength and Conditioning Specialist, NSCA – 2010
							</li>
							<li>Functional Movement Screen (FMS) Certified, Level 1 – 2010
							</li>
							<li>Strength and Conditioning Coach – D1 Sportstraining, Nashville, TN – 2010
							</li>
							<li>USA Hockey Level 3 Certified Coach – 2009
							</li>
							<li>Master’s of Science, Rehabilitation Science – University of Toronto – 2009
							</li>
							<li>Bachelor’s of Science, Kinesiology – University of Waterloo, 2007
							</li>							
						</ul>

					</p>
				</div>
			
			</div>
		</div>
	</div>
@include('partials/footer')
</div>
@endsection
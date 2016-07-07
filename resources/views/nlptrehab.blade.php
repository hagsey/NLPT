@extends('layouts/layout')

@section('content')
	<div class ="nlptrehab-page">
		@include('partials/header')
		<div class="first-section">
			<div class="container">
				<div class="row first-content">
					<div class="col-md-2">
						@include('partials/program_sidebar')
					</div>
					<div class="col-md-10 nlptrehab-text">
						<h1>NLPTrehab</h1>
						<div class="nlptrehab-blurb">
							<p>NLPT has two highly experienced clinicians on staff to manage the rehabilitation process from injuries when they occur. Unlike common training centres, our therapists can easily work and communicate with NLPT’s strength and conditioning staff to ensure the athlete’s training and rehab plans fit together as best as possible.
							</p>
						</div>
						<div class="col-md-5 started">
							<blockquote>"Do i need to be in an NLPT program?"</blockquote>
							<p>The NLPTrehab staff is also available to non-NLPT clients and members of the general public.</p>
						</div>
						<div class="col-md-7 ">
							<img class="nlptrehab-picture" src="http://nlpt.app/images/youth.jpg">
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		<div class="second-section">
			<div class="container">
				<div class="row">
					<div class="title-section">
						<h1 class="title">Massage Therapy</h1>
						<p>Please call: (519) 620-9898 or email nlpt.massagetherapy@gmail.com to book your appointment.</p>
					</div>
				</div>

				<div class=" row massuese">
					<div class="col-md-3">
						<img class="nlptrehab-picture" src="http://nlpt.app/images/hopf.jpg">
					</div>
					<div class="col-md-9 bio">
						<h2>Michelle Miguel</h2>
						<h4>BSc.</h4>
						<h4>RMT</h4>
						<p>Michelle graduated from the University of Waterloo in 2008 with an Honors B.Sc. in Kinesiology. Michelle then attended the Canadian College of Massage and Hydrotherapy where she completed the Massage Therapy program on the Deans honors list. While at the CCMH campus she participated in many sport related outreaches such as the Run for the Cure as well as providing sport massage therapy for varsity athletes at the University of Waterloo. One of Michelle’s goals is to continue in the athletic massage therapy field in the hopes of taking part in the Olympics as part of the Massage Therapy Team.</p>
					</div>
				</div>
				<div class="row massage-info">
					<div class=col-md-5>
						<h2>Availability</h2>
						
						<p>Michelle will be available during the following hours:
							<ul>
								<li>Monday: 12-7pm</li>
								<li>Tuesday: 645am-3pm</li>
								<li>Wednesday: 1-8pm</li>
								<li>Thursday: 1030am-5pm</li>
							</ul>
						</p>
						

					</div>
					<div class="col-md-5 col-md-offset-2">
						<h2>Rates</h2>
						
						<p>All rates include HST:
							<ul>
								<li>30 minute session- $50</li>
								<li>60 minute session- $80</li>
								<li>90 minute session- $115</li>
							</ul>
						</p>
					</div>
				</div>
			
			</div>
		</div>
		<div class="third-section">
			<div class="container">
				<div class="row">
					<div class="title-section">
						<h1 class="title">Chiropractic Care</h1>
						<p>If you would like to book an appointment, you can contact his office at (519) 620-7325 or visit his website at www.peakperformancehc.com for more information.</p>
					</div>
				</div>

				<div class=" row doctor">
					<div class="col-md-3">
						<img class="nlptrehab-picture" src="http://nlpt.app/images/hopf.jpg">
					</div>
					<div class="col-md-9">
						<h2>Dr. Alex Pessoa</h2>
						<h4>DC</h4>
						<p>We are very privileged to have Dr. Pessoa join the NLPT team. He has a wealth of knowledge and experience treating both athletes as well as the general population and we are excited to be able to provide the NLPT family with a greater level of care.</p>

						<p>Dr. Pessoa opened Peak Performance Health Centre (Cambridge) in 2004 as a single chiropractor, bringing with him his expertise working with the Toronto Maple Leafs (NHL) and the Esporte Clube de Bahia (Professional Soccer Team in Brazil). His dream was to establish a top-notch health care facility in his hometown of Cambridge that would provide his patients with the best care to keep them at their peak performance. Dr. Alex furthered his chiropractic education with courses in Anatomy, becoming an Active Release Techniques provider (ART) and a Guasha provider. He is currently finishing his International Chiropractic Sports Sciences Diploma, teaches anatomy at CCMH, and is also the co-chair of the Cambridge and North Dumfries Doctor Recruitment Task Force.</p>
					</div>
				</div>
			
			</div>
		</div>
		
		@include('partials/footer')
	</div>
@endsection
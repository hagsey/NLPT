@extends('layouts/layout')

@section('content')
	<div class ="nlptfit-page">
		@include('partials/header')
		<div class="first-section">
			<div class="container">
				<div class="row first-content">
					<div class="col-md-2">
						@include('partials/program_sidebar')
					</div>
					<div class="col-md-6 nlptfit-text">
						<h1>NLPTfit</h1>
						<div class="nlptfit-blurb">
							<p>While we are mainly known for training athletes. Our approach to training “former athletes” remains the same: assess each individual, prescribe a safe and effective training program, deliver top-notch coaching, and get <b>RESULTS</b>.</p>
							<p>This approach to training is one of our core philosophies at NLPT, and it is the reason why we don’t offer bootcamps, classes, or prescribe general “workouts” for our clients. What’s right for one, might not be right–or safe–for another.</p>
						</div>
					</div>
				
					<div class="col-md-4">
						<img class="nlptfit-picture" src="/images/weights2.jpg">
					</div>
				</div>
				<div class="row">
					<button type="button" class="btn btn-primary action-btn" v-on:click="showAction=true">Call to Action!</button>
					<Actioncall :show.sync="showAction" title="NLPTfit"></Actioncall>
				</div>
			</div>
		</div>
		<div class="second-section">
			<div class="container">
				<div class="row">
					<div class="title-section">
						<h1 class="steps-title">So you’ve signed up…now what?</h1>
						<p>So how does our gym work? How does a program get written for you? What’s with the nutrition program? Let’s start at the beginning and then go through a typical training day at NLPT.</p>
					</div>
				</div>
				<div class="step1 step">
					<h2>Step #1: The Assessment</h2>
					<div class="row">
						<div class="col-md-6 ">
							<div class="purpose">
								<p>The purpose of the assessment is twofold:
									<ul>
										<li>To screen for health and injury risk (so we can program accordingly)</li>
										<li>To assess the information that matters to you so we can track whether or not your training is successful.</li>
									</ul>
								</p>
							</div>
							<div class="quote">
								<blockquote>"But coach, I have a bum shoulder!"</blockquote>
								<p>No problem. We can still train <b>AROUND</b> it and work <b>WITH</b> your medical professional so that your training program blends with and enhances your rehabilitation program.</p>
							</div>
						</div>
						<div class="col-md-5">
							<img class="nlptfit-picture" src="/images/weights2.jpg">
						</div>
					</div>
				</div>
				<div>
					<div class="row">
						<div class="step2 col-md-6 ">
							<h2>Step #2: Program Design</h2>
							<div class="design">
								<p>Taking this information, we then go about designing your plan. For as long as you are a client at NLPT, you will be written a 4-week training program. Each time you complete one, you automatically get another.
								</p>
							</div>
							<div class="considerations">
								<p>Programs are written with the following considerations:
									<ul>
										<li><b>How often can you train per week?</b> </li>
										<li><b>Are there any movement limitations you have?</b> </li>
										<li><b>What’s your training-age?</b> </li>
										<li><b>What do you like to do?</b></li>
									</ul>
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="step3">
								<h2>Step #3: Time to Train</h2>
								<div class="train">
									<p>All the prep work is done and it’s time to get started. No appointments necessary, just come visit us during one of our designated adult training times, grab your program and get to work. A qualified NLPT coach is always on site to coach you through the exercises and give you a kick in the butt (when needed)!
									</p>
								</div>
							</div>
							<div class="step4">
								<h2>Step #4: Re-assess and repeat</h2>
								<div class="re-assess">
									<p>Is this actually working? Are you feeling better? Are you losing weight or gaining muscle? The re-assessment is just as crucial as the initial assessment since it is our way of monitoring progress. Of course we want to give you a killer “workout”, but we also want to keep our eye on the bigger picture and make sure you are actually getting the results you signed up for. Re-assessments are done at our monthly Combine Day, which is held on the first Saturday of each month.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="third-section">
			<div class="container">
				<div class="row">
					<div class="title-section">
						<h1 class="title">Program Details</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 quote">
						<blockquote>"How many times a week can I train?"</blockquote>
						<p>A membership to NLPTfit allows you to train an <b>UNLIMITED</b> number of times per week (at adult training times).</p><p> All members must follow a program designed by an NLPT coach for at least one session per week. A coach can also design a 2 or 3-day a week program (in 4-week increments) if requested.</p><p> After completing your program, you are free to use the gym any time you wish</p>
					</div>
					<div class="col-md-4">
						<img class="nlptfit-picture" src="/images/weights2.jpg">
					</div>
					<div class="col-md-4 referral">
						<h3>Referral Program</h3>
						<p>If you tell a friend about our adult program and they sign up for 6 months or more, you will receive a $40 credit towards any NLPT product or service.  There is no limit to the amount of people you can tell, this is just our way of saying <b>THANK YOU</b> for spreading the word.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-4 membership">
						<h3>Membership</h3>
						<p>Feel free to try us out for a few workouts at no cost.</p><p> If you would like to continue with NLPTfit, our monthly rate is $129 +HST.</p>
					</div>
				</div>
			</div>
		</div>
		
		@include('partials/footer')
	</div>
@endsection
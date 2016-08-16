@extends('layouts/layout')

@section('content')
	<div class ="program_page">
		@include('partials/header')
		<div class="first-section">
			<div class="container">
				
			
				<div class="row">
					<div class="col-md-2">
						@include('partials/program_sidebar')
					</div>
					<div class="col-md-5 all-programs-text">
						<h1>Training Programs</h1>
						<div class="programs-blurb">
							<p>For athletes in the Cambridge, Kitchener and Waterloo area, there is no better environment to train in than NLPT. Our intimate, and hard-working atmosphere creates an environment that simply can not be replicated in your typical “gym”.</p>
							<p>You’ll also find that our coaches are some of the most  experienced and knowledgeable in the area. Aside from their athletic and academic accomplishments (see Staff page), they believe in setting a good example for all athletes by preaching hard-work, accountability, and consistency both at and away from the gym.</p>
						</div>
					</div>
					<div class="col-md-5">
						<img class="program-picture" src="/images/programs.jpg">
					</div>
				</div>
			</div>
		</div>
		
		@include('partials/footer')
	</div>
@endsection
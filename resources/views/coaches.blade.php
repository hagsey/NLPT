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
					<h1>Meet The Team</h1>
					<div class="row staff photos">
						<div class="col-md-3">
							<div class=coach>
								<h3>Coach Hopf</h3>
								<a href="/about/coaches/1"><img class="coaches-picture" src="/images/staff/Hopf.jpg"></a>
							</div>
							<div class=coach>
								<h3>Coach Foell</h3>
								<a href="/about/coaches/5"><img class="coaches-picture" src="/images/staff/Heather.jpg"></a>
							</div>
						</div>
						<div class="col-md-3">
							<h3>Coach Hagemann</h3>
							<a href="/about/coaches/2"><img class="coaches-picture" src="/images/staff/Eric.jpg"></a>
						</div>
						<div class="col-md-3">
							<h3>Coach Campion</h3>
							<a href="/about/coaches/3"><img class="coaches-picture" src="/images/staff/Dylan.jpg"></a>
						</div>
						<div class="col-md-3">
							<h3>Coach Shomphe</h3>
							<a href="/about/coaches/4"><img class="coaches-picture" src="/images/staff/Zach.jpg"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('partials/footer')
</div>
@endsection
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
					<h1>Meet the Team</h1>
					<div class="row staff photos">
						<div class="col-md-3">

							<a href="http://nlpt.app/about/coaches/1"><img class="coaches-picture" src="http://nlpt.app/images/hopf.jpg"></a>
							<a href="http://nlpt.app/about/coaches/1"><img class="coaches-picture" src="http://nlpt.app/images/hopf.jpg"></a>
						</div>
						<div class="col-md-3">
							<a href="http://nlpt.app/about/coaches/1"><img class="coaches-picture" src="http://nlpt.app/images/hopf.jpg"></a>
							<a href="http://nlpt.app/about/coaches/1"><img class="coaches-picture" src="http://nlpt.app/images/hopf.jpg"></a>
						</div>
						<div class="col-md-3">
							<a href="http://nlpt.app/about/coaches/1"><img class="coaches-picture" src="http://nlpt.app/images/hopf.jpg"></a>
						</div>
						<div class="col-md-3">
							<a href="http://nlpt.app/about/coaches/1"><img class="coaches-picture" src="http://nlpt.app/images/hopf.jpg"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('partials/footer')
</div>
@endsection
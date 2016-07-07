@extends('layouts/layout')

@section('content')
<div class ="contact_page">
	@include('partials/header')
	<div class="first-section">
		<div class="container">
			<div class="row contact-text">
				
				<div class="col-md-6 ">
					<h1>Contact Us</h1>
					<div class="contact-blurb">
						<p><i class="fa fa-home" aria-hidden="true"></i>460 Thompson Dr, Unit 4 Cambridge, ON N1T 2K8</p>
						<p><i class="fa fa-envelope" aria-hidden="true"></i>andrewhopf@nlptinc.com</p>
						<p><i class="fa fa-phone" aria-hidden="true"></i>Phone: 519-620-9898</p>
					</div>
					<h1>Connect With Us</h1>
					<div class="contact-blurb">
						<a href="#"><img class="social-icons" src="http://nlpt.app/images/facebook.png"></a>
						<a href="#"><img class="social-icons" src="http://nlpt.app/images/twitter.png"></a>
						<a href="#"><img class="social-icons" src="http://nlpt.app/images/instagram.png"></a>
					</div>
				</div>
				<div id="googleMap" class="col-md-6 map"></div>
				
			</div>
		</div>
	</div>
	
	@include('partials/footer')
</div>
@endsection

@section('script')
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
	function initialize() {
		var myLatLng = {lat: 43.411171, lng: -80.28648};
		var mapProp = {
			center:new google.maps.LatLng(myLatLng),
			zoom:15,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'NLPT'
		});

	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection

<!DOCTYPE html>
<html>
<body>
	<div >
		<h4>Inquiry</h4>
		<ul>
			<li><b>Name</b>: {{$data->name}}</li>
			<li><b>Program</b>: {{$data->title}}</li>
			<li><b>Message</b>: {{$data->message}}</li>
		</ul>
		<br>
		<h4>Contact Info</h4>
		<ul>
			<li><b>Phone</b>: {{$data->phone}}</li>
			<li><b>Email</b>: {{$data->email}}</li>
		</ul>
	</div>

</body>
</html>


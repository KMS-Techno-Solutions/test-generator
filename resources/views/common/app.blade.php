<!DOCTYPE html>
<html>
<head>
	<title></title>
	@include('common.head')
</head>
<body>
	<!-- Begin page -->
	<div id="wrapper">
		@include('common.header')
		@include('common.sidebar')
		<div class="content-page">
			@section('content')
			@show
		</div>
	</div>
@include('common.footer')
@include('common.js')
</body>
</html>
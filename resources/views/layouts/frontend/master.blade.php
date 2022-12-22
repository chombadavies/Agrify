<!DOCTYPE html>
<html lang="en">

@include('layouts.frontend.head_script')

<body>
	
	<div id="page">
		
	@include('layouts.frontend.header')
	<!-- /header -->
	
	@yield('content')
		
@include('layouts.frontend.footer')
	<!--/footer-->
	</div>
	<!-- page -->
	
	<div id="toTop"></div><!-- Back to top button -->
	@include('layouts.frontend.foot_script')

</body>
</html>
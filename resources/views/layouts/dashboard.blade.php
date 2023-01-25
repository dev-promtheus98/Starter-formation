<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ $title ?? '' }}</title>

	<!-- Global stylesheets -->
	<link href="{{ asset('dashboard/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('dashboard/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('dashboard/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
	<link href="{{ asset('dashboard/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('dashboard/demo/demo_configurator.js') }}"></script>
	<script src="{{ asset('dashboard/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->
    
	<!-- Theme JS files -->
	<script src="{{ asset('dashboard/js/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('dashboard/js/vendor/tables/datatables/datatables.min.js') }}"></script>

	<script src="{{ asset('dashboard/js/app.js') }}"></script>
	<script src="{{ asset('dashboard/demo/pages/datatables_basic.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	@include('layouts.partials._navbar')

	<!-- Page content -->
	<div class="page-content">

        @include('layouts.partials._sidebar')

		<!-- Main content -->
		<div class="content-wrapper">

			@yield('page-header')


			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content">

					@yield('content')

				</div>
				<!-- /content area -->


				@include('layouts.partials._footer')

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
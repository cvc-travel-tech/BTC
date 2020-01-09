<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/colors.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->


    @yield('style')

</head>
<body class="navbar-top">
        @include('admin.layouts.include.navbar')

    <!-- Page container -->
    <div class="page-container">
		<!-- Page content -->
		<div class="page-content">
            @include('admin.layouts.include.sidebar')
            
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Starters</span> - Fixed Layout</h4>
						</div>

						<div class="heading-elements">
							<a href="#" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">Button <b><i class="icon-menu7"></i></b></a>
						</div>
					</div>

					<div class="breadcrumb-line breadcrumb-line-component">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="layout_fixed.html">Starters</a></li>
							<li class="active">Fixed layout</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Link</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Dropdown
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
                <!-- /page header -->

            

                <!-- Content area -->
                <div class="content">


                    @yield('content')


                    @include('admin.layouts.include.footer')

                </div>
                <!-- /content area -->
                    
            </div>
            <!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
        {{-- @include('admin.layouts.include.sidebar2') --}}

    <!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('admin/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ asset('admin/js/plugins/ui/nicescroll.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/forms/selects/select2.min.js')}}"></script>
	
	<script type="text/javascript" src="{{ asset('admin/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/pages/layout_fixed_custom.js')}}"></script>

	<script type="text/javascript" src="{{ asset('admin/js/plugins/ui/ripple.min.js')}}"></script>
	{{-- <script type="text/javascript" src="{{ asset('admin/js/pages/datatables_advanced.js')}}"></script> --}}
    
    <!-- /theme JS files -->
    @yield('script')
</body>
</html>


	<!-- /theme JS files -->
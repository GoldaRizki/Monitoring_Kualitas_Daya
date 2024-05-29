<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Monitoring Server</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="assets/plugins/custom/leaflet/leaflet.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">

				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid" id="kt_wrapper">


					<!--begin::Header-->
					<div id="kt_header" style="" class="container-fluid p-7 bg-white align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							
							<div class="d-flex align-items-center" id="kt_header_wrapper">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_wrapper'}">
									<!--begin::Heading-->
									<h1 class="text-dark fw-bolder my-1 fs-3 lh-1">Dashboard</h1>
									<!--end::Heading-->
								</div>
								<!--end::Page title=-->
							</div>
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">


							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
                            <div class="row g-5 g-xl-8">
                                <!--begin::Col-->
								<div class="col-xxl-4">
                                    
									@include('main.partials.kiri')
                                    
								</div>
								<!--end::Col-->



                                <div class="col-xxl-8">

                                    @include('main.partials.kanan')

                                </div>

                            </div>

						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->

				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->


		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<script>var hostUrl = "{{ url('/assets/') }}";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ url('/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ url('/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ url('/assets/plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ url('/assets/js/custom/modals/select-location.js') }}"></script>
		<script src="{{ url('/assets/js/custom/widgets.js') }}"></script>
		<script src="{{ url('/assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ url('/assets/js/custom/modals/create-app.js') }}"></script>
		<script src="{{ url('/assets/js/custom/modals/upgrade-plan.js') }}"></script>
		<!--end::Page Custom Javascript-->

		@include('main.partials.init')
		@include('main.partials.components')

		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
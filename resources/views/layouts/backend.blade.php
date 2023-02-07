<!DOCTYPE html>
<html lang="en">
	<head><base href="">
		<meta charset="utf-8" />
		<title> {{ $companyInformation->company_name }} | @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		 <meta name="description" content="{{ $seo->meta_description }}" />
        <meta name="keywords" content="{{ $seo->meta_keyword }}" />
        <meta name="author" content="{{ $seo->meta_author }}">
        <meta property="og:title" content="Tuition Centre in East London - Best Tutors in East London - Merit Tutors" />
        <meta property="og:url" content="https://www.merittutors.co.uk/" />
        <meta property="og:site_name" content="Merit Tutors I Tuition Centre in East London" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png" href="{{ asset('uploads/logo/'.$companyInformation->favicon) }}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{asset('backend')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('backend')}}/assets/validation.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{asset('backend')}}/assets/izitost.css">
		<link rel="stylesheet" href="{{asset('backend')}}/assets/datatabels/dataTables.min.css">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        {{-- <link href="{{asset('backend')}}/assets/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" /> --}}
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link href="{{asset('backend')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css">
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
		
	

        {{-- <link href="{{asset('backend')}}/assets/plugins/Bootstrap-4-Tag-Input-Plugin-jQuery/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" /> --}}
	</head>

	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="{{url('/admin')}}">
							@if($companyInformation->logo != NULL) 
                            <img alt="Logo" src="{{asset('uploads/logo/'.$companyInformation->logo)}}" style="height:50px !important" />
                            @else
                            {{-- <img alt="Logo" src="{{asset('backend')}}/assets/media/logos/logo-compact.svg" class="h-30px" /> --}}
                            @endif
						</a>
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-left.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					@include('backend.include.mainmenu')
					<!--end::Aside menu-->
					<!--begin::Footer-->
					<div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
						<a href="documentation/getting-started.html" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-delay-show="8000" title="Check out the complete documentation with over 100 components">
							
							<!--begin::Svg Icon | path: icons/duotone/General/Clipboard.svg-->
							<span class="svg-icon btn-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
										<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
										<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
										<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					@include('backend.include.headermenu')
					<!--end::Header-->
					<!--begin::Content-->
                    @yield('content')
					<!--end::Content-->
					<!--begin::Footer-->
                   

                    @include('backend.include.footer')
				
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>

		
	




	


	

		<script src="{{asset('backend')}}/assets/plugins/global/plugins.bundle.js"></script>
		<script src="{{asset('backend')}}/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
        <script src="{{asset('backend')}}/assets/js/spartan-multi-image-picker.js"></script>
        <script src="{{asset('backend')}}/assets/plugins/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
     
		<script src="{{asset('backend')}}/assets/js/custom/modals/users-search.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/modals/new-target.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/widgets.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/apps/chat/chat.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/modals/create-app.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/modals/upgrade-plan.js"></script>
		<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
        <script src="{{asset('backend')}}/assets/plugins/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js"></script>
        
        <script>
            $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
        </script>

        <script>
            $(document).ready(function() {
                $(".tags").tagsinput('items');
                $("#searchitem").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
		<script>
		$(document).on("click", "#delete", function(e) {
			e.preventDefault();
			var link = $(this).attr("href");
			swal({
					title: "Are you Want to delete?",
					text: "Once Delete, This will be Permanently Delete!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						window.location.href = link;
					} else {
						swal("Safe Data!");
					}
				});
		});
	</script>
		<script src="{{asset('backend')}}/assets/izitost.js"></script>
	<script>
		@if(Session::has('messege'))
		var type = "{{Session::get('alert-type','info')}}"
		switch (type) {
			case 'success':
				iziToast.success({
					message: '{{ Session::get('messege') }}',
					'position': 'topRight'
				});
				break;
			case 'info':
				iziToast.info({
					message: '{{ Session::get('messege') }}',
					'position': 'topRight'
				});
				break;
			case 'warning':
				iziToast.warning({
					message: '{{ Session::get('messege') }}',
					'position': 'topRight'
				});
				break;
			case 'error':
				iziToast.error({
					message: '{{ Session::get('messege') }}',
					'position': 'topRight'
				});
				break;
		}
		@endif
	</script>
	<!-- include libraries(jQuery, bootstrap) -->


<!-- include summernote css/js -->

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
	$(document).ready(function() {
  $('#summernote').summernote({
	height: 300,  
  });
});
</script>


<script>
    $(document).ready(function() {

        $('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
        $("#thumbnail_img").spartanMultiImagePicker({
            fieldName: 'thumbnail_img',
            maxCount: 1,
            rowHeight: '200px',
            groupClassName: 'col-lg-3 col-md-4 col-sm-4 col-xs-6',
            maxFileSize: '',
            dropFileLabel: "Drop Here",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });

        $("#photos").spartanMultiImagePicker({
            fieldName: 'photos[]',
            maxCount: 10,
            rowHeight: '200px',
            groupClassName: 'col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6',
            maxFileSize: '',
            dropFileLabel: "Drop Here",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });
        $("#product_img").spartanMultiImagePicker({
            fieldName: 'image',
            maxCount: 1,
            rowHeight: '450px',
            groupClassName: 'col-xl-12 col-md-12 col-sm-12 col-xs-12',
            maxFileSize: '',
            dropFileLabel: "Drag & Drop",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });

    });
</script>
<!-- Modal -->

		<script src="{{asset('backend')}}/assets/js/custom/widgets.js"></script>
		<script src="{{asset('backend')}}/assets/datatabels/dataTables.min.js"></script>
		<script src="{{asset('backend')}}/assets/datatabels/dataTables-active.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/apps/chat/chat.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/modals/create-app.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/modals/upgrade-plan.js"></script>
      
		<script src="{{asset('backend')}}/assets/js/custom/apps/user-management/users/view/view.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/apps/user-management/users/view/update-details.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/apps/user-management/users/view/add-schedule.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/apps/user-management/users/view/add-task.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/apps/user-management/users/view/update-email.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/apps/user-management/users/view/update-password.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/apps/user-management/users/view/update-role.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/apps/user-management/users/view/add-auth-app.js"></script>
		<script src="{{asset('backend')}}/assets/js/custom/apps/user-management/users/view/add-one-time-password.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 


	</body>
	<!--end::Body-->
</html>
<div class="aside-menu flex-column-fluid">
	<!--begin::Aside Menu-->
	<div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
		<!--begin::Menu-->
		<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.home*') ? 'active' : '' }}" href="{{route('admin.home')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">DASHBOARD</span>
				</a>
			</div>
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Exam Section</span>
				</div>
			</div>
		@if(Auth::user()->notification==1)
	        @php
			$totalnotify=App\Models\NotifyChat::where('admin_is_seen',0)->count();
			@endphp
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.notify.tutor*') ? 'active' : '' }}" href="{{route('admin.notify.tutor')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">NOTIFICATION </span><span class="badge badge-light-danger">{{ $totalnotify}}</span>
				</a>
			</div>
			@endif
				@if(Auth::user()->exam_date==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.essuedate.update*') ? 'active' : '' }}" href="{{route('admin.essuedate.update')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title"> EXAM DATE ESSUES</span>
				</a>
			</div>
				@endif
				@if(Auth::user()->update_exam_date==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.examdate.index*') ? 'active' : '' }}" href="{{route('admin.examdate.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">UPDATE EXAM DATE</span>
				</a>
			</div>
				@endif
			@if(Auth::user()->all_exam==1)
			@php
				$allcount=App\Models\ExamRequest::where('is_seen',0)->where('is_deleted',1)->where('is_completed_from',1)->count();

				$alevelcount=App\Models\ExamRequest::where('status',0)->where('is_deleted',1)->where('main_exam_type','A Level')->count();

				$igcsecount=App\Models\ExamRequest::where('status',0)->where('is_deleted',1)->where('main_exam_type','IGCSE')->count();

				$functionalskillscount=App\Models\ExamRequest::where('status',0)->where('is_deleted',1)->where('main_exam_type','Functional Skills')->count();

				$attcount=App\Models\ExamRequest::where('status',0)->where('is_deleted',1)->where('main_exam_type','ATT')->count();

				$accacount=App\Models\ExamRequest::where('status',0)->where('is_deleted',1)->where('main_exam_type','ACCA')->count();
				
			@endphp
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.examrequest.allbooking*') ? 'active' : '' }}" href="{{route('admin.examrequest.allbooking')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">All Exam Booking</span><span class="badge badge-success">{{$allcount}}</span>
				</a>
			</div>
			
			
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.examrequest.gcse*')) here show @elseif(request()->routeIs('admin.examconfirmlist.gccse*')) here show @endif">
			    
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">GCSE EXAM BOOKING</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examrequest.gcse*') ? 'active' : '' }}" href="{{route('admin.examrequest.gcse')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">GCSE EXAM REQUEST</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examconfirmlist.gccse*') ? 'active' : '' }}"  href="{{ route('admin.examconfirmlist.gccse') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">GCSE CONFIRM LIST</span>
						</a>
					</div>
				</div>
			</div>
			
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.examrequest.igcse*')) here show @elseif(request()->routeIs('admin.examconfirmlist.igcse*')) here show @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">IGCSE EXAM BOOKING</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examrequest.igcse*') ? 'active' : '' }}" href="{{route('admin.examrequest.igcse')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">IGCSE EXAM REQUEST</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examconfirmlist.igcse*') ? 'active' : '' }}"  href="{{ route('admin.examconfirmlist.igcse') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">IGCSE CONFIRM LIST</span>
						</a>
					</div>
				</div>
			</div>
			
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.examrequest.alevel*')) here show @elseif(request()->routeIs('admin.examconfirmlist.alevels*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">A LEVEL EXAM BOOKING</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examrequest.alevel*') ? 'active' : '' }}" href="{{route('admin.examrequest.alevel')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">A LEVEL EXAM REQUEST</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examconfirmlist.alevels*') ? 'active' : '' }}"  href="{{ route('admin.examconfirmlist.alevels') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">A LEVEL CONFIRM LIST</span>
						</a>
					</div>
				</div>
			</div>
			
			
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.examrequest.functionalskills*')) here show @elseif(request()->routeIs('admin.examconfirmlist.functionalskills')) here show @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">FUNCTIONAL SKILLS EXAM</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examrequest.functionalskills*') ? 'active' : '' }}" href="{{route('admin.examrequest.functionalskills')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">FUNCTIONAL SKILLS EXAM</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examconfirmlist.functionalskills*') ? 'active' : '' }}"  href="{{ route('admin.examconfirmlist.functionalskills') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">FUNCTIONAL SKILLS CONFIRM LIST</span>
						</a>
					</div>
				</div>
			</div>
			
			
				
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.examrequest.acca*')) here show @elseif(request()->routeIs('admin.examconfirmlist.acca*')) here show @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">ACCA EXAM BOOKING</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examrequest.acca*') ? 'active' : '' }}" href="{{route('admin.examrequest.acca')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ACCA EXAM REQUEST</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examconfirmlist.acca*') ? 'active' : '' }}"  href="{{ route('admin.examconfirmlist.acca') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ACCA EXAM CONFIRM LIST</span>
						</a>
					</div>
				</div>
			</div>
			
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.examrequest.aat*')) here show @elseif(request()->routeIs('admin.examconfirmlist.aat*')) here show @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">AAT EXAM BOOKING</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examrequest.aat*') ? 'active' : '' }}" href="{{route('admin.examrequest.aat')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">AAT EXAM REQUEST</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examconfirmlist.aat*') ? 'active' : '' }}"  href="{{ route('admin.examconfirmlist.aat') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">AAT EXAM CONFIRM LIST</span>
						</a>
					</div>
				</div>
			</div>
			
			
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.examconfirmlist.aslevels*')) here show @elseif(request()->routeIs('admin.exambooking.aslevels*')) here show @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">AS LEVELs EXAM BOOKING</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.exambooking.aslevels*') ? 'active' : '' }}" href="{{route('admin.exambooking.aslevels')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">AS LEVELs EXAM REQUEST</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.examconfirmlist.aslevels*') ? 'active' : '' }}"  href="{{ route('admin.examconfirmlist.aslevels') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">AS LEVELs EXAM CONFIRM LIST</span>
						</a>
					</div>
				</div>
			</div>
		
		
		
		
		
		
			@endif
			@if(Auth::user()->subjects==1)


			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">SUBJECT SECTION </span>
				</div>
			</div>
			
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.companyInformation*')) here show  @elseif(request()->routeIs('admin.seoInformation*')) here show  @elseif(request()->routeIs('admin.socialInformation*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">SUBJECT MANAGE</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.subject.create*') ? 'active' : '' }}" href="{{route('admin.subject.create')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ADD SUBJECT</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.subject.index*') ? 'active' : '' }}"  href="{{ route('admin.subject.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL SUBJECTS</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.gcsesubject.index*') ? 'active' : '' }}" href="{{ route('admin.gcsesubject.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">GCSE SUBJECTS</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.igcsesubject.index*') ? 'active' : '' }}" href="{{ route('admin.igcsesubject.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">IGCSE SUBJECTS</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.alevelsubject.index*') ? 'active' : '' }}" href="{{ route('admin.alevelsubject.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">A LEVEL SUBJECTS</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.aslevelsubject.index*') ? 'active' : '' }}" href="{{ route('admin.aslevelsubject.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">AS LEVEL SUBJECTS</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.aatsubject.index') ? 'active' : '' }}" href="{{ route('admin.aatsubject.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">AAT SUBJECTS</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.accasubject.index*') ? 'active' : '' }}" href="{{ route('admin.accasubject.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ACCA SUBJECTS</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.functionalskillssubject.index*') ? 'active' : '' }}" href="{{ route('admin.functionalskillssubject.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">FUNCTIONAL SKILLS</span>
						</a>
					</div>
				
				</div>
			</div>
			
		
			@endif
			@if(Auth::user()->role==1)
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Admin-User Section</span>
				</div>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.adminuser.create*') ? 'active' : '' }}" href="{{route('admin.adminuser.create')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">ADD ADMIN-USER</span>
				</a>
			</div>
				<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.adminuser.index*') ? 'active' : '' }}" href="{{route('admin.adminuser.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">ALL ADMIN-USER</span>
				</a>
			</div>
			@endif
			@if(Auth::user()->student_list==1)
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Agent Section</span>
				</div>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.agentindex.list*') ? 'active' : '' }}" href="{{route('admin.agentindex.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">AGENT LIST</span>
				</a>
			</div>
				<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.agentadd.list*') ? 'active' : '' }}" href="{{route('admin.agentadd.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">ADD AGENT</span>
				</a>
			</div>
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Student Section</span>
				</div>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.student.list*') ? 'active' : '' }}" href="{{route('admin.student.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">STUDENT LIST</span>
				</a>
			</div>
			@endif
				
			@if(Auth::user()->receive_payment==1)
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Payment Section</span>
				</div>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.receiveindex.list*') ? 'active' : '' }}" href="{{route('admin.receiveindex.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">RECEIVE PAYMENT</span>
				</a>
			</div>
			@endif
			
			@if(Auth::user()->settings==1)
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Website Setup</span>
				</div>
			</div>
			
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.companyInformation*')) here show  @elseif(request()->routeIs('admin.seoInformation*')) here show  @elseif(request()->routeIs('admin.socialInformation*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">SETTINGS</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.companyInformation*') ? 'active' : '' }}" href="{{route('admin.companyInformation')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">COMPANY INFORMATION</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.seoInformation*') ? 'active' : '' }}"  href="{{ route('admin.seoInformation') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">SEO</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.socialInformation*') ? 'active' : '' }}" href="{{ route('admin.socialInformation') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">SOICAL</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.about-us*') ? 'active' : '' }}" href="{{ route('admin.about-us.update') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ABOUT US</span>
						</a>
					</div>
				
				</div>
			</div>
			@endif
			@if(Auth::user()->contact_message==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.contactmessage.index*') ? 'active' : '' }}" href="{{route('admin.contactmessage.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">CONTACT MESSAGE</span>
				</a>
			</div>
				@endif
			@if(Auth::user()->banner==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.banner.update*') ? 'active' : '' }}" href="{{route('admin.banner.update')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">BANNER SECTION</span>
				</a>
			</div>
				@endif
			@if(Auth::user()->terms_and_condition==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.terms-conditions.update*') ? 'active' : '' }}" href="{{route('admin.terms-conditions.update')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">TERMS & CONDITION</span>
				</a>
			</div>
			=
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.privacy-policy.update*') ? 'active' : '' }}" href="{{url('/admin/privacy-policy/update')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">PRIVACY POLICY</span>
				</a>
			</div>
				@endif
			@if(Auth::user()->gallery==1)
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.blog*')) here show  @elseif(request()->routeIs('admin.blog*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">GALLERY SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.gallery.create*') ? 'active' : '' }}" href="{{route('admin.gallery.create')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> GALLERY CREATE</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.gallery.index*') ? 'active' : '' }}"  href="{{ route('admin.gallery.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL GALLERY</span>
						</a>
					</div>
					
				</div>
			</div>
				@endif
			@if(Auth::user()->events==1)
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.blog*')) here show  @elseif(request()->routeIs('admin.blog*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">EVENT SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.event.create*') ? 'active' : '' }}" href="{{route('admin.event.create')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> EVENT CREATE</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.event.index*') ? 'active' : '' }}"  href="{{ route('admin.event.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL EVENT</span>
						</a>
					</div>
					
				</div>
			</div>
				@endif
			@if(Auth::user()->blogs==1)
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.blog*')) here show  @elseif(request()->routeIs('admin.blog*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">BLOG SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.blog.create*') ? 'active' : '' }}" href="{{route('admin.blog.create')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> BLOG CREATE</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.blog.index*') ? 'active' : '' }}"  href="{{ route('admin.blog.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL BLOG</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.category.index*') ? 'active' : '' }}"  href="{{ route('admin.category.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL BLOG-CATEGORY</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.category.create*') ? 'active' : '' }}"  href="{{ route('admin.category.create') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ADD BLOG-CATEGORY</span>
						</a>
					</div>
					
				</div>
			</div>
				@endif
			@if(Auth::user()->reviews==1)
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.review*')) here show  @elseif(request()->routeIs('admin.review*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">REVIEW SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.review.index*') ? 'active' : '' }}"  href="{{ route('admin.review.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL REVIEW</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.review.create*') ? 'active' : '' }}"  href="{{ route('admin.review.create') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ADD REVIEW</span>
						</a>
					</div>
					
				</div>
			</div>
				@endif
			
			<div class="menu-item">
				<a class="menu-link" href="{{route('admin.logout')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">Logout</span>
				</a>
			</div>
		</div>
	</div>
</div>
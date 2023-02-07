 <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
              </button>
              <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                  
                </form>
              </div>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                  @if(Auth::user()->photo==null )
                  <img src="{{asset('uploads')}}/istockphoto-1300845620-612x612.jpg" alt="profile">
                  @else
                  <img src="{{asset('/'.Auth::user()->photo)}}" alt="profile">
                  @endif
                      <span class="availability-status online"></span>
                    </div>
                    <div class="nav-profile-text">
                      <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ url('/exam-booking-list') }}">
                      <i class="mdi mdi-cached me-2 text-success"></i> Exam Booking </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('/student/updateprofile')}}">
                      <i class="mdi mdi-cached me-2 text-success"></i> Edit Profile </a>
                    <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="{{ url('student/updatepassword') }}">
                      <i class="mdi mdi-cached me-2 text-success"></i> Password update </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/user/notification') }}">
                      <i class="mdi mdi-cached me-2 text-success"></i> Supports </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/logout') }}">
                      <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
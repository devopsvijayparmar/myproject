 <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{route('super-admin.dashboard')}}" class="nav-link">Dashboard</a>
          </li>
          
		   <li class="nav-item dropdown" id="frontendetab">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Menu</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="{{ url('/super-admin/web-templates') }}" class="dropdown-item">Web Templates </a></li>
              <li><a href="{{ url('/super-admin/pricing') }}" class="dropdown-item">Pricing</a></li>
              <li><a href="{{ url('/super-admin/system') }}" class="dropdown-item">System</a></li>
              <li><a href="{{ url('/super-admin/amazing-features') }}" class="dropdown-item">Amazing Features</a></li>
              <li><a href="{{ url('/super-admin/contact-us') }}" class="dropdown-item">Contact</a></li>
              <li><a href="#" class="dropdown-item">Contact inquiry</a></li>
			  <li><a href="{{ url('/super-admin/admin-slider') }}" class="dropdown-item">Slider</a></li>
			  <li><a href="{{ url('/super-admin/settings') }}" class="dropdown-item">Settings</a></li>
			  <li><a href="{{ route('super-admin.logout') }}" class="dropdown-item">Logout</a></li>
			 
            </ul>
          </li>
		  
		   <li class="nav-item dropdown" id="frontendetab">
            <a id="dropdownSubMenu2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">CMS</a>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
           
              <li><a href="{{ url('/super-admin/cms/about-us') }}" class="dropdown-item">About us</a></li>
              <li><a href="{{ url('/super-admin/cms/faq') }}" class="dropdown-item">FAQ</a></li>
              <li><a href="{{ url('/super-admin/cms/privacy-policy') }}" class="dropdown-item">Privacy Policy</a></li>
              <li><a href="{{ url('/super-admin/cms/terms-of-use') }}" class="dropdown-item">Terms Of Use</a></li>
			  <li><a href="{{ url('/super-admin/cms/cookie-policy') }}" class="dropdown-item">Cookie Policy</a></li>
             
            </ul>
          </li>
		 
        </ul>
      </div>

    </div>
  </nav>
  <!-- /.navbar -->
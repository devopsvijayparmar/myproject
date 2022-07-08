 <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          
		   <li class="nav-item dropdown" id="frontendetab">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Frontend</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="{{ url('/super-admin/web-templates') }}" class="dropdown-item">Web Templates </a></li>
              <li><a href="{{ url('/super-admin/pricing') }}" class="dropdown-item">Pricing</a></li>
              <li><a href="{{ url('/super-admin/system') }}" class="dropdown-item">System</a></li>
              <li><a href="{{ url('/super-admin/amazing-features') }}" class="dropdown-item">Amazing Features</a></li>
              <li><a href="{{ url('/super-admin/about-us') }}" class="dropdown-item">About</a></li>
              <li><a href="{{ url('/super-admin/contact-us') }}" class="dropdown-item">Contact</a></li>
              <li><a href="#" class="dropdown-item">Contact inquiry</a></li>
			    <li><a href="{{ url('/super-admin/admin-slider') }}" class="dropdown-item">Slider</a></li>
			  <li><a href="{{ url('/super-admin/settings') }}" class="dropdown-item">Settings</a></li>
            </ul>
          </li>
		 
        </ul>
      </div>

    </div>
  </nav>
  <!-- /.navbar -->
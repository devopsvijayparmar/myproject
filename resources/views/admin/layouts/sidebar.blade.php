 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
		   <li class="nav-item">
            <a href="<?php echo url('/admin/home');?>" class="nav-link" id="dashboard">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="{{route('event.index')}}" class="nav-link" id="eventtab">
            <i class="nav-icon fab fa-bandcamp"></i>
              <p>
                Event
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link" id="categorytab">
			 <i class="nav-icon fas fa-align-justify"></i>
              <p>
                Category
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="{{route('brand.index')}}" class="nav-link" id="brandtab">
            <i class="nav-icon fab fa-bandcamp"></i>
              <p>
                Brand
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="<?php echo url('/admin/blog');?>" class="nav-link" id="blogtab">
             <i class="nav-icon fas fa-th-large"></i>
              <p>
                Blog
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="<?php echo url('/admin/type');?>" class="nav-link" id="typetab">
            <i class="nav-icon fas fa-align-justify"></i>
              <p>
                Type
              </p>
            </a>
          </li>
		  
		    <li class="nav-item">
            <a href="<?php echo url('/admin/project_type');?>" class="nav-link" id="projecttypetab">
            <i class="nav-icon fas fa-align-justify"></i>
              <p>
                Project Type
              </p>
            </a>
          </li>
		  
		  <li class="nav-item">
            <a href="<?php echo url('/admin/products');?>" class="nav-link" id="producttab">
             <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Products
              </p>
            </a>
          </li>
		  
		    <li class="nav-item">
            <a href="<?php echo url('/admin/projects');?>" class="nav-link" id="projecttab">
             <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Projects
              </p>
            </a>
          </li>
		  
		    <li class="nav-item">
            <a href="<?php echo url('/admin/orders');?>" class="nav-link" id="orderstab">
            <i class="nav-icon fas fa-archive"></i>
              <p>
                Orders
              </p>
            </a>
          </li>
		  
		    <li class="nav-item">
            <a href="<?php echo url('/admin/mobile-orders');?>" class="nav-link" id="mobileorderstab">
            <i class="nav-icon fas fa-archive"></i>
              <p>
                Mobiles Orders
              </p>
            </a>
          </li>
		  
		    <li class="nav-item">
            <a href="<?php echo url('/admin/plan');?>" class="nav-link" id="plantab">
             <i class="nav-icon fas fa-drafting-compass"></i>
              <p>
                Plans
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="<?php echo url('/admin/mobile');?>" class="nav-link" id="mobiletab">
            <i class="nav-icon fas fa-mobile"></i>
              <p>
                Mobiles
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="{{route('electric.index')}}" class="nav-link" id="electrictab">
            <i class="nav-icon fas fa-charging-station"></i>
              <p>
                Electric Products
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="<?php echo url('/admin/photo-shoots');?>" class="nav-link" id="photoshoottab">
            <i class="nav-icon fas fa-photo-video"></i>
              <p>
                Photo Shoots
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="<?php echo url('/admin/our-team');?>" class="nav-link" id="our_teamtab">
           <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Our Team
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="{{route('books.index')}}" class="nav-link" id="bookstab">
			<i class="nav-icon fas fa-book-open"></i>
              <p>
                Books
              </p>
            </a>
          </li>
		    <li class="nav-item">
            <a href="{{route('about-us.index')}}" class="nav-link" id="about-us-tab">
            <i class="nav-icon fas fa-at"></i>
              <p>
                About Us
              </p>
            </a>
          </li>
		  
		  <li class="nav-item">
            <a href="{{route('contact-us.index')}}" class="nav-link" id="contact-us-tab">
             <i class="nav-icon fas fa-file-signature"></i>
              <p>
                Contact Us
              </p>
            </a>
          </li>
		  
		
		  
		   <li class="nav-item">
            <a href="<?php echo url('/admin/service');?>" class="nav-link" id="servicetab">
            <i class="nav-icon fas fa-sign-language"></i>
              <p>
                Service
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="{{route('gallery.index')}}" class="nav-link" id="gallery-tab">
             <i class="nav-icon fas fa-photo-video"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
		  
		   <li class="nav-item">
            <a href="<?php echo url('/admin/philosophy');?>" class="nav-link" id="philosophy-tab">
             <i class="nav-icon fas fa-atom"></i>
              <p>
               Our Philosophy
              </p>
            </a>
          </li>
		  
		 
		  
		  <li class="nav-header">BUSINESS</li>
		  
		   <!----Business Plan--->
		    @if($user_purchase_plan)
			<li class="nav-item">
				<a href="<?php echo url('/admin/promotion');?>" class="nav-link" id="promotion-tab">
				<i class="nav-icon fas fa-ad"></i>
				<p>
                Promotion
				</p>
				</a>
			</li>
		    <li class="nav-item">
				<a href="{{route('address-book.index')}}" class="nav-link" id="address-book-tab">
				<i class="nav-icon  fas fa-address-book"></i>
				<p>
					Address Book
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo url('/admin/group');?>" class="nav-link" id="grouptab">
				<i class="nav-icon fas fa-user-friends"></i>
				<p>
				Group
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo url('/admin/landing-page');?>" class="nav-link" id="landing-page-tab">
				<i class="nav-icon fas fa-pager"></i>
				<p>
				Landing Page
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{route('email-marketing.index')}}" class="nav-link" id="emailtab">
				<i class="nav-icon fas fa-envelope-square"></i>
				<p>
				Email Marketing 
				</p>
				</a>
			</li>
			@if($user_purchase_plan->page_builder == 'Yes')
			<li class="nav-item">
				<a href="<?php echo url('/admin/page-builder');?>" class="nav-link" id="page-builder-tab">
				<i class="nav-icon fas fa-pager"></i>
				<p>
				Page builder
				</p>
				</a>
			</li>
			@else
			<li class="nav-item menu-disabled">
				<a href="javascript:void(0)" class="nav-link no-drop" id="">
				<i class="nav-icon fas fa-pager"></i>
				<p>
				Page builder
				</p>
				</a>
			</li>
			@endif
			
			
		    @else
			
			<!-------------Else------------------->		
			<li class="nav-item menu-disabled">
				<a href="javascript:void(0)" class="nav-link no-drop" id="">
				<i class="nav-icon fas fa-ad"></i>
				<p>
                Promotion
				</p>
				</a>
			</li>
		    <li class="nav-item menu-disabled">
				<a href="javascript:void(0)" class="nav-link no-drop" id="">
				<i class="nav-icon  fas fa-address-book"></i>
				<p>
				Address Book
				</p>
				</a>
			</li>
			<li class="nav-item menu-disabled">
				<a href="javascript:void(0)" class="nav-link no-drop" id="">
				<i class="nav-icon fas fa-user-friends"></i>
				<p>
				Group
				</p>
				</a>
			</li>
			<li class="nav-item menu-disabled">
				<a href="javascript:void(0)" class="nav-link no-drop" id="">
				<i class="nav-icon fas fa-pager"></i>
				<p>
				Landing Page
				</p>
				</a>
			</li>
			<li class="nav-item menu-disabled">
				<a href="javascript:void(0)" class="nav-link no-drop" id="">
				<i class="nav-icon fas fa-envelope-square"></i>
				<p>
				Email Marketing 
				</p>
				</a>
			</li>
			<li class="nav-item menu-disabled">
				<a href="javascript:void(0)" class="nav-link no-drop" id="">
				<i class="nav-icon fas fa-pager"></i>
				<p>
				Page builder
				</p>
				</a>
			</li>
			
			@endif
			<!----Business Plan--->
			<li class="nav-item">
				<a href="<?php echo url('/admin/purchase-plan');?>" class="nav-link" id="purchase-plan-tab">
				<i class="nav-icon fas fa-tags"></i>
				<p>
				Membership Plan
				</p>
				</a>
			</li>
		  
		   <li class="nav-header">SETTING</li>
		  
			<li class="nav-item">
            <a href="<?php echo url('/admin/settings');?>" class="nav-link" id="settings-tab">
			<i class="nav-icon fas fa-sliders-h"></i>
              <p>
                Settings
              </p>
            </a>
			</li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
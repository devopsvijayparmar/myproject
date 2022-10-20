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
       
			<li class="nav-item">
				<a href="{{route('home')}}" class="nav-link" id="dashboard">
				<i class="nav-icon fas fa-tachometer-alt"></i>
				<p> Dashboard</p>
				</a>
			</li>
			
			@can('event')
			<li class="nav-item">
				<a href="{{route('event.index')}}" class="nav-link" id="eventtab">
				<i class="nav-icon fab fa-bandcamp"></i>
				<p> Event</p>
				</a>
			</li>
			@endcan
			
			@can('category')
			<li class="nav-item">
				<a href="{{route('category.index')}}" class="nav-link" id="categorytab">
				<i class="nav-icon fas fa-align-justify"></i>
				<p> Category</p>
				</a>
			</li>
			@endcan
			
			@can('brand')
			<li class="nav-item">
				<a href="{{route('brand.index')}}" class="nav-link" id="brandtab">
				<i class="nav-icon fab fa-bandcamp"></i>
				<p>Brand</p>
				</a>
			</li>
			@endcan
			
			@can('blog')
			<li class="nav-item">
				<a href="{{route('blog.index')}}" class="nav-link" id="blogtab">
				<i class="nav-icon fas fa-th-large"></i>
				<p>Blog</p>
				</a>
			</li>
			@endcan
			
			@can('type')
			<li class="nav-item">
				<a href="{{route('type.index')}}" class="nav-link" id="typetab">
				<i class="nav-icon fas fa-align-justify"></i>
				<p>Type</p>
				</a>
			</li>
			@endcan
		    
			@can('project_type')
		    <li class="nav-item">
				<a href="{{route('project-type.index')}}" class="nav-link" id="projecttypetab">
				<i class="nav-icon fas fa-align-justify"></i>
				<p>Project Type</p>
				</a>
			</li>
			@endcan
		  
		    @can('products')
			<li class="nav-item">
				<a href="{{route('products.index')}}" class="nav-link" id="producttab">
				<i class="nav-icon fab fa-product-hunt"></i>
				<p>Products</p>
				</a>
			</li>
			@endcan
		  
		    @can('projects')
		    <li class="nav-item">
				<a href="{{route('projects.index')}}" class="nav-link" id="projecttab">
				<i class="nav-icon fab fa-product-hunt"></i>
				<p>Projects</p>
				</a>
			</li>
			@endcan
		  
		    @can('orders')
		    <li class="nav-item">
				<a href="{{route('orders.index')}}" class="nav-link" id="orderstab">
				<i class="nav-icon fas fa-archive"></i>
				<p>Orders </p>
				</a>
			</li>
			@endcan
		  
		    @can('plan')
		    <li class="nav-item">
				<a href="{{route('plan.index')}}" class="nav-link" id="plantab">
				<i class="nav-icon fas fa-drafting-compass"></i>
				<p> Plans</p>
				</a>
			</li>
			@endcan
			
			@can('mobile')
			<li class="nav-item">
				<a href="{{route('mobile.index')}}" class="nav-link" id="mobiletab">
				<i class="nav-icon fas fa-mobile"></i>
				<p>Mobiles</p>
				</a>
			</li>
			@endcan
			
			@can('electric')
			<li class="nav-item">
				<a href="{{route('electric.index')}}" class="nav-link" id="electrictab">
				<i class="nav-icon fas fa-charging-station"></i>
				<p>Electric Products </p>
				</a>
			</li>
			@endcan
			
			@can('photo_shoots')
			<li class="nav-item">
				<a href="{{route('photo-shoots.index')}}" class="nav-link" id="photoshoottab">
				<i class="nav-icon fas fa-photo-video"></i>
				<p>Photo Shoots</p>
				</a>
			</li>
			@endcan
			
			@can('our_team')
			<li class="nav-item">
				<a href="{{route('our-team.index')}}" class="nav-link" id="our_teamtab">
				<i class="nav-icon fas fa-user-friends"></i>
				<p> Our Team </p>
				</a>
			</li>
			@endcan
			
			@can('books')
			<li class="nav-item">
				<a href="{{route('books.index')}}" class="nav-link" id="bookstab">
				<i class="nav-icon fas fa-book-open"></i>
				<p>Books</p>
				</a>
			</li>
			@endcan
			
			@can('about_us')
		    <li class="nav-item">
				<a href="{{route('about-us.index')}}" class="nav-link" id="about-us-tab">
				<i class="nav-icon fas fa-at"></i>
				<p>About Us</p>
				</a>
			</li>
			@endcan
		  
		    @can('contact_us')
			<li class="nav-item">
				<a href="{{route('contact-us.index')}}" class="nav-link" id="contact-us-tab">
				<i class="nav-icon fas fa-file-signature"></i>
				<p>Contact Us</p>
				</a>
			</li>
			@endcan
			
		    @can('service')
			<li class="nav-item">
				<a href="{{route('service.index')}}" class="nav-link" id="servicetab">
				<i class="nav-icon fas fa-sign-language"></i>
				<p>Service</p>
				</a>
			</li>
			@endcan
			
			@can('gallery')
			<li class="nav-item">
				<a href="{{route('gallery.index')}}" class="nav-link" id="gallery-tab">
				<i class="nav-icon fas fa-photo-video"></i>
				<p> Gallery</p>
				</a>
			</li>
			@endcan
		  
		    @can('philosophy')
			<li class="nav-item">
				<a href="{{route('philosophy.index')}}" class="nav-link" id="philosophy-tab">
				<i class="nav-icon fas fa-atom"></i>
				<p>Our Philosophy</p>
				</a>
			</li>
			@endcan
		  
		  
		    <!---BUSSINESS MODULE---->
			<li class="nav-header">BUSINESS</li>
		  
		
		    @if($user_purchase_plan)
				
			    @can('promotion')
				<li class="nav-item">
					<a href="{{route('promotion.index')}}" class="nav-link" id="promotion-tab">
					<i class="nav-icon fas fa-ad"></i>
					<p> Promotion</p>
					</a>
				</li>
				@endcan
				
				@can('address_book')
				<li class="nav-item">
					<a href="{{route('address-book.index')}}" class="nav-link" id="address-book-tab">
					<i class="nav-icon  fas fa-address-book"></i>
					<p>Address Book</p>
					</a>
				</li>
				@endcan
				
				@can('group')
				<li class="nav-item">
					<a href="{{route('group.index')}}" class="nav-link" id="grouptab">
					<i class="nav-icon fas fa-user-friends"></i>
					<p>Group</p>
					</a>
				</li>
				@endcan
				
				@can('landing_page')
				<li class="nav-item">
					<a href="{{route('landing-page.index')}}" class="nav-link" id="landing-page-tab">
					<i class="nav-icon fas fa-pager"></i>
					<p>Landing Page</p>
					</a>
				</li>
				@endcan
				
				@can('email_marketing')
				<li class="nav-item">
					<a href="{{route('email-marketing.index')}}" class="nav-link" id="emailtab">
					<i class="nav-icon fas fa-envelope-square"></i>
					<p>Email Marketing</p>
					</a>
				</li>
				@endcan
				
				@can('page_builder')
					@if($user_purchase_plan->page_builder == 'Yes')
					<li class="nav-item">
						<a href="{{route('purchase-plan')}}" class="nav-link" id="page-builder-tab">
						<i class="nav-icon fas fa-pager"></i>
						<p>Page builder</p>
						</a>
					</li>
					@else
					<li class="nav-item menu-disabled">
						<a href="javascript:void(0)" class="nav-link no-drop" id="">
						<i class="nav-icon fas fa-pager"></i>
						<p>Page builder</p>
						</a>
					</li>
					@endif
				@endcan
				
		    @else
				@can('promotion')	
				<li class="nav-item menu-disabled">
					<a href="javascript:void(0)" class="nav-link no-drop" id="">
					<i class="nav-icon fas fa-ad"></i>
					<p> Promotion</p>
					</a>
				</li>
				@endcan
				
				@can('address_book')
				<li class="nav-item menu-disabled">
					<a href="javascript:void(0)" class="nav-link no-drop" id="">
					<i class="nav-icon  fas fa-address-book"></i>
					<p>Address Book</p>
					</a>
				</li>
				@endcan
				
				@can('group')
				<li class="nav-item menu-disabled">
					<a href="javascript:void(0)" class="nav-link no-drop" id="">
					<i class="nav-icon fas fa-user-friends"></i>
					<p>Group</p>
					</a>
				</li>
				@endcan
				
				@can('landing_page')
				<li class="nav-item menu-disabled">
					<a href="javascript:void(0)" class="nav-link no-drop" id="">
					<i class="nav-icon fas fa-pager"></i>
					<p>Landing Page</p>
					</a>
				</li>
				@endcan
				
				@can('email_marketing')
				<li class="nav-item menu-disabled">
					<a href="javascript:void(0)" class="nav-link no-drop" id="">
					<i class="nav-icon fas fa-envelope-square"></i>
					<p>Email Marketing </p>
					</a>
				</li>
				@endcan
				
				@can('page_builder')
				<li class="nav-item menu-disabled">
					<a href="javascript:void(0)" class="nav-link no-drop" id="">
					<i class="nav-icon fas fa-pager"></i>
					<p>Page builder</p>
					</a>
				</li>
				@endcan
			@endif
			
			@can('purchase_plan')
			<li class="nav-item">
				<a href="{{route('purchase-plan')}}" class="nav-link" id="purchase-plan-tab">
				<i class="nav-icon fas fa-tags"></i>
				<p>
				Membership Plan
				</p>
				</a>
			</li>
			@endcan
		  
			<li class="nav-header">SETTING</li>
		  
		    @can('site_settings')
			<li class="nav-item">
				<a href="{{route('user-settings')}}" class="nav-link" id="settings-tab">
				<i class="nav-icon fas fa-sliders-h"></i>
				<p> Settings </p>
				</a>
			</li>
			@endcan
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/morris/morris.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('assets/stylesheets/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('assets/stylesheets/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('assets/stylesheets/theme-custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>

		<style>
			.circular-bar.circular-bar-xs label {
    			font-size: 11px;
    			left: 0;
    			text-align: center;
    			top: 30%;
    			width: 100%;
			}
		</style>


	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="50" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">230</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="{{ route('dashboard.index') }}">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>DASHBOARD</span>
										</a>
									</li>
									<!-- <li>
										<a href="mailbox-folder.html">
											<span class="pull-right label label-primary">182</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Mailbox</span>
										</a>
									</li> -->
									<li class="">
										<a href="{{ route('flats.index') }}">
											<!-- <i class="fa fa-copy" aria-hidden="true"></i> -->
											<i class="fa fa-building"></i>
											<span>FLATS EXPENSES / UNIT</span>
										</a>
										
									</li>
									<li class="">
										<a href="{{ route('owner.index') }}">
											<!-- <i class="fa fa-tasks" aria-hidden="true"></i> -->
											<i class="fa fa-user"></i>
											<span>OWNERS</span>
										</a>
										
									</li>
									
									</li>
	
									</li>
									
								</ul>
							</nav>
	
						   
	
							
	
							
						</div>
	
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="/">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

						<div class="row">
							<div class="col-md-6 col-lg-12 col-xl-6">
								<div class="row">
									<div class="col-md-12 col-lg-6 col-xl-6">
										<section class="panel panel-featured-left panel-featured-primary">
											<div class="panel-body">
												<div class="widget-summary">
													<!-- <div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon bg-primary">
															<i class="fa fa-life-ring"></i>
														</div>
													</div> -->
													<div class="circular-bar circular-bar-xs m-none mt-xs mr-md">
												<div class="circular-bar-chart" data-percent="75" data-plugin-options="{ &quot;barColor&quot;: &quot;#2baab1&quot;, &quot;delay&quot;: 300, &quot;size&quot;: 50, &quot;lineWidth&quot;: 4 }">
													<strong>Average</strong>
													<label><span class="percent">75</span></label>
												<!-- <canvas height="50" width="50"></canvas> --></div>
											</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Total Flats</h4>
															<div class="info">
																<strong class="amount">75</strong>
																<!-- <span class="text-primary">(14 unread)</span> -->
															</div>
														</div>
														<!-- <div class="summary-footer">
															<a class="text-muted text-uppercase">(view all)</a>
														</div> -->
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-6">
										<section class="panel panel-featured-left panel-featured-secondary">
											<div class="panel-body">
												<div class="widget-summary">
													<!-- <div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon bg-secondary">
															<i class="fa  fa-user"></i>
														</div> -->

													<!-- </div> -->
													<div class="circular-bar circular-bar-xs m-none mt-xs mr-md">
												<div class="circular-bar-chart" data-percent="25" data-plugin-options="{ &quot;barColor&quot;: &quot;#2baab1&quot;, &quot;delay&quot;: 300, &quot;size&quot;: 50, &quot;lineWidth&quot;: 4 }">
													<strong>Average</strong>
													<label><span class="percent">25</span></label>
												<!-- <canvas height="50" width="50"></canvas> --></div>
											</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Total Flats Saled</h4>
															<div class="info">
																<strong class="amount">25</strong>
															</div>
														</div>
														<!-- <div class="summary-footer">
															<a class="text-muted text-uppercase">(withdraw)</a>
														</div> -->
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-6">
										<section class="panel panel-featured-left panel-featured-tertiary">
											<div class="panel-body">
												<div class="widget-summary">
													<!-- <div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon bg-tertiary">
															<i class="fa fa-shopping-cart"></i>
														</div>
													</div> -->
													<div class="circular-bar circular-bar-xs m-none mt-xs mr-md">
												<div class="circular-bar-chart" data-percent="20" data-plugin-options="{ &quot;barColor&quot;: &quot;#2baab1&quot;, &quot;delay&quot;: 300, &quot;size&quot;: 50, &quot;lineWidth&quot;: 4 }">
													<strong>Average</strong>
													<label><span class="percent">20</span></label>
												<!-- <canvas height="50" width="50"></canvas> --></div>
											</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Total Flats Available</h4>
															<div class="info">
																<strong class="amount">20</strong>
															</div>
														</div>
														<!-- <div class="summary-footer">
															<a class="text-muted text-uppercase">(statement)</a>
														</div> -->
													</div>
												</div>
											</div>
										</section>
									</div>

									<div class="col-md-12 col-lg-6 col-xl-6">
										<section class="panel panel-featured-left panel-featured-tertiary">
											<div class="panel-body">
												<div class="widget-summary">
													<!-- <div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon bg-tertiary">
															<i class="fa fa-shopping-cart"></i>
														</div>
													</div> -->
													<div class="circular-bar circular-bar-xs m-none mt-xs mr-md">
												<div class="circular-bar-chart" data-percent="20" data-plugin-options="{ &quot;barColor&quot;: &quot;#2baab1&quot;, &quot;delay&quot;: 300, &quot;size&quot;: 50, &quot;lineWidth&quot;: 4 }">
													<strong>Average</strong>
													<label><span class="percent">20</span></label>
												<!-- <canvas height="50" width="50"></canvas> --></div>
											</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Total Expenses Amount</h4>
															<div class="info">
																<strong class="amount">20</strong>
															</div>
														</div>
														<!-- <div class="summary-footer">
															<a class="text-muted text-uppercase">(statement)</a>
														</div> -->
													</div>
												</div>
											</div>
										</section>
									</div>

									<div class="col-md-12 col-lg-6 col-xl-6">
										<section class="panel panel-featured-left panel-featured-tertiary">
											<div class="panel-body">
												<div class="widget-summary">
													<!-- <div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon bg-tertiary">
															<i class="fa fa-shopping-cart"></i>
														</div>
													</div> -->
													<div class="circular-bar circular-bar-xs m-none mt-xs mr-md">
												<div class="circular-bar-chart" data-percent="20" data-plugin-options="{ &quot;barColor&quot;: &quot;#2baab1&quot;, &quot;delay&quot;: 300, &quot;size&quot;: 50, &quot;lineWidth&quot;: 4 }">
													<strong>Average</strong>
													<label><span class="percent">20</span></label>
												<!-- <canvas height="50" width="50"></canvas> --></div>
											</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Total Profit</h4>
															<div class="info">
																<strong class="amount">20</strong>
															</div>
														</div>
														<!-- <div class="summary-footer">
															<a class="text-muted text-uppercase">(statement)</a>
														</div> -->
													</div>
												</div>
											</div>
										</section>
									</div>





									<div class="col-md-12 col-lg-6 col-xl-6">
										<section class="panel panel-featured-left panel-featured-quartenary">
											<div class="panel-body">
												<div class="widget-summary">
													<!-- <div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon bg-quartenary">
															<i class="fa fa-inr"></i>
														</div>
													</div> -->
													<div class="circular-bar circular-bar-xs m-none mt-xs mr-md">
												<div class="circular-bar-chart" data-percent="50" data-plugin-options="{ &quot;barColor&quot;: &quot;#2baab1&quot;, &quot;delay&quot;: 300, &quot;size&quot;: 50, &quot;lineWidth&quot;: 4 }">
													<strong>Average</strong>
													<label><span class="percent">6000</span></label>
												<!-- <canvas height="50" width="50"></canvas> --></div>
											</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Total Loss</h4>
															<div class="info">
																<strong class="amount">6000</strong>
															</div>
														</div>
														<!-- <div class="summary-footer">
															<a class="text-muted text-uppercase">(report)</a>
														</div> -->
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>


						

					<!-- start: page -->
					<h3>Recently Added Flats</h3>
					<table class="table table-bordered table-striped mb-none dataTable" id="datatable-editable">
                            <thead class="thead-light">
							
                                <tr>

                                    <th style="width:10%;">SL No</th>
                                    <th style="width:10%;">Flor No</th>
                                    <th style="width:10%;">Flat No</th>
                                    <th style="width:10%;">Total Expenses</th>
                                    
                                   
                                    <!-- <th class="text-right">Action</th> -->

                                    <!-- <th style="width:10%">Actions</th> -->
                                </tr>
                            </thead>
                            <tbody>
								@foreach ($data as $key => $value)
        						<tr>
            						<td>{{ ++$i }}</td>
            						<td>{{ $value->flat_no }}</td>
            						<td>{{ $value->floor_no }}</td>
									<td>{{ $value->total_expenses }}</td>
									
								@endforeach
								
                                </tr>



                            </tbody>
                        </table>

						<h3>Recently Added Owner</h3>
						<table class="table table-bordered table-striped mb-none dataTable" id="datatable-editable">
                            <thead>
                                <tr>

                                    <th style="width:3%;">SL No</th>
                                    <th style="width:5%;">Flat No</th>
                                    <th style="width:5%;">Floor No</th>
                                    <th style="width:10%;">Owner Name</th>
                                    <th style="width:10%;">Email</th>
                                    <th style="width:10%;">Phone No</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
									@foreach ($data1 as $key => $value)
								
                                <tr>
								

                                    <td>{{ ++$i }}</td>
                                    <td>{{ $value->flat_no }}</td>
                                    <td>{{ $value->floor_no }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->phone_no }}</td>
									

									@endforeach
									
                                </tr>
                            
                            </tbody>
                        </table>
									

					
					<!-- end: page -->
				</section>
			</div>
				
			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('assets/vendor/magnific-popup/magnific-popup.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{asset('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-appear/jquery.appear.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-easypiechart/jquery.easypiechart.js')}}"></script>
		<script src="{{asset('assets/vendor/flot/jquery.flot.js')}}"></script>
		<script src="{{asset('assets/vendor/flot-tooltip/jquery.flot.tooltip.js')}}"></script>
		<script src="{{asset('assets/vendor/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('assets/vendor/flot/jquery.flot.categories.js')}}"></script>
		<script src="{{asset('assets/vendor/flot/jquery.flot.resize.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
		<script src="{{asset('assets/vendor/raphael/raphael.js')}}"></script>
		<script src="{{asset('assets/vendor/morris/morris.js')}}"></script>
		<script src="{{asset('assets/vendor/gauge/gauge.js')}}"></script>
		<script src="{{asset('assets/vendor/snap-svg/snap.svg.js')}}"></script>
		<script src="{{asset('assets/vendor/liquid-meter/liquid.meter.js')}}"></script>
		<script src="{{asset('assets/vendor/jqvmap/jquery.vmap.js')}}"></script>
		<script src="{{asset('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
		<script src="[{asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js')}]"></script>
		<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
		<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>
		<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
		<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
		<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
		<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('assets/javascripts/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('assets/javascripts/theme.custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('assets/javascripts/theme.init.js')}}"></script>


		<!-- Examples -->
		<script src="{{asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script>
	</body>
</html>
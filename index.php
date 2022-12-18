<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<link rel="stylesheet" href="assets/css/bootstrap.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/dashboard.js"></script>

	<script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
<!-- 
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-puzzle3"></i>
						<span class="visible-xs-inline-block position-right">Git updates</span>
						<span class="status-mark border-pink-300"></span>
					</a>
					 -->
					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-heading">
							Git updates
							<ul class="icons-list">
								<li><a href="#"><i class="icon-sync"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body width-350">
							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									Drop the IE <a href="#">specific hacks</a> for temporal inputs
									<div class="media-annotation">4 minutes ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
								</div>
								
								<div class="media-body">
									Add full font overrides for popovers and tooltips
									<div class="media-annotation">36 minutes ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
								</div>
								
								<div class="media-body">
									<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
									<div class="media-annotation">2 hours ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
								</div>
								
								<div class="media-body">
									<a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
									<div class="media-annotation">Dec 18, 18:36</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>
								
								<div class="media-body">
									Have Carousel ignore keyboard events
									<div class="media-annotation">Dec 12, 05:46</div>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
			</ul>

			<div class="navbar-right">
				<!-- <p class="navbar-text">Morning, Victoria!</p> -->
				<!-- <p class="navbar-text"><span class="label bg-success">Online</span></p> -->
				
				<ul class="nav navbar-nav">				
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bell2"></i>
							<span class="visible-xs-inline-block position-right">Activity</span>
							<span class="status-mark border-pink-300"></span>
						</a>

						<div class="dropdown-menu dropdown-content">
							<div class="dropdown-content-heading">
								Activity
								<ul class="icons-list">
									<li><a href="#"><i class="icon-menu7"></i></a></li>
								</ul>
							</div>

							<ul class="media-list dropdown-content-body width-350">
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
										<div class="media-annotation">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs"><i class="icon-paperplane"></i></a>
									</div>
									
									<div class="media-body">
										Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
										<div class="media-annotation">36 minutes ago</div>
									</div>
								</li>

								<!-- <li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs"><i class="icon-plus3"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch in <span class="text-semibold">Limitless</span> repository
										<div class="media-annotation">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-purple-300 btn-rounded btn-icon btn-xs"><i class="icon-truck"></i></a>
									</div>
									
									<div class="media-body">
										Shipping cost to the Netherlands has been reduced, database updated
										<div class="media-annotation">Feb 8, 11:30</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs"><i class="icon-bubble8"></i></a>
									</div>
									
									<div class="media-body">
										New review received on <a href="#">Server side integration</a> services
										<div class="media-annotation">Feb 2, 10:20</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i class="icon-spinner11"></i></a>
									</div>
									
									<div class="media-body">
										<strong>January, 2016</strong> - 1320 new users, 3284 orders, $49,390 revenue
										<div class="media-annotation">Feb 1, 05:46</div>
									</div>
								</li> -->
							</ul>
						</div>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bubble8"></i>
							<span class="visible-xs-inline-block position-right">Messages</span>
							<span class="status-mark border-pink-300"></span>
						</a>
						
						<div class="dropdown-menu dropdown-content width-350">
							<div class="dropdown-content-heading">
								Messages
								<ul class="icons-list">
									<li><a href="#"><i class="icon-compose"></i></a></li>
								</ul>
							</div>

							<ul class="media-list dropdown-content-body">
								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
										<span class="badge bg-danger-400 media-badge">5</span>
									</div>

									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">James Alexander</span>
											<span class="media-annotation pull-right">04:58</span>
										</a>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
										<span class="badge bg-danger-400 media-badge">4</span>
									</div>

									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">Margo Baker</span>
											<span class="media-annotation pull-right">12:16</span>
										</a>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<!-- <li class="media">
									<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">Jeremy Victorino</span>
											<span class="media-annotation pull-right">22:48</span>
										</a>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">Beatrix Diaz</span>
											<span class="media-annotation pull-right">Tue</span>
										</a>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">Richard Vango</span>
											<span class="media-annotation pull-right">Mon</span>
										</a>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul> -->

							<div class="dropdown-content-footer">
								<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
							</div>
						</div>
					</li>					
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<!-- <div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-responsive" alt=""></a>
								<h6>Victoria Baker</h6>
								<span class="text-size-small">Santa Ana, CA</span>
							</div>
														
							<div class="sidebar-user-material-menu">
								<a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
							</div>
						</div>
						
						<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="#"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
								<li><a href="#"><i class="icon-coins"></i> <span>My balance</span></a></li>
								<li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
								<li><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
							</ul>
						</div>
					</div> -->
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="index.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<!-- <a href="#"><i class="icon-stack2"></i> <span>Page layouts</span></a>
									<ul>
										<li><a href="layout_navbar_fixed.html">Fixed navbar</a></li>
										<li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li>
										<li><a href="layout_sidebar_fixed_native.html">Fixed sidebar native scroll</a></li>
										<li><a href="layout_navbar_hideable.html">Hideable navbar</a></li>
										<li><a href="layout_navbar_hideable_sidebar.html">Hideable &amp; fixed sidebar</a></li>
										<li><a href="layout_footer_fixed.html">Fixed footer</a></li>
										<li class="navigation-divider"></li>
										<li><a href="boxed_default.html">Boxed with default sidebar</a></li>
										<li><a href="boxed_mini.html">Boxed with mini sidebar</a></li>
										<li><a href="boxed_full.html">Boxed full width</a></li>
									</ul>
								</li> -->
								<!-- <li>
									<a href="#"><i class="icon-copy"></i> <span>Layouts</span></a>
									<ul>
										<li><a href="../../../layout_1/LTR/index.html" id="layout1">Layout 1</a></li>
										<li><a href="index.html" id="layout2">Layout 2 <span class="label bg-warning-400">Current</span></a></li>
										<li><a href="../../../layout_3/LTR/index.html" id="layout3">Layout 3</a></li>
										<li><a href="../../../layout_4/LTR/index.html" id="layout4">Layout 4</a></li>
										<li><a href="../../../layout_5/LTR/index.html" id="layout5">Layout 5</a></li>
										<li class="disabled"><a href="../../../layout_6/LTR/index.html" id="layout6">Layout 6 <span class="label label-transparent">Coming soon</span></a></li>
									</ul>
								</li> -->
								<!-- <li>
									<a href="#"><i class="icon-droplet2"></i> <span>Color system</span></a>
									<ul>
										<li><a href="colors_primary.html">Primary palette</a></li>
										<li><a href="colors_danger.html">Danger palette</a></li>
										<li><a href="colors_success.html">Success palette</a></li>
										<li><a href="colors_warning.html">Warning palette</a></li>
										<li><a href="colors_info.html">Info palette</a></li>
										<li class="navigation-divider"></li>
										<li><a href="colors_pink.html">Pink palette</a></li>
										<li><a href="colors_violet.html">Violet palette</a></li>
										<li><a href="colors_purple.html">Purple palette</a></li>
										<li><a href="colors_indigo.html">Indigo palette</a></li>
										<li><a href="colors_blue.html">Blue palette</a></li>
										<li><a href="colors_teal.html">Teal palette</a></li>
										<li><a href="colors_green.html">Green palette</a></li>
										<li><a href="colors_orange.html">Orange palette</a></li>
										<li><a href="colors_brown.html">Brown palette</a></li>
										<li><a href="colors_grey.html">Grey palette</a></li>
										<li><a href="colors_slate.html">Slate palette</a></li>
									</ul>
								</li> -->
								<!-- <li>
									<a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
									<ul>
										<li><a href="starters/horizontal_nav.html">Horizontal navigation</a></li>
										<li><a href="starters/1_col.html">1 column</a></li>
										<li><a href="starters/2_col.html">2 columns</a></li>
										<li>
											<a href="#">3 columns</a>
											<ul>
												<li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
												<li><a href="starters/3_col_double.html">Double sidebars</a></li>
											</ul>
										</li>
										<li><a href="starters/4_col.html">4 columns</a></li>
										<li>
											<a href="#">Detached layout</a>
											<ul>
												<li><a href="starters/detached_left.html">Left sidebar</a></li>
												<li><a href="starters/detached_right.html">Right sidebar</a></li>
												<li><a href="starters/detached_sticky.html">Sticky sidebar</a></li>
											</ul>
										</li>
										<li><a href="starters/layout_boxed.html">Boxed layout</a></li>
										<li class="navigation-divider"></li>
										<li><a href="starters/layout_navbar_fixed_main.html">Fixed main navbar</a></li>
										<li><a href="starters/layout_navbar_fixed_secondary.html">Fixed secondary navbar</a></li>
										<li><a href="starters/layout_navbar_fixed_both.html">Both navbars fixed</a></li>
										<li><a href="starters/layout_fixed.html">Fixed layout</a></li>
									</ul>
								</li> -->
								<!-- <li><a href="changelog.html"><i class="icon-list-unordered"></i> <span>Changelog <span class="label bg-blue-400">1.4</span></span></a></li>
								<li><a href="../../RTL/index.html"><i class="icon-width"></i> <span>RTL version</span></a></li> -->
								<!-- /main -->

								<!-- Forms -->
								<!-- <li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li> -->
								<!-- <li>
									<a href="#"><i class="icon-pencil3"></i> <span>Form components</span></a>
									<ul>
										<li><a href="form_inputs_basic.html">Basic inputs</a></li>
										<li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
										<li><a href="form_input_groups.html">Input groups</a></li>
										<li><a href="form_controls_extended.html">Extended controls</a></li>
										<li><a href="form_floating_labels.html">Floating labels</a></li>
										<li>
											<a href="#">Selects</a>
											<ul>
												<li><a href="form_select2.html">Select2 selects</a></li>
												<li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
												<li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
												<li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
											</ul>
										</li>
										<li><a href="form_tag_inputs.html">Tag inputs</a></li>
										<li><a href="form_dual_listboxes.html">Dual Listboxes</a></li>
										<li><a href="form_editable.html">Editable forms</a></li>
										<li><a href="form_validation.html">Validation</a></li>
										<li><a href="form_inputs_grid.html">Inputs grid</a></li>
									</ul>
								</li> -->


								<li>
									<a href="#"><i class="icon-upload"></i> <span>File uploaders</span></a>
									<ul>
										<li><a href="uploader_plupload.html">Plupload</a></li>
										<li><a href="uploader_bootstrap.html">Bootstrap file uploader</a></li>
										<li><a href="uploader_dropzone.html">Dropzone</a></li>
									</ul>
								</li>
								
								<li>
									<a href="#"><i class="icon-grid7"></i> <span>Data tables</span></a>
									<ul>
										<li><a href="datatable_basic.html">Basic initialization</a></li>
										<li><a href="datatable_styling.html">Basic styling</a></li>
										<li><a href="datatable_advanced.html">Advanced examples</a></li>
										<li><a href="datatable_sorting.html">Sorting options</a></li>
										<li><a href="datatable_api.html">Using API</a></li>
										<li><a href="datatable_data_sources.html">Data sources</a></li>
									</ul>
								</li>
								
								
								<li>
									<a href="#"><i class="icon-user-plus"></i> <span>Login &amp; registration</span></a>
									<ul>
										<li><a href="login_simple.html">Simple login</a></li>
										<li><a href="login_advanced.html">More login info</a></li>
										<li><a href="login_registration.html">Simple registration</a></li>
										<li><a href="login_registration_advanced.html">More registration info</a></li>
										<li><a href="login_unlock.html">Unlock user</a></li>
										<li><a href="login_password_recover.html">Reset password</a></li>
										<li><a href="login_hide_navbar.html">Hide navbar</a></li>
										<li><a href="login_transparent.html">Transparent box</a></li>
										<li><a href="login_background.html">Background option</a></li>
										<li><a href="login_validation.html">With validation</a></li>
										<li><a href="login_tabbed.html">Tabbed form</a></li>
										<li><a href="login_modals.html">Inside modals</a></li>
									</ul>
								</li>

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">


					<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-8">
							<!-- Support tickets -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Support tickets</h6>
									<div class="heading-elements">
										<button type="button" class="btn btn-link daterange-ranges heading-btn text-semibold">
											<i class="icon-calendar3 position-left"></i> <span></span> <b class="caret"></b>
										</button>
				                	</div>
								</div>

								<div class="table-responsive">
									<table class="table table-xlg text-nowrap">
										<tbody>
											<tr>
												<td class="col-md-4">
													<div class="media-left media-middle">
														<div id="tickets-status"></div>
													</div>

													<div class="media-left">
														<h5 class="text-semibold no-margin">14,327 <small class="text-success text-size-base"><i class="icon-arrow-up12"></i> (+2.9%)</small></h5>
														<span class="text-muted"><span class="status-mark border-success position-left"></span> Jun 16, 10:00 am</span>
													</div>
												</td>

												<td class="col-md-3">
													<div class="media-left media-middle">
														<a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i class="icon-alarm-add"></i></a>
													</div>

													<div class="media-left">
														<h5 class="text-semibold no-margin">
															1,132 <small class="display-block no-margin">total tickets</small>
														</h5>
													</div>
												</td>

												<td class="col-md-3">
													<div class="media-left media-middle">
														<a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i class="icon-spinner11"></i></a>
													</div>

													<div class="media-left">
														<h5 class="text-semibold no-margin">
															06:25:00 <small class="display-block no-margin">response time</small>
														</h5>
													</div>
												</td>

												<td class="text-right col-md-2">
													<a href="#" class="btn bg-teal-400"><i class="icon-statistics position-left"></i> Report</a>
												</td>
											</tr>
										</tbody>
									</table>	
								</div>

								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th style="width: 50px">Due</th>
												<th style="width: 300px;">User</th>
												<th>Description</th>
												<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
											</tr>
										</thead>
										<tbody>
											<tr class="active border-double">
												<td colspan="3">Active tickets</td>
												<td class="text-right">
													<span class="badge bg-blue">24</span>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<h6 class="no-margin">12 <small class="display-block text-size-small no-margin">hours</small></h6>
												</td>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Annabelle Doney</a>
														<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-default display-inline-block">
														<span class="text-semibold">[#1183] Workaround for OS X selects printing bug</span>
														<span class="display-block text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
													</a>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
																<li><a href="#"><i class="icon-history"></i> Full history</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a></li>
																<li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<h6 class="no-margin">16 <small class="display-block text-size-small no-margin">hours</small></h6>
												</td>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
													</div>

													<div class="media-body">
														<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
														<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-default display-inline-block">
														<span class="text-semibold">[#1249] Vertically center carousel controls</span>
														<span class="display-block text-muted">Try any carousel control and reduce the screen width below...</span>
													</a>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
																<li><a href="#"><i class="icon-history"></i> Full history</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a></li>
																<li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<h6 class="no-margin">20 <small class="display-block text-size-small no-margin">hours</small></h6>
												</td>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Robert Hauber</a>
														<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-default display-inline-block">
														<span class="text-semibold">[#1254] Inaccurate small pagination height</span>
														<span class="display-block text-muted">The height of pagination elements is not consistent with...</span>
													</a>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
																<li><a href="#"><i class="icon-history"></i> Full history</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a></li>
																<li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<h6 class="no-margin">40 <small class="display-block text-size-small no-margin">hours</small></h6>
												</td>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Dex Sponheim</a>
														<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-default display-inline-block">
														<span class="text-semibold">[#1184] Round grid column gutter operations</span>
														<span class="display-block text-muted">Left rounds up, right rounds down. should keep everything...</span>
													</a>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
																<li><a href="#"><i class="icon-history"></i> Full history</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a></li>
																<li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr class="active border-double">
												<td colspan="3">Resolved tickets</td>
												<td class="text-right">
													<span class="badge bg-success">42</span>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<i class="icon-checkmark3 text-success"></i>
												</td>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<a href="#" class="display-inline-block text-default letter-icon-title">Alan Macedo</a>
														<div class="text-muted text-size-small"><span class="status-mark border-success position-left"></span> Resolved</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-default display-inline-block">
														[#1046] Avoid some unnecessary HTML string
														<span class="display-block text-muted">Rather than building a string of HTML and then parsing it...</span>
													</a>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
																<li><a href="#"><i class="icon-history"></i> Full history</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a></li>
																<li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<i class="icon-checkmark3 text-success"></i>
												</td>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<a href="#" class="display-inline-block text-default letter-icon-title">Brett Castellano</a>
														<div class="text-muted text-size-small"><span class="status-mark border-success position-left"></span> Resolved</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-default display-inline-block">
														[#1038] Update json configuration
														<span class="display-block text-muted">The <code>files</code> property is necessary to override the files property...</span>
													</a>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
																<li><a href="#"><i class="icon-history"></i> Full history</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a></li>
																<li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<i class="icon-checkmark3 text-success"></i>
												</td>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
													</div>

													<div class="media-body">
														<a href="#" class="display-inline-block text-default">Roxanne Forbes</a>
														<div class="text-muted text-size-small"><span class="status-mark border-success position-left"></span> Resolved</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-default display-inline-block">
														[#1034] Tooltip multiple event
														<span class="display-block text-muted">Fix behavior when using tooltips and popovers that are...</span>
													</a>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
																<li><a href="#"><i class="icon-history"></i> Full history</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a></li>
																<li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr class="active border-double">
												<td colspan="3">Closed tickets</td>
												<td class="text-right">
													<span class="badge bg-danger">37</span>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<i class="icon-cross2 text-danger-400"></i>
												</td>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
													</div>

													<div class="media-body">
														<a href="#" class="display-inline-block text-default">Mitchell Sitkin</a>
														<div class="text-muted text-size-small"><span class="status-mark border-danger position-left"></span> Closed</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-default display-inline-block">
														[#1040] Account for static form controls in form group
														<span class="display-block text-muted">Resizes control label's font-size and account for the standard...</span>
													</a>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropup">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
																<li><a href="#"><i class="icon-history"></i> Full history</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-reload-alt text-blue"></i> Reopen issue</a></li>
																<li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<i class="icon-cross2 text-danger"></i>
												</td>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-brown-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<a href="#" class="display-inline-block text-default letter-icon-title">Katleen Jensen</a>
														<div class="text-muted text-size-small"><span class="status-mark border-danger position-left"></span> Closed</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-default display-inline-block">
														[#1038] Proper sizing of form control feedback
														<span class="display-block text-muted">Feedback icon sizing inside a larger/smaller form-group...</span>
													</a>
												</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropup">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
																<li><a href="#"><i class="icon-history"></i> Full history</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a></li>
																<li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /support tickets -->


							<!-- Latest posts -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Latest posts</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
			                	</div>

								<div class="panel-body">
									<div class="row">
										<div class="col-lg-6">
											<ul class="media-list content-group">
												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">Up unpacked friendly</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
							                    			<li>14 minutes ago</li>
							                    		</ul>
														The him father parish looked has sooner. Attachment frequently gay terminated son...
													</div>
												</li>

												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">It allowance prevailed</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
							                    			<li>12 days ago</li>
							                    		</ul>
														Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed...
													</div>
												</li>
											</ul>
										</div>

										<div class="col-lg-6">
											<ul class="media-list content-group">
												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">Case read they must</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
							                    			<li>20 hours ago</li>
							                    		</ul>
														On it differed repeated wandered required in. Then girl neat why yet knew rose spot...
													</div>
												</li>

												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">Too carriage attended</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
							                    			<li>2 days ago</li>
							                    		</ul>
														Marianne or husbands if at stronger ye. Considered is as middletons uncommonly...
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- /latest posts -->

						</div>
					</div>
					<!-- /dashboard content -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>

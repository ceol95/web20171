@include('back-ends.layouts.header')

	<body class="no-skin">
		@include('back-ends.modules.top-nav')

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			@include('back-ends.modules.left-nav')

			<div class="main-content">
				<div class="main-content-inner">
					<!--<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul>

						
					</div>-->
					<div class="page-content">
						@include('back-ends.modules.set-ui')
						
						@yield('pageContent')
					</div>
					
				</div>
			</div><!-- /.main-content -->


@include('back-ends.layouts.footer')
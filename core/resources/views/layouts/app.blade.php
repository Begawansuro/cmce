<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Klinik NNR</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{!! csrf_token() !!}" />
    <link rel="apple-touch-icon" href="apple-icon.png">
   <link rel="shortcut icon" href="{{asset('public/inc/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('public/inc/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('public/inc/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/inc/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/inc/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/inc/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/inc/assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
	<link rel="stylesheet" href="{{asset('public/inc/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/inc/assets/scss/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/inc/assets/css/lib/chosen/chosen.min.css')}}">
    <link href="{{asset('public/inc/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">
	@section('css')

  @show
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->
		 <aside id="left-panel" class="left-panel">
		@section('sidebar')
          @include('layouts.sidebar',['user' => Auth::User()])
      @shows
   </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>


                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('public/inc/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
								<i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                   

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')



        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

	<script src="{{asset('public/inc/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/plugins.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/main.js')}}"></script>
	

    <script src="{{asset('public/inc/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('public/inc/assets/js/lib/data-table/datatables-init.js')}}"></script>
	<script src="{{asset('public/lama/js/sweetalert2.all.js')}}"></script>
	  <script src="{{asset('public/lama/js/select2.min.js')}}"></script>
	  
	
	  @include('sweetalert::alert')
	  @section('js')

	  @show
</body>
</html>


        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{asset('inc/images/nnrWW.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('inc/images/nnr2WW.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Master File</h3><!-- /.menu-title -->
					<li class="{{ setActive(['perusahaan*']) }}">
                        <a href="{{route('perusahaan.index')}}"> <i class="menu-icon fa fa-stack-exchange"></i>Perusahaan </a>
                    </li>
					<li>
                        <a href="{{route('karyawan.index')}}"> <i class="menu-icon fa fa-user-md"></i>Dokter </a>
                    </li>
					<li>
                        <a href="{{route('pegawai.index')}}"> <i class="menu-icon fa fa-users"></i>Karyawan </a>
                    </li>

                    <h3 class="menu-title">Transaction File Medis</h3><!-- /.menu-title -->
					<li>
                        <a href="{{route('mcregister.index')}}"> <i class="menu-icon ti-ruler-pencil"></i>Form Daftar </a>
                    </li>
                    <li>
                        <a href="{{route('fisik.index')}}"> <i class="menu-icon ti-ruler-pencil"></i>Check Fisik </a>
                    </li>
					<li>
                        <a href="#"> <i class="menu-icon ti-palette"></i>Check Urine</a>
                    </li>
					<li>
                        <a href="#"> <i class="menu-icon ti-paint-bucket"></i>Check Darah </a>
                    </li>
					<li>
                        <a href="#"> <i class="menu-icon ti-signal"></i>Rongent</a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon ti-pencil-alt"></i>Resume</a>
                    </li>
					<li>
                        <a href="#"> <i class="menu-icon ti-heart-broken"></i>Spiro</a>
                    </li>
					<li>
                        <a href="#"> <i class="menu-icon ti-headphone"></i>Audio</a>
                    </li>
					
                    <h3 class="menu-title">Report File</h3><!-- /.menu-title -->
					<li>
                        <a href="#"> <i class="menu-icon fa fa-hospital-o"></i>Rekam Medis </a>
                    </li>
					
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    
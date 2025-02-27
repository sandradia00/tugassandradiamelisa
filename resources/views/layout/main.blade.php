<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo 5</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
    </head>

  <body>
     <!-- start lwh nav -->
        <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel 11</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                <a class="nav-link {{ request()->segment('1')=='' || request()->segment('1') == 'perkiraan' ? 'active' : '' }}" aria-current="page" href="{{ route('perkiraan.index') }}">
                <i class="fas fa-tachometer-alt"></i> Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') =='pegawai'  ? 'active' : '' }}" aria-current="page" href="{{ route('pegawai.index') }}">
                    <i class="fas fa-user"></i> Pegawai</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') =='periode'  ? 'active' : '' }}" aria-current="page" href="{{ route('periode.index') }}">
                    <i class="fas fa-user"></i> Periode</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') =='kelompok'  ? 'active' : '' }}" aria-current="page" href="{{ route('kelompok.index') }}">
                    <i class="fas fa-user"></i> Kelompok</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') =='jurnal'  ? 'active' : '' }}" aria-current="page" href="{{ route('jurnal.index') }}">
                    <i class="fas fa-user"></i> Jurnal Umum</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link {{ request()->segment('1') =='user'  ? 'active' : '' }}" aria-current="page" href="{{ route('user.index') }}">
                    <i class="fas fa-user"></i> User</a>
                    </li>

                <li class="nav-item">
                <a class="nav-link {{ request()->segment('1') =='jadwal'  ? 'active' : '' }}" aria-current="page" href="">
                <i class="fas fa-user"></i> Logout</a>
                </li>

            </ul>
            </div>
        </div>
        </nav>
        <!-- end lwh nav -->


        <!-- content -->
        <div class="mt-2">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <!-- end content -->

    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
<script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    });
</script>
</body>
</html>

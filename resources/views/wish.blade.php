<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>แสดงมุทิตาจิต ปี 2564 | กาญจนาภิเษกวิทยาลัย นครปฐม</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-icons.css') }}"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;700&display=swap" rel="stylesheet">

    <script src="{{ URL::asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body class="body-img">
    <nav class="bg-light py-2 shadow sticky-top">
        <ul class="nav justify-content-lg-between">
            <li class="nav-item">
                <a href="https://www.kjn.ac.th/" class="navbar-brand">
                    <img src="{{ URL::asset('img/kjnlogo_laravel.png') }}" class="ms-2" alt="logo" width="40">
                </a>
            </li>
            <li class="nav-item w-75">
                <form action="">
                    <div class="input-group">
                        <span class="input-group-text-custom"><i class="bi bi-search"></i></span>
                        <input type="search" class="form-control text-center" style="border-radius: 0rem 50rem 50rem 0rem;" placeholder="ค้นหาคำมุทิตาจิต" name="searchbar" id="searchbar">
                    </div>
                </form>
            </li>
            <li class="nav-item me-2 d-none d-lg-block">
                <a href="{{ route('home') }}"><button class="btn btn-primary"><i class="bi bi-pencil-square"></i> เขียนคำมุทิตาจิต</button></a>
            </li>
        </ul>

    </nav>
    <div class="container-fluid bg-white shadow">
        <p class="display-3 text-center p-5 mb-0 mb-lg-1">ข้อความมุทิตาจิต</p>
    </div>
    <div class="container-md rounded my-3 bg-white" style="border: 1px solid; border-color: #adb5bd;">
        <div class="row">
            <div class="col-12 d-flex" >
                <p class="ps-4 mb-0 mt-2">{{ $count }} คำมุทิตาจิต</p>
                <div class="dropdown ms-auto">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        เรียงตาม
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">ใหม่ที่สุด</a></li>
                        <li><a class="dropdown-item" href="#">เก่าที่สุด</a></li>
                        <li><a class="dropdown-item" href="#">ชื่อผู้รับ</a></li>
                    </ul>
                </div>
            </div>
            <div class="overflow-table p-0">
            @foreach ($data as $data)
            <div class="col-12 px-5 pe-3 py-2 hover-wish" style="border: 1px solid; border-width: 1px 0px 0px 0px; border-color: #adb5bd;">
                <div class="d-flex">
                <a href="/wish/{{ $data['id'] }}" class="text-truncate btn-link title h5 text-decoration-none mb-0"><p class="h5 text-truncate title font-weight-bolder">{{ $data['content'] }}&nbsp;</p></a>
                <p class="h6 badge bg-secondary fw-light rounded-pill">{{ $data['send_to'] }}</h6>
                </div>
                <small class="text-muted">โดย {{ $data['name'] }} เมื่อ {{ $data['created_at']->format('d/m/Y') }}</small>
            </div>
            @endforeach
            </div>
            
        </div>
    </div>


    <script src="{{ URL::asset('js/app.js') }}"></script>

    <script>
        // function getData(id) {
        //     const idx = $(id).attr("id");

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $.ajax({
        //         url: 'wish/' + idx,
        //         type: 'get',
        //         dataType: 'json',
        //         success: function(response) {
        //             document.getElementById('text').innerHTML = response.content;
        //             document.getElementById('name').innerHTML = response.name;
        //         },
        //         error: function(response) {
        //             document.getElementById('text').innerHTML = 'Error! try again.';
        //         }
        //     });
        // }
    </script>
</body>

</html>
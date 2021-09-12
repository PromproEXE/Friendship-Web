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
        <p class="display-3 text-center p-5 mb-0 mb-md-1">ข้อความมุทิตาจิต</p>
    </div>
    <div class="container-lg rounded my-0 my-md-3 bg-white" style="border: 1px solid; border-color: #adb5bd;">
        <div class="p-3">
            <p class="h1">จาก : {{ $data['name'] }}</p>
            <p class="h3">ถึง : {{ $data['send_to'] }}</p>
            @if ($data['img_path'] != null)
            <img src="{{ asset('/storage/'.$data->img_path) }}" class="d-flex me-auto ms-auto w-100" alt="img">
            @endif
            <div class="overflow-viewWish text-break ps-5 pt-2">
                {!! $data['content'] !!}
            </div>
        </div>
    </div>


    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>
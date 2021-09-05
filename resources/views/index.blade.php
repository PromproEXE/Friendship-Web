<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงมุทิตาจิต ปี 2564 | กาญจนาภิเษกวิทยาลัย นครปฐม</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="{{ URL::asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">

</head>

<body class="body-img">
    <div class="container-xl container-fluid">
        <div class="row vh-100">
            <div class="col-12 col-lg-7 px-0" style="background-color: gray;">
                <img src="https://via.placeholder.com/1000x1210" alt="img" class="w-100 side-img">
                <!-- <img src="{{ URL::asset('img/kjnlogo copy.png') }}" alt="logo" width="125rem" class="mt-3 ms-0"> -->
            </div>
            <div class="col-12 col-lg-5 bg-white">
                <div class="row">
                    <div class="col-12 pt-xl-5 pt-4 pe-4 d-flex justify-content-end">
                        <button type="link" class="btn btn-link"><a href="{{ route('wish') }}">ดูคำอวยพรทั้งหมด</a></button>
                    </div>
                    <div class="col-12">
                        <form action="{{ route('postToServer') }}" method="POST" enctype="multipart/form-data" class="p-4 pt-3">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-xl-3 mb-2">
                                    <p class="display-4 text-center">แสดงมุทิตาจิตเนื่องในวันเกษียณอายุราชการ</p>
                                    <!-- <p class="h6 text-muted text-center">เนื่องในวันเกษียณของอาจารย์และบุคลากรในโรงเรียน</p> -->
                                </div>
                                <div class="col-12 mb-2 text-center">
                                    <label for="" class="mb-2">โดย</label>
                                    <input type="text" class="form-control text-center @error('name') is-invalid @enderror" id="name" name="name" placeholder="นายเอ บีซีดีอี" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="incognito" id="incognito">
                                        <label class="form-check-label" for="incognito">
                                            ไม่ระบุตัวตน
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="d-flex align-items-end">
                                        <label for="send_to" class="btn ps-0 pe-0">ถึง</label>
                                        <select class="ms-2 form-select @error('send_to') is-invalid @enderror" id="send_to" name="send_to">
                                            <option selected disabled>. . .</option>
                                            <option value="wanwipa" {{ old('send_to') == 'wanwipa' ? 'selected' : '' }}>อาจารย์วรรณวิภา พฤฒิภากร</option>
                                            <option value="thanu" {{ old('send_to') == 'thanu' ? 'selected' : '' }}>อาจารย์ธนู อยู่สำราญ</option>
                                            <option value="prissana" {{ old('send_to') == 'prissana' ? 'selected' : '' }}>อาจารย์ปริศนา เสลาคุณ</option>
                                            <option value="patchara" {{ old('send_to') == 'patchara' ? 'selected' : '' }}>นางพัชรา ศรีทองคำ</option>
                                            <option value="all" {{ old('send_to') == 'all' ? 'selected' : '' }}>ทุกท่านที่เกษียณ</option>
                                        </select>
                                        
                                        <!-- <button type="button" class="btn btn-primary ms-auto" id="btn-write" name="mode" value="1">เขียน</button>
                                        <button type="button" class="btn btn-outline-primary" id="btn-image" name="mode" value="2">เขียน + ภาพ</button> -->
                                    </div>
                                    @error('send_to')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                                </div>
                                
                                <div class="col-12 mb-2">
                                    <textarea class="form-control @error('content') is-invalid @enderror" id="exampleFormControlTextarea1" rows="7" name="content" placeholder="เขียนข้อความตรงนี้">{{ old('content') }}</textarea>
                                    @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <button type="submit" class="btn btn-warning rounded-pill w-100">ส่งคำอวยพร</button>
                                </div>
                                <div class="col-12 mt-lg-0 mt-5 mt-xl-4">
                                    <p class="text-muted text-center mb-0">DEVELOPE BY <a href="" class="text-muted">STUDENT COUNCIL 64</a></p>
                                    <p class="text-muted text-center">Copyright © all rights reserved</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>
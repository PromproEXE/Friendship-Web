<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เรียงร้อยถ้อยวลีแสดงมุทิตาจิต เนื่องในโอกาสเกษียณอายุราชการ</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="{{ URL::asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">

    <script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
</head>

<body class="body-img">
    <div class="container-xl container-fluid" id="container">
        <div class="row vh-100">
            <div class="col-12 col-lg-7 px-0" id="col1">
                <div id="sideIMG" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ URL::asset('img/Wanwipa.jpg') }}" class="d-block w-100" alt="Wanwipa">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('img/Thanu.jpg') }}" class="d-block w-100" alt="Thanu">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('img/Prissana.jpg') }}" class="d-block w-100" alt="Prissana">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('img/Patchara.jpg') }}" class="d-block w-100" alt="Patchara">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#sideIMG" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#sideIMG" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- <img src="{{ URL::asset('img/kjnlogo_laravel.png') }}" alt="logo" width="125rem" class="mt-3 ms-0 float-start"> -->
            </div>
            <div class="col-12 col-lg-5 bg-white" id="col2">
                <div class="row">
                    <div class="col-12 pt-xl-5 pt-4 pe-4 d-flex justify-content-end">
                        <button type="link" class="btn btn-link"><a href="{{ route('wish') }}">ดูคำอวยพรทั้งหมด</a></button>
                    </div>
                    <div class="col-12">
                        <form action="{{ route('postToServer') }}" method="POST" enctype="multipart/form-data" class="p-4 pt-3" onsubmit="getPlainText();">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-xl-3 mb-2">
                                    <p class="display-5 text-center">เรียงร้อยถ้อยวลีแสดงมุทิตาจิต เนื่องในโอกาสเกษียณอายุราชการ</p>
                                    <p class="text-muted text-center">โรงเรียนกาญจนาภิเษกวิทยาลัย นครปฐม</p>
                                    <!-- <p class="h6 text-muted text-center">เนื่องในวันเกษียณของอาจารย์และบุคลากรในโรงเรียน</p> -->
                                </div>
                                <div class="col-12 mb-2 text-center">
                                    <label for="" class="mb-2">โดย</label>
                                    <input type="text" class="form-control text-center @error('name') is-invalid @enderror" id="name" name="name" placeholder="นายเอ บีซีดีอี" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="text" name="preview_content" id="preview">
                                <script>
                                    $('#preview').hide();
                                </script>
                                <div class="col-12 mb-2">
                                    <div class="d-flex align-items-end">
                                        <label for="send_to" class="btn ps-0 pe-0">ถึง</label>
                                        <select class="ms-2 form-select @error('send_to') is-invalid @enderror" id="send_to" name="send_to">
                                            <option selected disabled>. . .</option>
                                            <option value="" {{ old('send_to') == 'wanwipa' ? 'selected' : '' }}>อาจารย์วรรณวิภา พฤฒิภากร</option>
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
                                    <!-- <div class="overflow-textarea @error('content') is-invalid @enderror"> -->
                                    <textarea class="form-control @error('content') is-invalid @enderror" id="exampleFormControlTextarea1" rows="4" name="content" placeholder="เขียนข้อความตรงนี้">{{ old('content') }}</textarea>

                                    <!-- <textarea id="editor" class="form-control @error('content') is-invalid @enderror" name="content" placeholder="เขียนตรงนี้">{{ old('content') }}</textarea> -->
                                    <!-- </div> -->

                                    @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-2">
                                        <label for="" class="ps-0 pe-0 mb-1">แนบรูป (ไม่จำเป็น)</label>
                                        <input class="form-control" type="file" id="formFile" name="image">
                                    @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="col-12 mb-3">
                                    <button type="submit" class="btn btn-warning rounded-pill w-100">ส่งคำอวยพร</button>
                                </div>
                                <div class="col-12 mt-lg-0 mt-5 mt-xl-4">
                                    <p class="text-muted text-center mb-0">DEVELOPE BY <a href="https://www.kjn.ac.th/%e0%b8%84%e0%b8%93%e0%b8%b0%e0%b8%81%e0%b8%a3%e0%b8%a3%e0%b8%a1%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%99%e0%b8%b1%e0%b8%81%e0%b9%80%e0%b8%a3%e0%b8%b5%e0%b8%a2%e0%b8%99" class="text-muted">STUDENT COUNCIL 64</a></p>
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
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>อวยพรอาจารย์</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="{{ URL::asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
</head>

<body>
    <!-- <a href='https://www.freepik.com/vectors/background'>Background vector created by pikisuperstar - www.freepik.com</a> -->
    <div class="container bg-white">
        <div class="row vh-100">
            <div class="col-7" style="background-color: gray;">
                <img src="{{ URL::asset('img/S__107257872.jpg') }}" alt="img" class="w-100">
            </div>
            <div class="col-5 d-flex align-items-center">
                <form action="" method="POST" class="p-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <p class="display-2 text-center">อวยพรอาจารย์</p>
                            <p class="h6 text-muted text-center">เนื่องด้วยวันเกษียณของอาจารย์และบุคลากรในโรงเรียน</p>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="d-flex align-items-end">
                                <label for="send-to" class="btn ps-0 pe-0 pb-0">ถึง</label>
                                <button type="button" class="btn btn-primary ms-auto" id="btn-write" aria-expanded="#write">เขียน</button>
                                <button type="button" class="btn btn-primary" id="btn-draw" aria-expanded="#drawer">วาดภาพ</button>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <select class="form-select" aria-label="Default select example" id="send-to" name="send-to">
                                <option selected disabled>. . .</option>
                                <option value="wanwipa">อาจารย์วรรณวิภา พฤฒิภากร</option>
                                <option value="thanu">อาจารย์ธนู อยู่สำราญ</option>
                                <option value="prissana">อาจารย์ปริศนา เสลาคุณ</option>
                                <option value="patchara">นางพัชรา ศรีทองคำ</option>
                                <option value="all">ทุกคน</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="เขียนข้อความตรงนี้"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary ms-auto rounded-pill">ส่งเลย</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
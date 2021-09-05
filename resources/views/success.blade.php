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
    <link rel="stylesheet" href="{{ URL::asset('css/animation.css') }}">
</head>

<body>
    <div class="main-container">
        <div class="check-container">
            <div class="check-background">
                <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="check-shadow"></div>
        </div>
        <p class="display-3 pt-2 text-center px-3">บันทึกข้อมูลสำเร็จ</p>
        <p class="h5 text-muted text-center px-3">หน้าเว็บจะย้อนกลับให้อัตโนมัติภายใน <span id="countdown"></span> วินาที ถ้าไม่กด<a href="{{ route('home') }}" class="text-muted">ที่นี่</a></p>
    </div>
    
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script>
         // Total seconds to wait
    var seconds = 5;
    
    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            // Chnage your redirection link here
            window.location = "{{ route('home') }}";
        } else {
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;
            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }
    }
    
    // Run countdown function
    countdown();
    </script>
</body>

</html>
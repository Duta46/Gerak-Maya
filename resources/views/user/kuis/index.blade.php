<!DOCTYPE html>
<html>
<head>
    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/gm.png') }}" type="image/x-icon" />
    <title>Gerak Maya | Simulasi Fisika</title>

    <!-- Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Hamburger -->
    {{-- <link rel="stylesheet" href="dist/css/hamburgers.css" /> --}}
    <link rel="stylesheet" href="{{ asset('dist/css/hamburgers.css') }}">

    <!-- CSS -->
    {{-- <link rel="stylesheet" href="quiz/quiz.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/quiz.css') }}">
</head>

<div class="radio-input">
  <div class="info">
  <span class="question">What does CSS stand for?</span>
  <span class="steps">3/10</span>
   </div>
  <input type="radio" id="value-1" name="value-radio" value="value-1">
  <label for="value-1">Computer Style Sheets</label>
  <input type="radio" id="value-2" name="value-radio" value="value-2">
  <label for="value-2">Cascading Style Sheets</label>
  <input type="radio" id="value-3" name="value-radio" value="value-3">
  <label for="value-3">Creative Style Sheets</label>
   <span class="result success">Congratulations!</span>
   <span class="result error">Bad answer</span>
</div>

    <!-- JS -->
    {{-- <script src="quiz/quiz.js"></script> --}}
    <script src="{{ asset('assets/js/quiz.js') }}"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <!-- Icon -->
    {{-- <link rel="shortcut icon" href="assets/icon/gm.png" type="image/x-icon" /> --}}
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
    <link rel="stylesheet" href="dist/css/hamburgers.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="two/custom.css" />
</head>
<body>

    <!-- todo navbar -->
    <div class="navbar">
      <div class="container">
        <div class="navbar-box">
          <div class="logo-container">
            <img src="assets/icon/gm2.png" alt="Logo" class="logo">
            <span class="logo-text">GERAK MAYA</span>
          </div>
          <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="#simulasi">Simulasi</a></li>
            <li><a href="quiz.html">Quiz</a></li>
          </ul>


          <button class="hamburger hamburger--spin" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
    </div>
    <!-- todo navbar -->

    <!-- todo header -->
     <div class="header" id="simulasi">
      <div class="content">
        <h1>Hukum Newton</h1>
        <hr>
        <div class="row">
          <div class='two col'><div class='text-center'><img src='assets/img/newton.png' class='responsive expand'></div></div>
      <div class='ten col'>
      <p>Dimulai dengan <a href='https://id.wikipedia.org/wiki/Hukum_gerak_Newton'>Hukum Gerak Newton</a>. Hukum Newton secara garis besar mendefinisikan apa itu gaya, dan bagaimana gaya tersebut memengaruhi benda, hukum tersebut menjadi dasar bagi mekanika klasik. <br>
        <br>Mengutip Hukum Pertamanya: <em>“Sebuah benda yang diam akan tetap diam, kecuali ada gaya luar yang mempengaruhinya. Sebuah benda yang bergerak akan tetap bergerak, dengan kecepatan konstan, dan dalam arah yang sama, kecuali ada gaya luar yang mempengaruhinya”.</em></p>
      </div>
        </div>

      <div class='text'><em>Kecuali ada gaya yang bekerja padanya, suatu benda akan terus melakukan apa yang sedang dilakukan!</em></div>

      <div class="row">
        <div class='two col'><div class='text-center'><img src='assets/img/graph.png' class='responsive expand'></div></div>
    <div class='ten col'>
    <p>Hukum Newton diterapkan pada benda yang dianggap sebagai partikel, dalam evaluasi pergerakan misalnya, panjang benda tidak dihiraukan, karena objek yang dihitung dapat dianggap kecil, relatif terhadap jarak yang ditempuh. <br>
      <br>Di sebelah kiri merupakan sebuah partikel. Partikel tersebut akan tetap disana dan tidak bergerak karena tidak ada gaya yang bekerja padanya. Kita dapat mengidentifikasi posisinya (dalam 2D) menggunakan sepasang koordinat yang mencatat perpindahannya dari titik asal yang tetap. Namun bagaimana dengan benda yang bergerak …</p>
    </div>
      </div>

        <p>Di bawah ini adalah simulasi partikel yang bergerak hanya dalam satu dimensi (klik Mulai untuk menganimasikan).</p>

        <div id="simulasi-container"></div>
        <script src="apel_jatuh/p5.js"></script>
        <script src="apel_jatuh/p5.sound.min.js"></script>
        <link rel="stylesheet" type="text/css" href="two/custom.css">
        <meta charset="utf-8" />

      </head>
      <body>
        <main>
        </main>
        <script src="two/sketch.js"></script>
      </body>



      </div>
     </div>
    <!-- todo header -->




    <!-- JS -->
    <script src="two/sketch.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>

<!DOCTYPE HTML>
<!--
  Dimension by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Kuala Samboja - Portal Website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css')}}" />
    <noscript><link rel="stylesheet" href="{{ asset('frontend/assets/css/noscript.css')}}" /></noscript>
    <link rel="shortcut icon" href="{{ asset('frontend/logo/logo.png') }}">
  </head>
  <body class="is-preload">

    <!-- Wrapper -->
      <div id="wrapper">

        <!-- Header -->
          <header id="header">
            <div class="icon">
              <img src="{{ asset('frontend/logo/logo.png') }}" class="icon" style="height: 120px; width: 140px;">
            </div>
            <div class="content">
              <div class="inner">
                <h1>Kuala Samboja</h1>
                <p>Kelurahan Kuala Samboja Adalah Itu Sudah<br />
                Jangan Lupa Mampir Untuk membuat Surat Pengantar Kelurahan.</p>
              </div>
            </div>
            <nav>
              <ul>
                <li><a href="{{ url('beranda') }}">Home</a></li>
                <li><a href="{{ route('user.pemerintahan') }}">Pemerintahan</a></li>
                <li><a href="{{ route('user.pembangunan') }}">Pembangunan</a></li>
                <li><a href="{{ route('user.sosial') }}">Sosial</a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
              </ul>
            </nav>
          </header>

        <!-- Footer -->
          <footer id="footer">
            <p class="copyright">&copy; Kuala Samboja 2020.</p>
            <ul class="icons">
                  <li><a href="#" class="icon brands fa-google"><span class="label">Twitter</span></a></li>
                  <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                  <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                  <li><a href="#" class="icon brands fa-youtube"><span class="label">GitHub</span></a></li>
                </ul>
          </footer>
      </div>

    <!-- BG -->
      <div id="bg"></div>

    <!-- Scripts -->
      <script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/browser.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/breakpoints.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/util.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

  </body>
</html>

<head>
    <link rel="stylesheet" href="{{asset('css/custom_nav.css')}}">
</head>

<body>
  <nav class="navbarr" style="z-index: 2">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Sistem Pendukung Keputusan</label>
    <label class="mini_logo"> Metode Profile Matching</label>
    <ul>
        <li><a style="text-decoration: none;" href="/home">Home</a></li>
        <li><a style="text-decoration: none;" href="/AboutUs">About</a></li>
        <li><a style="text-decoration: none;" href="/Metode_perhitungan">Metode Perhitungan</a></li>
        <li>
          <div class="dropdown1">
            <button class="dropbtn1">
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content1">
              <a class="" href="/profile/{{auth()->user()->name}}/user">Profile</a>
              <a class="" href="{{route('logout')}}">Logout</a>
            </div>
          </div>
        </li>
    </ul>
  </nav>

  {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  <script>
    gsap.from(".navbarr", {duration: 1.5, opacity:0 ,y: -200, ease: "bounce"});
  </script>  --}}
</body>



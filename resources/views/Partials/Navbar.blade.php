<head>
    <link rel="stylesheet" href="{{asset('css/custom_nav.css')}}">
</head>

    <nav style="z-index: 2">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Sistem Pendukung Keputusan</label>
        <label class="mini_logo"> Metode Profile Matching</label>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/AboutUs">About</a></li>
            <li><a href="/Metode_perhitungan">Metode Perhitungan</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
      </nav>


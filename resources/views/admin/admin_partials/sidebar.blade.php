<head>
    <link rel="stylesheet" href="{{asset('css/custom_admin.css')}}">
</head>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
	<div class="main_body">
		
		<div class="sidebar_menu">
	        <div class="inner__sidebar_menu">
	        	
	        	<ul>
		          <li>
		            <a href="/dashboard">
		              <span class="icon">
		              	<i class="fas fa-border-all"></i></span>
		              <span class="list">User</span>
		            </a>
		          </li>
		          <li>
		            <a href="/matakuliah_wajib" class="icon">
		              <span class="icon"><i class="fas fa-chart-pie"></i></span>
		              <span class="list">Matakuliah Wajib</span>
		            </a>
		          </li>
		          <li>
		            <a href="/matakuliah_pilihan">
		              <span class="icon"><i class="fas fa-address-book"></i></span>
		              <span class="list">Matakuliah Pilihan</span>
		            </a>
		          </li>
		        </ul>

		        <div class="hamburger">
			        <div class="inner_hamburger">
			            <span class="arrow">
			                <i class="fas fa-long-arrow-alt-left"></i>
			                <i class="fas fa-long-arrow-alt-right"></i>
			            </span>
			        </div>
			    </div>

	        </div>
	    </div>

	    <div class="container">
	    	@yield('admin_content')
	    </div>
	</div>
</div>


<script>
  $(".hamburger").click(function(){
    $(".wrapper").toggleClass("active")
  })
</script>
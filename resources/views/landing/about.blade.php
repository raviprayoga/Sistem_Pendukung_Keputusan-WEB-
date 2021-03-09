<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        .item1 { grid-area: card1; }
        .item2 { grid-area: card2; }    
        
        /* Home */
        .back_home{
            z-index: -1;
            top: 0px;
            position: absolute;
            width: 100%;
            background-size: cover;
            min-height: 1120px;
        }
        
        .label{
            text-align: center;
            margin: 30%;
            margin-bottom: 15%;
        }
        .home{
            font-size: 40px;
            padding: 15%;
            font-family: Arial;
            font-weight: 700;
            color: #197278;
        
        }
        .btn_nilai{
            background-color: #00B3CA;
            width: 120px;
            height: 50px;
            border: none;
            border-radius: 8px;
            color: #ffffff;
            font-family: Arial;
            font-size: 16px;
            font-weight: 700;
        }
        
        /* About */
        .back_about{
            font-family: "Roboto", sans-serif;
            position: absolute;
            z-index: -1;
            background: transparent;
            width: 100%;
            min-height: 1000px;
            margin-top: -100px;
            text-align: center;
        }
        .grid-container{
            display: grid;
            grid-template-areas:
            'card1 card2';
            grid-gap: 20px;
            background-color: transparent;
            padding: 20px;
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
        }
        .grid-container > div {
            background-color: #ffffff;
            border-radius: 0px;
            text-align: center;
            padding: 20px 0;
          }
          .grid-container > div:hover {
            background-color: #00b3ca;
            border-radius: 5px;
            text-align: center;
            padding: 20px 0;
            color: #ffffff;
          }
        .about{
            text-align: center;
            margin-top: 12px;
        }
        .judul_about{
            font-size: 30px;
            font-weight: 400;
            font-family: Arial;
        }
        .desk_about{
            font-size: 20px;
            font-family: Arial;
            font-weight: 300;
            margin: 20px;
            text-align: justify;
        }
        
        @media (max-width: 1076px){
            /* home */
            .label{
                text-align: center;
            }
            .home{
                font-size: 35px;
                margin-top: 80px;
                font-family: Arial;
                font-weight: 700;
                color: #197278;
            
            }
            
            /* About */
            .grid-container{
                display: grid;
                grid-template-areas:
                'card1 card2';
                grid-gap: 20px;
                background-color: #e6e8e6;
                padding: 10px;
                width: 100%;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 30px;
            }
            .grid-container > div {
                background-color: #ffffff;
                border-radius: 0px;
                text-align: center;
                padding: 20px 0;
                height: 100%;
              }
              .grid-container > div:hover {
                background-color: #00b3ca;
                border-radius: 5px;
                text-align: center;
                padding: 20px 0;
                color: #ffffff;
                height: 100%;
              }
            .about{
                text-align: center;
                margin-top: 12px;
            }
            .judul_about{
                font-size: 30px;
                font-weight: 400;
                font-family: Arial;
            }
            .desk_about{
                visibility: visible;
                font-size: 20px;
                font-family: Arial;
                font-weight: 300;
                margin: 12px;
                text-align: justify ;
            }
        }
        
        @media (max-width: 571px){
            /* home */
            .label{
                text-align: center;
            }
            .home{
                font-size: 35px;
                margin-top: 80px;
                font-family: Arial;
                font-weight: 700;
                color: #197278;
            
            }
        
            /* about */
            .grid-container{
                display: grid;
                grid-template-areas:
                'card1 card2';
                grid-gap: 20px;
                background-color: #e6e8e6;
                padding: 10px;
                width: 50%;
                margin-left: 15%;
                margin-right: 25%;
                margin-top: 30px;
            }
            .grid-container > div {
                background-color: #ffffff;
                border-radius: 0px;
                text-align: center;
                padding: 90px 0;
                height: 290px;
              }
              .grid-container > div:hover {
                background-color: #00b3ca;
                border-radius: 5px;
                text-align: center;
                padding: 90px 0;
                color: #ffffff;
                height: 290px;
              }
            .about{
                text-align: center;
                margin-top: 12px;
            }
            .judul_about{
                font-size: 30px;
                font-weight: 400;
                font-family: Arial;
            }
            .desk_about{
                visibility: hidden;
                font-size: 20px;
                font-family: Arial;
                font-weight: 300;
                margin: 12px;
                text-align: left;
            }
        }

        {{--  nav  --}}
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
          }
          body{
            font-family: Arial;
          }
          nav{
            background: #00b3ca;
            height: 80px;
            width: 95%;
            margin-top: 20px;
            margin-left: 40px;
            margin-right: 40px;
            border-radius: 8px;
          }
          label.logo{
            color: white;
            font-size: 30px;
            line-height: 70px;
            padding-top: 3vw;
            margin-left: 43px;
            font-weight: 400;
          }
          .mini_logo{
            color: white;
            font-size: 15px;
            padding: 0;
            position: absolute;
            left: 0px;
            margin-left: 85px;
            margin-top: 50px;
            font-weight: 400;
          }
          nav ul{
            float: right;
            margin-right: 20px;
          }
          nav ul li{
            display: inline-block;
            line-height: 90px;
            margin: 0 5px;
          }
          nav ul li a{
            color: white;
            font-size: 17px;
            padding: 7px 13px;
            border-radius: 3px;
            text-transform: uppercase;
          }
          a.active,a:hover{
            background: #1b9bff;
            transition: .5s;
          }
          .checkbtn{
            font-size: 30px;
            color: white;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
          }
          #check{
            display: none;
          }
        
        
          @media (max-width: 1076px){
            .checkbtn{
              display: block;
              line-height: 80px;
            }
            nav{
              background: #00b3ca;
              height: 80px;
              width: 95%;
              margin-top: 20px;
              margin-left: 20px;
              border-radius: 8px;
            }
            .mini_logo{
              color: white;
              font-size: 15px;
              padding: 0;
              position: absolute;
              left: 0px;
              margin-left: 65px;
              margin-top: 50px;
              font-weight: 400;
            }
            ul{
              position: fixed;
              z-index: 2;
              width: 100%;
              height: 100vh;
              background: #197278;
              top: 105px;
              left: -100%;
              text-align: center;
              transition: all .5s;
            }
            nav ul li{
              display: block;
              margin: 50px 0;
              line-height: 30px;
            }
            nav ul li a{
              font-size: 20px;
            }
            a:hover,a.active{
              background: none;
              color: #ff9f66;
            }
            #check:checked ~ ul{
              left: 0;
            }
          }
          
        
          @media (max-width: 571px){
            .checkbtn{
              display: block;
              line-height: 80px;
            }
            nav{
              background: #00b3ca;
              height: 80px;
              width: 95%;
              margin-top: 20px;
              margin-left: 13px;
              border-radius: 8px;
            }
            ul{
              position: fixed;
              width: 100%;
              z-index: 2;
              height: 100vh;
              background: #197278;
              top: 105px;
              left: -100%;
              text-align: center;
              transition: all .5s;
            }
            nav ul li{
              display: block;
              margin: 50px 0;
              line-height: 30px;
            }
            nav ul li a{
              font-size: 20px;
            }
            label.logo{
                color: white;
                font-size: 25px;
                line-height: 70px;
                padding-top: 3vw;
                font-weight: 400;
              }
              .mini_logo{
                color: white;
                font-size: 15px;
                padding: 0;
                position: absolute;
                left: 0px;
                margin-left: 58px;
                margin-top: 45px;
                font-weight: 400;
              }
            a:hover,a.active{
              background: none;
              color: #ff9f66;
            }
            #check:checked ~ ul{
              left: 0;
            }
          }
    </style>
          

</head>
<body>
    <nav style="z-index: 2">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Sistem Pendukung Keputusan</label>
        <label class="mini_logo"> Metode Profile Matching</label>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/metode">Metode Perhitungan</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
      </nav>
      <img class="back_about" src="{{asset('assets/images/back_home.jpg')}}" alt="Card image cap">
        <div class="grid-container">
            <div class="item1">
                <label class="judul_about">Sistem Pendukung Keputusan</label>
                <p class="desk_about">Sistem pendukung keputusan merupakan suatu sistem interaktif yang mendukung keputusan dalam proses pengambilan keputusan melalui alternatif-aleternatif
                    yang diperoleh dari hasil pengolahan data, informasi, dan rancangan model. Sistem pendukung keputusan merupakan penggabungan sumber-sumber kecerdasan individu dengan kemampuan
                    komponen untuk memperbaiki kualitas keputusan. Sistem pendukung keputusan juga merupakan sistem informasi berbasis komputer untuk manajemen pengambilan keputusan  yang 
                    menangani masalah-masalah semi struktur.Sistem Pendukung Keputusan mendayagunakan resources individu-individu secara intelek dengan kemampuan komputer untuk meningkatkan 
                    kualitas keputusan. Jadi ini merupakan sistem pendukung yang berbasis komputer untuk manajemen pengambilan keputusan yang berhubungan dengan masalah-masalah yang semi 
                    terstruktur.Sistem pendukung keputusan menunjukan sebagai sebuah sistem yang mendukung para pengambil keputusan untuk memperluas kapabilitas mereka, namun tidak untuk
                    menggantikan penilaian mereka. Sistem pendukung keputusan merupakan sistem informasi interaktif yang menyediakan informasi, pemodelan dan manipulasi data. Sistem itu
                    digunakan untuk membantu pengambilan keputusan dalam situasi yang semiterstruktural dan situasi yang tidak terstruktur, dimana tak seorang pun tahu secara pasti bagaimana 
                    keputusan seharusnya dibuat. </p>
            </div>
            <div class="item2">
                <label class="judul_about">Profile Matching</label>
                <p class="desk_about">Pencocokan profil (profile matching) adalah sebuah mekanisme pengambilan keputusan dengan cara mengasumsikan variabel prediktor ideal yang harus dimiliki 
                    oleh mahasiswa, bukannya tingkat minimal yang harus dipenuhi atau dilewati. Dalam proses  pencocokan profil secara  garis  besar  merupakan  proses  membandingkan antara 
                    kompetensi individu ke dalam kompetensi profil sehingga  dapat  diketahui  perbedaan  kompetensinya (disebut  juga  Gap). </p>
            </div>
        </div>
</body>
</html>
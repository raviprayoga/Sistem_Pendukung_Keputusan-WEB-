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
      .teks1{
        margin-left: 38%;
        font-weight: bold;
        font-family: 'Segoe UI';
        color: #197278;
        margin-top: 25%;
      }

      /* Home */
      .back_home{
          z-index: -1;
          top: 0px;
          position: absolute;
          width: 100%;
          background-size: cover;
          min-height: 1020px;
      }
      
      .label{
          text-align: center;
          margin: 30%;
          margin-bottom: 15%;
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
        nav{
          background: #00b3ca;
          height: 80px;
          width: 95%;
          margin-top: 20px;
          margin-left: 2.5%;
          border-radius: 5px;
          font-family: Arial, Helvetica, sans-serif;
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
          margin-left: 90px;
          margin-top: 50px;
          font-weight: 400;
        }
        nav ul{
          float: right;
          margin-right: 10px;
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
      <label class="logo">Sistem Pendukung Keputusan</label>
      <label class="mini_logo"> Metode Profile Matching</label>
      <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/metode">Metode Perhitungan</a></li>
          <li><a href="/login">Login</a></li>
      </ul>
    </nav>
      <img class="back_home" src="{{asset('assets/images/landing.png')}}" alt="">
      <div class="teks1">
        <p style="font-size: 40px">Sistem Pendukung Keputusan</p>
        <p style="font-size: 30px">Pemilihan Matakuliah Pilihan Program Studi Teknik Informatika</p>
        <p style="font-size: 26px">Institut Teknologi Sumatera</p>
      </div>
  </body>
</html>

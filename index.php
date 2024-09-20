  <!doctype html>
  <html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/final.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="src/output.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
      * {
        margin: 0;
        padding: 0;
      }

      /* .hide{
        transition: 10s;
      } */


      /* START LANDING PAGE  */

      #lp-mount-r,
      #count-mount2{
        opacity:0;
        transform: translateX(70%);
      }
      #lp-mount-r.show-animate,
      #count-mount2.show-animate{
        opacity:1;
        transform: translateX(0%);
      }

      #lp-mount-l,
      #count-mount1,
      #count-mount3{
        opacity:0;
        transform: translateX(-70%);
      }
      #lp-mount-l.show-animate,
      #count-mount1.show-animate,
      #count-mount3.show-animate{
        opacity:1;
        transform: translateX(0%);
      }


      #lp-clouds,
      #count-clouds{
        transform: translateX(90%);
      }
      #lp-clouds.show-animate,
      #count-clouds.show-animate{
        transform: translateX(0);
      }

      /* END LANDING PAGE  */

      #cd-1,
      #cd-2,
      #cd-3,
      #cd-4{
        transform: translateX(170%);
        opacity: 0;
      }
      #cd-1.show-animate,
      #cd-2.show-animate,
      #cd-3.show-animate,
      #cd-4.show-animate{
        opacity: 1;
        transform: translateX(0%);
      }


      #lp-rumah-gadang,
      #lp-title,
      #lp-sun{
        transform: translateY(60%); 
        opacity: 0;
      }
      #lp-rumah-gadang.show-animate,
      #lp-title.show-animate,
      #lp-sun.show-animate{
        transform: translateY(0);
        opacity: 1;
      }

      #count-jam-gadang{
        transform: translateY(80%); 
        opacity: 0;
      }
      #count-jam-gadang.show-animate{
        transform: translateY(0);
        opacity: 1;
      }



      /* START COUNT LAYER 1 */
      #count-layer1,
      #count-layer2,
      #count-layer3,
      #lp-layer1,
      #lp-layer2,
      #lp-layer3{
        transform: translateY(50%);
        opacity: 0;
      }
      #count-layer1.show-animate,
      #count-layer2.show-animate,
      #count-layer3.show-animate,
      #lp-layer1.show-animate,
      #lp-layer2.show-animate,
      #lp-layer3.show-animate{
        transform: translateY(0);
        opacity: 1;
      }
      /* END COUNT LAYER 1 */


      #home-rectangle{
        transform: translateY(50%);
      }
      #home-rectangle.show-animate{
        transform: translateY(0%);
      }


      #home-photo{
        transform: translateY(70%);
        opacity: 0;
      }
      #home-photo.show-animate{
        transform: translateY(0);
        opacity: 1;
      }

      #homeTitle,
      #count-title{
        transform: scale(0.1); 
      }

      #homeTitle.show-animate,
      #count-title.show-animate{
        transform: scale(1); 
      }
      #home-line-top,
      #home-line-bottom {
        opacity: 0;
      }
      #home-line-top.show-animate,
      #home-line-bottom.show-animate {
        opacity: 1;
      }


      #bng-groom-photo{
        opacity: 0;
        transform: translateX(80%);
      }
      #bng-groom-photo.show-animate{
        opacity: 1;
        transform: translateX(0%);
      }


      .akad-container{
        background-image: url(./src/assets/akad-bg.svg);
        background-size: cover;
      }

      #akad-ellips1{
        transform: scale(0.1)
      }
      #akad-ellips1.show-animate{
        transform: scale(2);
      }

    #akad-title {
    position: absolute; /* Untuk memungkinkan elemen diposisikan relatif ke kontainer */
    top: 50%; /* Mulai dari tengah secara vertikal */
    left: 50%; /* Mulai dari tengah secara horizontal */
    transform: translate(-50%, -50%) scale(0.1); /* Mulai dari skala kecil */
    transition: transform 3s ease-in-out; /* Transisi untuk scale */
  }

  #akad-title.show-animate {
    transform: translate(-50%, -50%) scale(2); /* Membesar menjadi scale(2) */
  }

  #akad-title.animate-move {
    top: 0; /* Pindah ke bagian atas halaman */
    left: 50%; /* Tetap di tengah horizontal */
    transform: translate(-50%, 0) scale(1); /* Kembali ke skala normal saat bergerak ke atas */
    transition: top 3s ease-in-out, transform 3s ease-in-out; /* Transisi untuk posisi dan skala */
  }

  @keyframes Move {
    0% {
      top: 50%; /* Mulai dari tengah */
      transform: translate(-50%, -50%) scale(2); /* Membesar */
    }
    100% {
      top: 0; /* Pindah ke atas */
      transform: translate(-50%, 0) scale(1); /* Kembali ke skala normal */
    }
  }

  .akad-bg{
    width: 100%;
    height: 100vh;
  }

  .akad-main{
    height: 100%;
    width: 100%;
    opacity: 0;
    transform: scale(0);
  }
  .akad-main.show-animate{
    opacity: 1;
    transform:scale(1);
  }

  #akad-location{
    opacity: 0;
    transform: scale(0);
  }
  #akad-location.show-animate{
    opacity: 1;
    transform: scale(1);
  }

  input, select{
    border: 2px solid #AE7F41;
  }





  .slider{
      /* background-color:grey; */  
      position: relative;
      margin-top: 20px;
      margin-bottom: 30px;
      width: 100%;
      height: 50vh;
      overflow: hidden;
      z-index:10;
      display:flex;
      justify-content:center;
      align-items:center;
  }
  .item{
      /* background-color:#fff; */
      position: absolute;
      width: 60%;
      transition:  0.5s;
  }
  .item img{
      width:100%;
  }









  /* START SLIDER B */
  .sliderB-container{
    /* width: min(1200px, 90vw); */
    margin: auto;
    height: 30vh;
  }

  .sliderB{
      width: 100%;
      height: var(--height);
      overflow: hidden;
      mask-image: linear-gradient(
          to right,
          transparent,
          #000 10% 90%,
          transparent
      );
  }
  .sliderB .list{
      display: flex;
      width: 100%;
      min-width: calc(var(--width) * var(--quantity));
      position: relative;
  }
  .sliderB .list .item{
      width: var(--width);
      height: var(--height);
      position: absolute;
      left: 100%;
      animation: autoRun 60s linear infinite;
      transition: filter 0.5s;
      animation-delay: calc( (60s / var(--quantity)) * (var(--position) - 1) - 60s)!important;
  }
  .sliderB .list .item img{
      width: 100%;
  }
  @keyframes autoRun{
      from{
          left: 100%;
      }to{
          left: calc(var(--width) * -1);
      }
  }
  .sliderB:hover .item{
      animation-play-state: paused!important;
      filter: grayscale(1);
  }
  .sliderB .item:hover{
      filter: grayscale(0);
  }
  .sliderB[reverse="true"] .item{
      animation: reversePlay 60s linear infinite;
  }
  @keyframes reversePlay{
      from{
          left: calc(var(--width) * -1);
      }to{
          left: 100%;
      }
  }
  /* END SLIDER B */







  /* START BNG */
  #bng-shadow-bride {
    transform: translateX(0%) translateY(0%) rotate(0deg);
  }

  #bng-profile-bride,
  #bng-name-bride {
    transform: translateX(0%) translateY(0%) rotate(0deg);
  }

  #bng-shadow-bride.show-animate {
    transform: translateX(-5%) translateY(-4%) rotate(-4deg);
  }

  #bng-profile-bride.show-animate,
  #bng-name-bride.show-animate {
    transform: translateX(5%) translateY(4%) rotate(-4deg);
  }



  #bng-shadow-groom {
    transform: translateX(0%) translateY(0%) rotate(0deg);
  }

  #bng-profile-groom,
  #bng-name-groom {
    transform: translateX(0%) translateY(0%) rotate(0deg);
  }

  #bng-shadow-groom.show-animate {
    transform: translateX(5%) translateY(-4%) rotate(4deg);
  }

  #bng-profile-groom.show-animate,
  #bng-name-groom.show-animate {
    transform: translateX(-5%) translateY(4%) rotate(4deg);
  }

  /* END BNG */


  #rsvp-form{
    background-color: none;
    height: 100%;
    backdrop-filter: blur(0px);
  }

  #rsvp-form.show-animate{
    background-color: #37373773;
    height: 100%;
    backdrop-filter: blur(10px);
  }


  #rsvp-title,
  #rsvp-main-form{
    transform: scale(0);
  }
  #rsvp-title.show-animate,
  #rsvp-main-form.show-animate{
    transform: scale(1);
  }


  #wishes{
    /* background-color:lightblue; */
    width:100%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    color:#ffffff;
    font-family: 'Lato', sans-serif;
    letter-spacing: 0.2px;
  }

  .wish{
    background-color:#7A4200;
    width: 80%;
    margin-bottom:1.25rem;
    padding: 10px 20px 10px 20px;
    border-radius: 5px;
  }
  .sender-wish{
    display:flex;
    font-size:2vh;
  }
  .date{
    margin-left:10px;
    color:#A4754B;
  }
  .pesan {
    overflow-wrap: break-word; /* Untuk CSS modern */
    font-size:2.5vh;
  }





  .modal {
      display: none;
      position: fixed;
      z-index: 25; /* Sit on top */
      /* left: 0; */
      top: 0;
      /* width: 100%;  */
      height: 100vh; /* Full height */
      overflow: auto;
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: #fefefe;
      padding: 20px;
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
      text-align: center;
    }

    .close-button {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close-button:hover,
    .close-button:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    #close-modal-button{
      background-color: #AE7F41;
      margin-top: 10px;
      padding: 5px 0px;
      width: 100%;
      border-radius: 5px;
      color: white;
    }

    .disabled {
        background-color: #e0e0e0;
        cursor: not-allowed;
      }
    </style>
  </head>
  <body class="w-[100%] lg:w-1/4 mx-auto block justify-center items-center ">

      <!-- START LANDING PAGE -->
      <div class="overflow-hidden bg-gradient-to-b from-customBrown to-customBrownLight relative flex justify-center h-[100vh] w-[100%]  ">

        <!-- TOP DIV-->
        <!-- <div class="overflow-hidden  h-[20vh]">
        </div> -->
        
        <!-- BOTTOM DIV -->
        <!-- <div class=" relative flex justify-center h-[100vh] w-[100%] ">         -->
          <img id="lp-clouds" src="./src/assets/lp-clouds.svg" alt="" class="hide duration-[3000ms] absolute top-0">
          <img id="lp-sun" src="./src/assets/lp-sun.svg" alt="" class="hide duration-[6000ms] absolute bottom-0 lg:w-1/6">
          <img id="lp-mount-l" src="./src/assets/lp-mount-l.svg" alt="" class="hide duration-[4000ms] delay-[1000ms] absolute bottom-0  lg:w-full">
          <img id="lp-title" src="./src/assets/lp-title.svg" alt="" class="hide absolute duration-[5000ms] delay-[2000ms] bottom-0 delay-4000 lg:w-full">
          <img id="lp-mount-r" src="./src/assets/lp-mount-r.svg" alt="" class="hide duration-[4000ms] delay-[600ms] absolute bottom-0 right-0 lg:w-full">
          <img id="lp-rumah-gadang" src="./src/assets/lp-rumah-gadang.svg" alt="" class="hide absolute duration-[5000ms] bottom-0 lg:w-full">
          <img id="lp-layer3" src="./src/assets/lp-layer3.svg" alt="" class="hide absolute duration-[3000ms] bottom-0 lg:w-full">
          <img id="lp-layer2" src="./src/assets/lp-layer2.svg" alt="" class="hide absolute duration-[2000ms] bottom-0 lg:w-full">
          <img id="lp-layer1" src="./src/assets/lp-layer1.svg" alt="" class="hide absolute duration-[1000ms] bottom-0 lg:w-full">
          <div id="to-guest">
              <p class="browntext">Kepada Yth:</p>
              <p class="browntext">Bapak/Ibu/Saudara/i</p>
              <p id="guestName" class="maintext"></p>
          </div>
          <button id="open-invite" class="bg-gradient-to-r from-[#AE7F41] to-[#48351B] text-white px-7 py-3 rounded-3xl absolute bottom-40 flex items-center space-x-2 "> 
            <img src="./src/assets/lp-icon-email.svg" alt=""> 
            <span class="text-white">Buka Undangan </span>
          </button>
        <!-- </div> -->
      
      </div>
      <!-- END LANDING PAGE -->

      <!-- START HOME -->
      <div id="home-section" class="bg-gradient-to-b from-custom7A4200 to-customF4DDC0 h-[100vh] relative lg:w-full ">
        <img src="./src/assets/home-batik.svg" alt="" class="absolute top-0">
        <img id="home-photo" src="./src/assets/home-photo.svg" alt="" class="hide duration-[2000ms] absolute bottom-0">
        <!-- <img src="./src/assets/home-layer-bottom.svg" alt="" class="absolute bottom-0"> -->
        <img id="home-rectangle" src="./src/assets/home-rectangle.svg" alt="" class="hide duration-[1000ms] absolute bottom-0">
        <img id="home-line-top" src="./src/assets/home-line-top.svg" alt="" class="hide duration-[5000ms] delay-[3000ms] absolute bottom-0">
        <img id="home-line-bottom" src="./src/assets/home-line-bottom.svg" alt="" class="hide duration-[5000ms] delay-[3000ms] absolute bottom-0">
        <img id='homeTitle' src="./src/assets/home-title.svg" alt="" class="hide duration-[3000ms] absolute bottom-0">
      </div>
      <!-- END HOME -->

      <!-- START COUNTDOWN -->
      <div class="overflow-hidden bg-gradient-to-b from-customF4DDC0 to-customFBD120 h-[100vh] relative lg:w-full">
        <img id="count-clouds" src="./src/assets/lp-clouds.svg" alt="" class="hide duration-[3000ms] absolute top-0">   
        <img id="count-mount3" src="./src/assets/home-mount-layer3.svg" alt="" class="hide duration-[5000ms] absolute bottom-0 ">
        <img id="count-mount2" src="./src/assets/home-mount-layer2.svg" alt="" class="hide duration-[4000ms] absolute bottom-0 ">
        <img id="count-mount1" src="./src/assets/home-mount-layer1.svg" alt="" class="hide duration-[4000ms] absolute bottom-0 ">
        <img id="count-layer3" src="./src/assets/lp-layer3.svg" alt="" class="hide duration-[3000ms] absolute bottom-0">
        <img id="count-layer2" src="./src/assets/lp-layer2.svg" alt="" class="hide duration-[2000ms] absolute bottom-0">
        <img id="count-jam-gadang" src="./src/assets/home-jam-gadang.svg" alt="" class="hide duration-[6000ms] absolute bottom-0  ">
        <img id="count-layer1" src="./src/assets/lp-layer1.svg" alt="" class="hide duration-[1000ms] absolute bottom-0 ">
        
        <div class="h-[30vh] absolute top-20 w-full">

          <img id="count-title" src="./src/assets/countdown-title.svg" alt="" class="hide duration-[2000ms] delay-2000">

          <div class="overflow-x-hidden flex justify-center gap-2 w-[100%] text-customF4DDC0">
            <div id="cd-1" class="hide duration-[600ms] delay-[100ms] text-center w-[15%]">
              <p id="days" class="bg-custom4C3D3D text-4xl rounded-md py-4"></p>
              <span class="text-custom4C3D3D">Day(s)</span>
            </div>
            <div id="cd-2" class="hide duration-[600ms] delay-[300ms] text-center w-[15%]">
              <p id="hours" class="bg-custom4C3D3D text-4xl rounded-md py-4"></p>
              <span class="text-custom4C3D3D">Hours</span>
            </div>
            <div id="cd-3" class="hide duration-[600ms] delay-[500ms] text-center w-[15%]">
              <p id="minutes" class="bg-custom4C3D3D text-4xl rounded-md py-4"></p>
              <span class="text-custom4C3D3D">Minutes</span>
            </div>
            <div id="cd-4" class="hide duration-[600ms] delay-[700ms] text-center w-[15%]">
              <p id="seconds" class="bg-custom4C3D3D text-4xl rounded-md py-4"></p>
              <span class="text-custom4C3D3D">Seconds</span>
            </div>
          </div>

        </div>

      </div>
      <!-- END COUNTDOWN -->

      <!-- START BRIDE AND GROOM -->
      <div class="overflow-hidden bg-customF4DDC0 relative h-[200vh] w-full  lg:w-full ">
        <div class=" h-[28vh] relative">
          <img src="./src/assets/bng-top.svg" alt="" class="absolute top-0 w-full">
          <img src="./src/assets/bng-title.svg" alt="" class="absolute top-0 w-full">
        </div>
        <div class=" relative w-full h-[70vh] overflow-hidden">
          <div class="relative h-full w-full flex justify-center items-center">
            <img id="bng-shadow-bride" src="./src/assets/bng-bride-shadow.svg" alt="" class="hide duration-[3000ms] absolute h-[85%] max-w-[80%] ">
            <img id="bng-profile-bride" src="./src/assets/bng-bride-profile.svg" alt="" class="hide duration-[3000ms] absolute h-[85%] max-w-[80%] ">
            <img id="bng-name-bride" src="./src/assets/bng-bride-name.svg" alt="" class="hide duration-[3000ms] absolute h-[85%] max-w-[80%] ">
          </div>
        </div>
        <div class=" h-[5vh] relative flex justify-center items-center">
          <img src="./src/assets/icon-and.svg" alt="" class="absolute h-[90%]">
        </div>
        <div class=" relative w-full h-[70vh] overflow-hidden">
          <div class="relative h-full w-full flex justify-center items-center">
            <img id="bng-shadow-groom" src="./src/assets/bng-bride-shadow.svg" alt="" class="hide duration-[3000ms] absolute h-[85%] max-w-[80%] ">
            <img id="bng-profile-groom" src="./src/assets/bng-bride-profile.svg" alt="" class="hide duration-[3000ms] absolute h-[85%] max-w-[80%] ">
            <img id="bng-name-groom" src="./src/assets/bng-bride-name.svg" alt="" class="hide duration-[3000ms] absolute h-[85%] max-w-[80%] ">
          </div>
        </div>
        <div class="h-[28vh] relative " >
          <img src="./src/assets/bng-bottom.svg" alt="" class="absolute bottom-0">
        </div>
      </div>
      <!-- END BRIDE AND GROOM -->
        
      <!-- START GALLERY -->
      <div class="slider-container h-[150vh] bg-gradient-to-b from-custom7A4200 to-[#944F00] relative z-20">

        <div class="h-[25vh] ">
          <img src="./src/assets/gallery-top.svg" alt="">
          <img src="./src/assets/gallery-title.svg" alt="">
        </div>

        <!-- START SLIDER-A -->
        <div class="slider z-30 ">
          <div class="item">
            <img src="./src/assets/gallery-sampleA1.svg" alt="">
          </div>
          <div class="item">
            <img src="./src/assets/gallery-sampleA2.svg" alt="">
          </div>
          <div class="item">
            <img src="./src/assets/gallery-sampleA3.svg" alt="">
          </div>
          <div class="item">
            <img src="./src/assets/gallery-sampleA4.svg" alt="">
          </div>
          <div class="item">
            <img src="./src/assets/gallery-sampleA5.svg" alt="">
          </div>
          <div class="item">
            <img src="./src/assets/gallery-sampleA6.svg" alt="">
          </div>
        </div>
        <!-- END SLIDER-A -->

        <!-- START SLIDER-B -->
        <div class="sliderB-container  ">
          <div class="sliderB" style="
          --width: 250px;
          --height: 100%;
          --quantity: 6; ">
          
            <div class="list">
                <div class="item" style="--position: 1"><img src="./src/assets/gallery-sampleB1.svg" alt=""></div>
                <div class="item" style="--position: 2"><img src="./src/assets/gallery-sampleB2.svg" alt=""></div>
                <div class="item" style="--position: 3"><img src="./src/assets/gallery-sampleB3.svg" alt=""></div>
                <div class="item" style="--position: 4"><img src="./src/assets/gallery-sampleB4.svg" alt=""></div>
                <div class="item" style="--position: 5"><img src="./src/assets/gallery-sampleB5.svg" alt=""></div>
                <div class="item" style="--position: 6"><img src="./src/assets/gallery-sampleB6.svg" alt=""></div>
            </div>
          </div>
        </div>
        <!-- END SLIDER-B -->

        <img src="./src/assets/gallery-bottom.svg" alt="" class="w-full">
      </div>
      <!-- END GALLERY -->

      <!-- START RESEPSI -->
      <div class="akad-container overflow-hidden relative w-full h-[100vh] flex justify-center flex-col items-center z-10">
        <!-- <img src="./src/assets/akad-bg.svg" alt="" class="akad-bg absolute z-1"> -->
        <img src="./src/assets/akad-gantungan.svg" alt="" class="absolute top-0 z-16">
        <img src="./src/assets/akad-flower.svg" alt="" class="absolute bottom-0 z-10">
        <img id="akad-ellips1" src="./src/assets/akad-ellips1.svg" alt="" class="overflow-x-hidden hide duration-[3000ms] absolute z-15">
        <div class=" h-[60vh] w-full relative ">
          <div class=" h-[5%] w-full">
            <img id="akad-title" src="./src/assets/akad-title.svg" alt="" class="hide">
          </div>
          <div class=" h-[80%] w-full relative ">
            <img id="akad-main" src="./src/assets/akad-main.svg" alt="" class="akad-main hide duration-[3000ms] delay-[5000ms] absolute top-0 block mr-auto ml-auto">
          </div>
          <div class=" absolute bottom-[-5vh] flex justify-center h-[15%] w-full   ">
            <button id="akad-location" class="hide duration-[3000ms] delay-[5000ms] bg-gradient-to-r from-[#AE7F41] to-[#48351B] text-white h-[6vh] px-7 py-0 m-0 p-0  rounded-3xl "> 
              <span class="text-white">Buka Google Maps</span>
            </button>
          </div>
        </div>
      </div>
      <!-- END RESEPSI -->



      <!-- START AKAD -->
      <div class="akad-container overflow-hidden relative w-full h-[100vh] flex justify-center flex-col items-center z-10">
        <!-- <img src="./src/assets/akad-bg.svg" alt="" class="akad-bg absolute z-1"> -->
        <img src="./src/assets/akad-gantungan.svg" alt="" class="absolute top-0 z-16">
        <img src="./src/assets/akad-flower.svg" alt="" class="absolute bottom-0 z-10">
        <img id="akad-ellips1" src="./src/assets/akad-ellips1.svg" alt="" class="overflow-x-hidden hide duration-[3000ms] absolute z-15">
        <div class=" h-[60vh] w-full relative ">
          <div class=" h-[5%] w-full">
            <img id="akad-title" src="./src/assets/akad-title.svg" alt="" class="hide">
          </div>
          <div class=" h-[80%] w-full relative ">
            <img id="akad-main" src="./src/assets/akad-main.svg" alt="" class="akad-main hide duration-[3000ms] delay-[5000ms] absolute top-0 block mr-auto ml-auto">
          </div>
          <div class=" absolute bottom-[-5vh] flex justify-center h-[15%] w-full   ">
            <button id="akad-location" class="hide duration-[3000ms] delay-[5000ms] bg-gradient-to-r from-[#AE7F41] to-[#48351B] text-white h-[6vh] px-7 py-0 m-0 p-0  rounded-3xl "> 
              <span class="text-white">Buka Google Maps</span>
            </button>
          </div>
        </div>
      </div>
      <!-- END AKAD -->


      <!-- START RSVP -->
      <div class="rsvp-container overflow-hidden bg-gradient-to-b from-customF4DDC0 to-customFBD120 h-[100vh] w-full relative lg:w-full ">
        <div id="rsvp-form" class="hide duration-[4000ms] delay-[5000ms] z-10 w-full absolute top-0 ">
          <img src="./src/assets/rsvp-top.svg" alt="" class="hide duration-[3000ms]">   
          <img id="rsvp-title" src="./src/assets/rsvp-title.svg" alt="" class="hide duration-[4000ms] delay-[5000ms] mb-5 mt-10">
          <div id="rsvp-main-form" class="hide duration-[4000ms] delay-[5000ms] w-[100%] z-20">
            <form method="post" action="https://script.google.com/macros/s/AKfycbws48uvKHrJT4qxqquCX4VD0jwnXs2S4BkclTVXQHHFHfGH1jkjIN4fMfqPmfHxYw5s/exec" class="" id="my-form">
              <div class="form-group flex justify-center mb-5">
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required class="w-[60%] px-2 py-2 rounded-lg ">
              </div>
              <div class="form-group  flex justify-center mb-5">
                <select id="konfirmasi" name="konfirmasi" required class="w-[60%] h-[100%] px-2 py-2 rounded-lg">
                  <option value="" disabled selected class="disable">Konfirmasi</option>
                  <option value="Hadir">Hadir</option>
                  <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
              </div>
              <div class="form-group  flex justify-center mb-5">
                <input type="number" id="jumlah" name="jumlah" placeholder="Jumlah" min="1" max="5" required class="w-[60%] px-2 py-2 rounded-lg">
              </div>
              <div class=" flex justify-center">
                <button type="submit" class="submit-btn w-[30%] py-2 rounded-lg bg-custom7A4200 text-white">Kirim</button>
              </div>
            </form>
          </div>
        </div>
        <img id="rsvp-clouds" src="./src/assets/lp-clouds.svg" alt="" class="hide duration-[3000ms] absolute top-0 z-5">   
        <img id="lp-rumah-gadang" src="./src/assets/lp-rumah-gadang.svg" alt="" class="hide absolute duration-[5000ms] bottom-0 lg:w-full">
        <img id="lp-layer3" src="./src/assets/lp-layer3.svg" alt="" class="hide absolute duration-[3000ms] bottom-0 lg:w-full">
        <img id="lp-layer2" src="./src/assets/lp-layer2.svg" alt="" class="hide absolute duration-[2000ms] bottom-0 lg:w-full">
        <img id="lp-layer1" src="./src/assets/lp-layer1.svg" alt="" class="hide absolute duration-[1000ms] bottom-0 lg:w-full">
        <img src="./src/assets/rsvp-bottom.svg" alt="" class="absolute bottom-0 z-20">
      </div>

      <div id="my-modal" class="modal w-[100%] lg:w-1/4 mx-auto justify-center items-center">
        <div class="modal-content">
          <!-- <span class="close-button">&times;</span> -->
          <p>Terima kasih, data anda sudah tersimpan</p>
          <button id="close-modal-button">Tutup</button>
        </div>
      </div>



      
      <!-- END RSVP -->

      <!-- START WEDDING WISHES -->
      <div id="wishes-container" class="overflow-hidden bg-gradient-to-b from-customF4DDC0 to-[#F3DB76] h-[300vh] w-full relative lg:w-full">
        <div class="h-[28vh] relative">
          <img src="./src/assets/wishes-top.svg" alt="" class="absolute top-0 w-full">
          <img src="./src/assets/wishes-title.svg" alt="" class="absolute top-0 w-full">
        </div>
        <div class=" w-[100%] z-20" id="gradient4">
          <form method="post" action="submit_wishes.php" class=" mt-5 mb-5" id="my-form">
              <div class="form-group flex justify-center mb-5">
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required class="w-[60%] px-2 py-2 rounded-lg ">
              </div>
              <div class="form-group flex justify-center mb-5">
                <textarea id="pesan" name="pesan" rows="4" cols="50" placeholder="Ucapkan sesuatu" required class="w-[60%] px-2 py-2 rounded-lg "></textarea>
              </div>
              <div class=" flex justify-center">
                <button type="submit" class="submit-btn w-[30%] py-2 rounded-lg bg-custom7A4200 text-white">Kirim</button>
              </div>
          </form>
          <div id="wishes">
              <?php include 'display_wishes.php'; ?>
          </div>
        </div>
      </div>
      <!-- END WEDDING WISHES -->



      <script>
          const params = new URLSearchParams(window.location.search);
          const guestName = params.get('name');
          const guestNameElement = document.getElementById('guestName');

          if (guestName) {
              guestNameElement.textContent = guestName;
          } else {
              guestNameElement.textContent = 'Tamu Undangan';
          }
      </script>

    <script>
        document.getElementById('wishForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form dari submit yang sebenarnya

            // Ambil nilai dari form
            const name = document.getElementById('name').value;
            const wish = document.getElementById('wish').value;
            const date = new Date().toLocaleString(); // Dapatkan tanggal dan waktu sekarang

            // Buat elemen list untuk menampilkan data
            const wishesList = document.getElementById('wishesList');
            const listItem = document.createElement('li');
            listItem.textContent = `Nama: ${name}, Harapan: ${wish}, Tanggal: ${date}`;
            
            // Tambahkan item ke dalam list
            wishesList.appendChild(listItem);

            // Kosongkan input setelah submit
            document.getElementById('name').value = '';
            document.getElementById('wish').value = '';
        });
    </script>
      
      <script type="text/javascript">

  let items = document.querySelectorAll('.slider .item');
  let active = 1;
  let isTransitioning = false; // Flag to prevent fast transitions

  // console.log(itemsArray);

  function loadShow() {
      items[active].style.transform = `none`;
      items[active].style.zIndex = 1;
      items[active].style.filter = 'none';
      items[active].style.opacity = 1;
      
      let stt = 0;
      for (var i = active + 1; i < items.length; i++) {
          stt++;
          items[i].style.transform = `translateX(${70 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
          items[i].style.zIndex = -stt;
          items[i].style.filter = 'blur(5px)';
          items[i].style.opacity = stt > 2 ? 0 : 0.6;
      }
      
      stt = 0;
      for (var i = active - 1; i >= 0; i--) {
          stt++;
          items[i].style.transform = `translateX(${-70 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
          items[i].style.zIndex = -stt;
          items[i].style.filter = 'blur(5px)';
          items[i].style.opacity = stt > 2 ? 0 : 0.6;
      }
  }

  loadShow();

  // Function to move to the next slide
  function autoSlide() {
      if (isTransitioning) return; // Prevent rapid transitions
      isTransitioning = true;

      // Move to the next slide
      active = active + 1;

      // If we go beyond the last slide, add a timeout to simulate the continuous transition
      if (active >= items.length) {
          active = 0;
          setTimeout(() => {
              items.forEach(item => {
                  item.style.transition = 'none'; // Disable transition momentarily
              });
              loadShow(); // Reset to the first slide instantly
              setTimeout(() => {
                  items.forEach(item => {
                      item.style.transition = ''; // Re-enable transition
                  });
                  isTransitioning = false; // Allow sliding again
              }, 50); // Small delay to ensure the transition is reset
          }, 500); // Delay before resetting back to first slide to simulate transition
      } 
      else {
          loadShow();
          setTimeout(() => {
              isTransitioning = false;
          }, 500); // Duration should match the CSS transition time
      }
  }

  // Set interval to move the slide every 3 seconds
  setInterval(autoSlide, 2000);






  document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
      root: null, // viewport
      rootMargin: '0px',
      threshold: 0.1 // 10% dari elemen harus terlihat
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Tambahkan kelas 'show-animate' saat elemen terlihat di viewport
          entry.target.classList.add('show-animate');

          // Jika elemen yang terlihat adalah #akad-title, tambahkan animasi perpindahan dengan delay
          if (entry.target.id === 'akad-title') {
            setTimeout(() => {
              entry.target.classList.add('animate-move');
              entry.target.classList.remove('show-animate');
            }, 4000); // 4 detik setelah 'show-animate' selesai
          }
        } 
        // else { 
        //   entry.target.classList.remove('show-animate'); 
        // }
      });
    }, observerOptions);

    // Mengamati setiap elemen dengan kelas 'hide'
    document.querySelectorAll('.hide').forEach(element => {
      observer.observe(element);
    });
  });















        // START COUNTDOWN
        var countdownDate = new Date('Oct 10, 2024 00:00:00').getTime();

        var x = setInterval(function(){
          var now       = new Date().getTime();
          var distance  = countdownDate - now;
          var d = Math.floor(distance / (1000 * 60 * 60 * 24));
          var h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var s = Math.floor((distance % (1000 * 60)) / 1000);

          document.getElementById("days").innerHTML = d;
          document.getElementById("hours").innerHTML = h;
          document.getElementById("minutes").innerHTML = m;
          document.getElementById("seconds").innerHTML = s;

          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000)
        // END COUNTDOWN 
      </script>

      <!-- START RSVP -->
      <script>
        window.addEventListener("load", function() {
          const form = document.getElementById('my-form');
          const modal = document.getElementById('my-modal');
          // const closeButton = document.querySelector('.close-button');
          const closeModalButton = document.getElementById('close-modal-button');
      
          form.addEventListener("submit", function(e) {
            e.preventDefault();
            const data = new FormData(form);
            const action = e.target.action;
            fetch(action, {
              method: 'POST',
              body: data,
            })
            .then(() => {
              modal.style.display = "flex"; // Show the modal
            })
          });
      
          // Close the modal when the user clicks on the close button or close button
          // closeButton.onclick = function() {
          //   modal.style.display = "none";
          // }
      
          closeModalButton.onclick = function() {
            modal.style.display = "none";
          }
      
          // Close the modal when the user clicks anywhere outside of the modal
          window.onclick = function(event) {
            if (event.target === modal) {
              modal.style.display = "none";
            }
          }
        });
      </script>
      
      <!-- END RSVP -->



      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const konfirmasiSelect = document.getElementById('konfirmasi');
          const jumlahInput = document.getElementById('jumlah');
          
          function handleKonfirmasiChange() {
            if (konfirmasiSelect.value === 'Tidak Hadir') {
              jumlahInput.disabled = true;
              jumlahInput.classList.add('disabled');
              jumlahInput.value = ''; // Optionally clear the value
            } else {
              jumlahInput.disabled = false;
              jumlahInput.classList.remove('disabled');
            }
          }
          
          konfirmasiSelect.addEventListener('change', handleKonfirmasiChange);
          
          // Initialize the state on page load
          handleKonfirmasiChange();
        });
      </script>
  </body>

  </html>
  <!-- <div class="mx-auto lg:w-1/3 bg-red-600 " >

  </div> -->








  <!-- document.addEventListener('DOMContentLoaded', () => {
    //   const observer = new IntersectionObserver((entries) => {
    //     entries.forEach((entry) => {
    //       if (entry.isIntersecting) {
    //         // Elemen berada di viewport
    //         entry.target.classList.add('animate-slide-up');
    //         // entry.target.classList.remove('opacity-0');
    //       } else {
    //         // Elemen keluar dari viewport
    //         entry.target.classList.add('animate-slide-out-down');
    //         // entry.target.classList.remove('opacity-1');
    //       }
    //     });
    //   }, {
    //     threshold: 1 // Atur threshold di sini
    //   });
    
    //   // Mengamati setiap elemen dengan kelas 'hide'
    //   document.querySelectorAll('.hide').forEach((element) => {
    //     observer.observe(element);
    //   });
    // }); -->







  <!-- 
    // document.getElementById("full-screen").addEventListener("click", function(e) {			  
      // 	toggleFullScreen();			 
      // }, false);
      
      // function toggleFullScreen() {
      //   if (!document.fullscreenElement) {
      // 	  document.documentElement.requestFullscreen();
      //   } else {
      // 	if (document.exitFullscreen) {
      // 	  document.exitFullscreen(); 
      // 	}
      //   }
      // } -->



      <!-- <div class=" relative flex justify-center h-[80vh] w-[100%] ">
        <img src="./src/assets/lp-sun.svg" alt="" class="absolute bottom-0 animate-slide-up-4s delay-4000 lg:w-1/6">
        <img src="./src/assets/lp-mount-l.svg" alt="" class="absolute bottom-0 animate-slide-up delay-4000 lg:w-full">
        <img src="./src/assets/lp-title.svg" alt="" class="absolute bottom-0 animate-slide-up-5s delay-4000 lg:w-full">
        <img src="./src/assets/lp-mount-r.svg" alt="" class="absolute bottom-0 animate-slide-up delay-4000 lg:w-full">
        <img src="./src/assets/lp-rumah-gadang.svg" alt="" class="absolute bottom-0 animate-slide-up delay-4000 lg:w-full">
        <img src="./src/assets/lp-layer3.svg" alt="" class="absolute bottom-0 animate-slide-up delay-1300 lg:w-full">
        <img src="./src/assets/lp-layer2.svg" alt="" class="absolute bottom-0 animate-slide-up delay-1000 lg:w-full">
        <img src="./src/assets/lp-layer1.svg" alt="" class="absolute bottom-0 animate-slide-up delay-700 lg:w-full">
        <button  id="open-invite" class="bg-gradient-to-r from-[#AE7F41] to-[#48351B] text-white px-7 py-3 rounded-3xl absolute bottom-40 flex items-center space-x-2 "> 
          <img src="./src/assets/lp-icon-email.svg" alt=""> 
          <span class="text-white">Buka Undangan</span>
        </button>
      </div> -->




      <!-- /* @keyframes fadeInRightToLeft {
        0% {
            opacity: 0; 
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 0%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
        }
        10% {
            opacity: 0.1; 
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 10%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
        }
        20% {
            opacity: 0.2;
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, 1) 20%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
        }
        30% {
            opacity: 0.3; 
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 1) 30%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
        }
        40% {
            opacity: 0.4; 
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 1) 40%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
        }
        50% {
            opacity: 0.5; 
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 1) 50%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
        }
        60% {
            opacity: 0.6; 
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 1) 60%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
        }
        70% {
            opacity: 0.7; 
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 1) 70%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
        }
        80% {
            opacity: 0.8; 
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 70%, rgba(0, 0, 0, 1) 80%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
        }
        90% {
            opacity: 0.9; 
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 80%, rgba(0, 0, 0, 1) 90%);
            -webkit-mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
        }
        100% {
            opacity: 1;
        }
    }
    
    #home-line-top.show-animate{
      animation: fadeInRightToLeft 5s ease forwards;
    } */ -->






    <!-- <div class="z-20 overflow-hidden relative w-[100%] bg-custom7A4200 lg:w-full">
      <div class="flex justify-center gap-2 bg-custom7A4200">
        <img src="./src/assets/icon-gadang.svg" alt="">
        <img src="./src/assets/bng-title.svg" alt="">
        <img src="./src/assets/icon-gadang.svg" alt="">
      </div>
      <div class="overflow-x-hidden relative w-full">
        <img id="bng-groom-photo" src="./src/assets/bng-groom.svg" alt="" class="hide duration-[1000ms] delay-[500ms] w-full ">
        <img src="./src/assets/bng-layer-left.svg" alt="" class="opacity-1  absolute top-0 w-full ">
      </div>
      <div class="relative w-full">
        <img src="./src/assets/bng-bride.svg" alt="" class=" w-full ">
        <img src="./src/assets/bng-layer-right.svg" alt="" class="absolute top-0 w-full ">
      </div>
    </div> -->
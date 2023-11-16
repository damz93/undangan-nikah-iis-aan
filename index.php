
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iis & Aan Wedding | By Dedy A M</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Pacifico&family=Sacramento&family=Work+Sans:wght@100;400;600;700&display=swap"
    rel="stylesheet">

  <!-- simplyCountdown -->
  <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css" />
  <script src="countdown/simplyCountdown.min.js"></script>

  <!-- boostrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="style.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Patrick+Hand&display=swap" rel="stylesheet">
</head>

<body>
<?php
  error_reporting(0);
  $nama = $_GET['to'];
  if ($nama == ''){
    $nama = 'Teman-teman';
  }
?>
  <section id="hero"
    class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
    <main>
      <h4>The Wedding of</h4>
      <h1>Iis & Aan</h1>
      <p>14.12.2023</p>
      <p>
        Akan melangsungkan resepsi pernikahan dalam:
      </p>
      <div class="simply-countdown">

      </div>      
      <p>Kepada YTH: <?php echo $nama; ?></p>
      <a href="#home" onClick="enablescroll()" class="btn btn-lg mt-4">Lihat Undangan</a>

    </main>
  </section>


  <nav class="navbar navbar-expand-md sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="#">Iis & Aan</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Iis & Aan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#home">Home</a>
            <a class="nav-link" href="#info">Info</a>
            <!-- <a class="nav-link" href="#story">Story</a>
            <a class="nav-link" href="#galery">Galery</a> -->
            <a class="nav-link" href="#rsvp">Saying</a>
            <a class="nav-link" href="#gifts">Gifts</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section id="home" class="home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <h2>Acara Pernikahan</h2>
          <p class="m-3 justify-content-center">
          Kami dengan penuh hormat mengundang Bapak/Ibu/Saudara(i) untuk hadir dalam pernikahan kami yang akan diselenggarakan pada Hari Kamis 14 Desember 2023 di Makassar, Sulawesi Selatan.<br> Semoga kehadiran Anda menjadi bagian dari upaya kami dalam mengikuti Sunnah Rasul dalam membentuk keluarga yang penuh ketenangan, cinta, dan rahmat. Kami berharap Allah SWT memberkati pernikahan kami dan menggabungkan kasih sayang di antara putra-putri kami. <br>Terima kasih atas kehadiran dan doa restu Anda.
          </p>
        </div>

      </div>


      <div class="row couple">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-8 text-end">
            <h3>Ismiranti idris, A.Md.Par.</h3>
              
              <p style="font-size: 2rem;">Anak pertama dari,<br>Bapak Muh. Idris H. Supu & Ibu Irnawati Majid</p>
            </div>
            <div class="col-4">
              <img src="img/wm.png" alt="iis" class="img-responsive rounded-circle">
            </div>
          </div>
        </div>
        <span class="heart"><i class="bi bi-heart-fill"></i></span>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-4">
              <img src="img/m.png" alt="aan" class="img-responsive rounded-circle">
            </div>
            <div class="col-8 text-start">
              <h3>Aan Abdullah</h3>            
              <p style="font-size: 2rem;">Anak pertama dari,<br>Bapak Abd. Asis & Ibu Hartati</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="info" class="info">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-12 text-center">
          <h2>Informasi Acara</h2>          
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-md-12 col-12">
          <div class="card text-center text-bg-light mb-5">
            <div class="card-header mb-1">
              Akad Nikah (Siang)
            </div>
            <div class="card-body">
              <div class="row justify-content-center mb-3 mt-3">
                <div class="col-md-4">
                  <i class="bi bi-alarm"></i>
                  <span>11:00 WITA - Selesai</span>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-calendar-event"></i>
                  <span>Kamis, 14 Desember 2023</span>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-geo-alt-fill"></i>
                  <span>Jl. Rappokaling Raya Lr. Kami No. 21, Makassar</span>
                </div>

              </div>
              <div class="card-footer">                             
                <a href="https://maps.app.goo.gl/BGh2Qq56MUf9pdGE6" target="_blank" class="btn btn-light btn-sm my-3">Klik untuk membuka peta</a>
              </div>
            </div>            
          </div>                    
        </div>
      </div>

      <div class="row justify-content-center mt-0">  
        <div class="col-md-12 col-12">
          <div class="card text-center text-bg-light">
            <div class="card-header mb-1">
              Resepsi (Malam)
            </div>
            <div class="card-body">
              <div class="row justify-content-center mb-3 mt-3">
                <div class="col-md-4">
                  <i class="bi bi-alarm"></i>
                  <span>19:00 WITA - selesai</span>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-calendar-event"></i>
                  <span>Kamis, 14 Desember 2023</span>
                </div>
                <div class="col-md-4">
                  <i class="bi bi-geo-alt-fill"></i>
                  <span>Gedung SMK Neg 5 (STM Pembangunan), Makassar</span>
                </div>
              </div>
              <div class="card-footer">
                <a href="https://maps.app.goo.gl/zVpu8oAicKh9RJbB6" target="_blank" class="btn btn-light btn-sm my-3">Klik untuk membuka peta</a>
              </div>
            </div>
          </div>


        </div>
        
        


      </div>      
  </section>


  <!-- <section id="story" class="story">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">          
          <span>Bagaimana cinta kami bersemi</span>
          <h2>Cerita Kami</h2>          
        </div>
      </div>
        <div class="row">
          <div class="col">
            <ul class="timeline">
              <li>
                <div class="timeline-image" style="background-image: url('img/story/2.jpg');"></div>
                <div class="timeline-panel">
                  <div class="heading">
                    <h3>Pertama Kontak-kontakan</h3>
                    <span>Tanggalnya</span>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta repellat veritatis magnam qui fugiat molestiae.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image" style="background-image: url('img/story/1.jpg');"></div>
                <div class="timeline-panel">
                  <div class="heading">
                    <h3>Mulai Serius</h3>
                    <span>Tanggalnya</span>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus repellendus ipsum dolorem numquam autem nostrum reprehenderit, ipsa quo..</p>
                  </div>
                </div>             
              </li>
              <li>
                <div class="timeline-image" style="background-image: url('img/story/4.jpg');"></div>
                <div class="timeline-panel">
                  <div class="heading">
                    <h3>Tunangan dan Lamaran</h3>
                    <span>Tanggalnya</span>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quidem rerum assumenda voluptatum nobis aut nulla?.</p>
                  </div>
                </div>
              </li>              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- <section id="galery" class="galery">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">          
          <span>Memori Kisah Kami</span>
          <h2>Galeri Foto</h2>
          <p></p>
        </div>
      </div>
      <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
        <div class="col mt-3">
          <a href="img/story_/1.jpg" data-toggle="lightbox" data-caption="Dedy Alim Muzawwir & Suryanti Majid" data-gallery="dedyam">
            <img src="img/story_/thumb/1.jpg" alt="#1" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="img/story_/2.jpg" data-toggle="lightbox" data-caption="Dedy Alim Muzawwir & Suryanti Majid" data-gallery="dedyam">
            <img src="img/story_/thumb/2.jpg" alt="#1" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="img/story_/3.jpg" data-toggle="lightbox" data-caption="Dedy Alim Muzawwir & Suryanti Majid" data-gallery="dedyam">
            <img src="img/story_/thumb/3.jpg" alt="#1" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="img/story_/4.jpg" data-toggle="lightbox" data-caption="Dedy Alim Muzawwir & Suryanti Majid" data-gallery="dedyam">
            <img src="img/story_/thumb/4.jpg" alt="#1" class="img-fluid w-100 rounded">
          </a>
        </div>
      </div>
    </div>

  </section> -->

<section id="rsvp" class="rsvp">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8 col-10 text-center">        
        <span>Berikan Ucapan Kepada Kedua Mempelai</span>
        <h2>Buku Tamu</h2>
        <div id="disqus_thread"></div>
          <script>
              /**
              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
              /*
              var disqus_config = function () {
              this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
              };
              */
              (function() { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = 'https://iis-aan-wedding.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
              })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      </div>
    </div>
  </div>
</section>

<section id="gifts" class="gifts">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 col-12 text-center">
        <span>Ungkapan Tanda Kasih</span>
        <h2>Kirim Hadiah</h2>
        <p>Doa restu Anda adalah anugerah yang sangat berharga bagi kami.<br>Namun, jika Anda ingin mengekspresikan kasih sayang Anda, Anda bisa memberikan hadiah secara <i>cashless</i>.</p>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-md-12 col-12">
        <ul class="list-group" style="opacity:0.6;">
          <li class="list-group-item">
            <div class="fw-bold mb-3 mt-3" style="font-size: 2.6rem;">BRI - Bank Rakyat Indonesia</div>
            <h4 style="font-size: 2.4rem;" class="mb-3">381901024843537 - Ismiranti Idris
            <input hidden type="text" value="381901024843537" id="norek_">
              <button onclick="copy_teks_()" class="btn btn-lg btn-info">Salin Rekening</button></h4>
          </li>
        </ul>
      </div>

    </div>
  </div>
  

</section>




<footer>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <small class="block" style="font-size: 2rem;">&copy Iis & Aan Wedding.</small><br>
        <small class="block" style="font-size: 2rem;">Design by <a href="http://dedy-a-muzawwir.holasweater.id" target="_blank">Dedy</a> <a target="_blank" href="http://wa.me/085299653546"> [Contact Me] </a> </small>
      </div>
    </div>
  </div>

</footer>
<div id="audio-container">
  <audio src="audio/Marry Your Daughter - Brian McKnight.mp3" id="song" autoplay loop>


  </audio>
  <div class="audio-icon-wrapper" style="display:none">
    <i class="bi bi-disc"></i>
  </div>
            
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  <script>
    simplyCountdown('.simply-countdown', {
      year: 2023, // required
      month: 12, // required
      day: 14, // required
      hours: 11, // Default is 0 [0-23] integer
      // minutes: 0, // Default is 0 [0-59] integer
      // seconds: 0, // Default is 0 [0-59] integer
      words: { //words displayed into the countdown
        // days: { singular: 'day', plural: 'days' },
        // hours: { singular: 'hour', plural: 'hours' },
        // minutes: { singular: 'minute', plural: 'minutes' },
        // seconds: { singular: 'second', plural: 'seconds' }
        days: { singular: 'hari', plural: 'hari' },
        hours: { singular: 'jam', plural: 'jam' },
        minutes: { singular: 'menit', plural: 'menit' },
        seconds: { singular: 'detik', plural: 'detik' }
      },
      // plural: true, //use plurals
      // inline: false, //set to true to get an inline basic countdown like : 24 days, 4 hours, 2 minutes, 5 seconds
      // inlineClass: 'simply-countdown-inline', //inline css span class in case of inline = true
      // // in case of inline set to false
      // enableUtc: false,
      // onEnd: function () {
      //     // your code
      //     return;
      // },
      // refresh: 1000, //default refresh every 1s
      // sectionClass: 'simply-section', //section css class
      // amountClass: 'simply-amount', // amount css class
      // wordClass: 'simply-word', // word css class
      // zeroPad: false,
      // countUp: false, // enable count up if set to true
    });
  </script>

  <script>
    const stickyTop = document.querySelector('.sticky-top');
    const offcanvas = document.querySelector('.offcanvas');

    offcanvas.addEventListener('show.bs.offcanvas', function(){
      stickyTop.style.overflow = 'visible';
    });

    offcanvas.addEventListener('hidden.bs.offcanvas', function(){
      stickyTop.style.overflow = 'hidden';
    });
  </script>

<script>
  const rootElement = document.querySelector(":root");
  const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
  const audioIcon = document.querySelector('.audio-icon-wrapper i');
  let isPlaying = false;
  // playAudio();
  const song = document.querySelector('#song');

   rootElement.style.scrollBehavior = 'auto';
   function disableScroll(){
     scrollTop = window.pageYOffset || document.documentElement.scrollTop;
     scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

     window.onscroll = function(){
       window.scrollTo(scrollTop,scrollLeft);
     }
     
   }
   function enablescroll(){
     window.onscroll = function(){}
        rootElement.style.scrollBehavior = 'smooth';  
        // localStorage.setItem('opened','true');
        //playAudio();        
     
     playAudio();
   }

   function playAudio(){    
    song.volume = 0.1;
    audioIconWrapper.style.display = 'flex';
    song.play();
    isPlaying = true;
   }

   audioIconWrapper.onclick = function(){
    if (isPlaying){
      song.pause();
      audioIcon.classList.remove('bi-disc');
      audioIcon.classList.add('bi-pause-circle');
      isPlaying = false;
    }
    else{
      song.play();      
      audioIcon.classList.add('bi-disc');
      audioIcon.classList.remove('bi-pause-circle');
      isPlaying = true;
    }
    // isPlaying = !isPlaying;
   }

  // if(!localStorage.getItem('opened')){
  //  disableScroll();
  // }
    disableScroll();
 </script>

<script>
  function copy_teks_() {
    // Get the text field
    var copyText = document.getElementById("norek_");
  
    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
  
    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
    
    // Alert the copied text
    alert("Nomor Rekening: " + copyText.value + " berhasil disalin");
  }
  </script>
</body>

</html>
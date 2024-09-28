<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <title>iMovie</title>
  </head>

  <body>
    <!-- Awal Navbar -->
    <div class="navbar">
      <div class="navbar-container">
        <div class="logo-container">
          <h1 class="logo">iMovie</h1>
        </div>
        <div class="menu-container">
          <ul class="menu-list">
            <li class="menu-list-item active">Home</li>
            <li class="menu-list-item">Movies</li>
            <li class="menu-list-item">Series</li>
            <li class="menu-list-item">Horror</li>
            <li class="menu-list-item">Cartoon</li>
          </ul>
        </div>
        <div class="profile-container">
          <img class="profile-picture" src="img/profile2.jpg" alt="" />
          <div class="profile-text-container">
            <span class="profile-text">Profile</span>
            <i class="fas fa-caret-down"></i>
          </div>
          <div class="dropdown-menu">
            <!-- Dropdown -->
            <a href="login.html" class="dropdown-item">Login</a>
            <a href="register.html" class="dropdown-item">Register</a>
          </div>
          <div class="toggle">
            <i class="fas fa-moon toggle-icon"></i>
            <i class="fas fa-sun toggle-icon"></i>
            <div class="toggle-ball"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Navbar -->

    <!-- Awal SideBar -->
    <div class="sidebar">
      <i class="left-menu-icon fas fa-search"></i>
      <div class="search-container">
        <input type="text" id="search" placeholder="Search movies..." />
      </div>
      <!-- <i class="left-menu-icon fas fa-home"></i> -->
      <i class="left-menu-icon fas fa-users"></i>
      <i class="left-menu-icon fas fa-bookmark"></i>
      <i class="left-menu-icon fas fa-tv"></i>
      <!-- <i class="left-menu-icon fas fa-hourglass-start"></i> -->
      <!-- <i class="left-menu-icon fas fa-shopping-cart"></i> -->
    </div>
    <!-- Akhir Sidebar -->

    <div class="container">
      <div class="content-container">
        <div
          class="featured-content"
          style="
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), #151515),
              url('img/f-3.png');
          "
        ></div>

        <!-- Film -->
        <div class="movie-list-container" id="movies">
          <h1 class="movie-list-title">MOVIES</h1>
          <div class="movie-list-wrapper">
            <div class="movie-list">
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/1.jpg" alt="" />
                <span class="movie-list-item-title">Mariposa</span>
                <p class="movie-list-item-desc">
                  mengisahkan tentang perjalanan cinta murid SMA yang dikenal
                  sebagai murid berprestasi di sekolahnya.
                </p>
                <!-- <button class="movie-list-item-button">Watch</button> -->
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/N9PUbRIKYOA?si=UtRFzJjC0efjsKC9.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/2.jpeg" alt="" />
                <span class="movie-list-item-title">Laura</span>
                <p class="movie-list-item-desc">
                  Laura Anna yang di usia mudanya harus menghadapi cobaan berat
                  setelah kecelakaan mobil tragis yang dialaminya bersama sang
                  kekasih
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/3hqGzCZAJM4?si=62rzmMtirlXfZsnA.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/3.jpg" alt="" />
                <span class="movie-list-item-title">Hati Suhita</span>
                <p class="movie-list-item-desc">
                  mengisahkan perjodohan yang terjadi di pesantren, menampilkan
                  konfilk pernikahan yang menguras emosi penonton dan penuh
                  haru.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/elIcNsHm6pM?si=5kcmQ71eq7v3RuEi.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/4.jpg" alt="" />
                <span class="movie-list-item-title">Miracle in Cell No.7</span>
                <p class="movie-list-item-desc">
                  menceritakan seorang anak yang berusaha mencari keadilan untuk
                  membersihkan nama Ayahnya Dodot Rozak
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/0uf6QUacVgs?si=6xFbUWvq-eUgqSHP.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/5.jpg" alt="" />
                <span class="movie-list-item-title">Gampang Cuan</span>
                <p class="movie-list-item-desc">
                  keluarga yang berjuang untuk mengatasi warisan utang yang
                  besar yang ditinggalkan oleh ayah mereka, sebesar 300 juta
                  rupiah.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/z3HQeUpkkNU?si=Ew4a6otIlA731sEc.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/6.jpg" alt="" />
                <span class="movie-list-item-title">Agak Laen</span>
                <p class="movie-list-item-desc">
                  mengisahkan tentang empat sahabat yang berjuang untuk mengubah
                  nasib mereka melalui rumah hantu di pasar malam.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/0YLSPyGA4h0?si=2iT0dStV_iwsjG3t.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/7.jpg" alt="" />
                <span class="movie-list-item-title">13 Bom Di Jakarta</span>
                <p class="movie-list-item-desc">
                  menceritakan tentang teror sekumpulan teroris yang ingin
                  menyerang Jakarta, ibukota Indonesia.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/uXJHPMKLgiI?si=xDI3BiH-7R7dvTE3.mp4'"
                >
                  Watch
                </button>
              </div>
            </div>
            <i class="fas fa-chevron-right arrow"></i>
          </div>
        </div>
        <div class="movie-list-container" id="series">
          <h1 class="movie-list-title">SERIES</h1>
          <div class="movie-list-wrapper">
            <div class="movie-list">
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/8.jpg" alt="" />
                <span class="movie-list-item-title">Paradise Garden</span>
                <p class="movie-list-item-desc">
                  kisah misteri hilangnya dua orang secara tiba-tiba.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/np48FQjNOeA?si=NRkSS6tYLClCE09h.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/9.jpg" alt="" />
                <span class="movie-list-item-title">Reuni Z</span>
                <p class="movie-list-item-desc">
                  Sekelompok siswa dari angkatan 97 SMA Zenith, bertemu kembali
                  berbagi cerita dan keusilan mereka.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/qKyvbiVUzLs?si=oNhm_6NPIuMMT3QR.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/10.jpg" alt="" />
                <span class="movie-list-item-title">Cinta Laki-Laki Biasa</span>
                <p class="movie-list-item-desc">
                  Nania yang jatuh cinta kepada Ramli setelah bekerja bersama di
                  sebuah proyek, tidak mendapat restu dari keluarganya.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/HziqmgM-7JA?si=SG06oFVRieJbQ4jH.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/11.jpg" alt="" />
                <span class="movie-list-item-title">WHY?</span>
                <p class="movie-list-item-desc">
                  pasangan kekasih, yang tak kunjung mendapat restu untuk
                  bersama.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/DusCKKSYzNo?si=wTTwbTqJz9zwLUCr.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/12.jpg" alt="" />
                <span class="movie-list-item-title">Ratu Adil</span>
                <p class="movie-list-item-desc">
                  seorang ibu rumah tangga bernama Lasja yang dipaksa bertahan
                  melawan komplotan mafia 9 naga.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/jxHXDp46nBQ?si=vjn5FQA9CGw01Rsj.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/13.jpg" alt="" />
                <span class="movie-list-item-title">The Perfect Strangers</span>
                <p class="movie-list-item-desc">
                  Demi melindungi ayahnya, Alexa menyamar menjadi asisten
                  pribadi Liam, keluarga mafia kaya raya.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/SFULJLmaBvk?si=9dGs-3BLqntma0UV'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/14.jpg" alt="" />
                <span class="movie-list-item-title">Kenapa Gue</span>
                <p class="movie-list-item-desc">
                  Danu, seorang mahasiswa yang tiba-tiba membunuh dirinya saat
                  sesi kelas daring.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/St61FgorzEA?si=5179kxiPhmBUy_n0.mp4'"
                >
                  Watch
                </button>
              </div>
            </div>
            <i class="fas fa-chevron-right arrow"></i>
          </div>
        </div>
        <div
          class="featured-content"
          style="
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), #151515),
              url('img/f-4.png');
          "
        ></div>
        <div class="movie-list-container" id="horror">
          <h1 class="movie-list-title">HORROR</h1>
          <div class="movie-list-wrapper">
            <div class="movie-list">
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/15.jpg" alt="" />
                <span class="movie-list-item-title">Malam Pencabut Nyawa</span>
                <p class="movie-list-item-desc">
                  kisah perjalanan Respati seorang siswa SMA yang menderita
                  insomnia setelah kematian tragis orang tuanya.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/BdWC_ZujOqI?si=Zlk_k2w1S7BI67cF.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/16.jpg" alt="" />
                <span class="movie-list-item-title">Pengabdi Setan 2</span>
                <p class="movie-list-item-desc">
                  Beberapa tahun setelah berhasil menyelamatkan diri dari
                  kejadian mengerikan, mereka tinggal di rumah susun.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/8LIHcd7WfWI?si=VMGMbj6WsITSAIL4.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/17.jpg" alt="" />
                <span class="movie-list-item-title">KKN di Desa Penari</span>
                <p class="movie-list-item-desc">
                  sebuah kisah nyata sekelompok KKN di Desa Penari. Tak berjalan
                  mulus, sehingga program KKN tersebut berakhir tragis.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/PAMx9m4Z2V4?si=LnYrLlEq8HGorQti.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/18.jpg" alt="" />
                <span class="movie-list-item-title">Inang</span>
                <p class="movie-list-item-desc">
                  seorang perempuan yang bernama Wulan. Ia bekerja di minimarket
                  dalam kondisi sedang hamil.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/TnK_vLxYrxQ?si=GuPUac_wvl_nOPOG.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/19.jpg" alt="" />
                <span class="movie-list-item-title">Sinden Gaib</span>
                <p class="movie-list-item-desc">
                  seorang wanita bernama Ayu yang secara mendadak bisa menjadi
                  sinden di kampungnya dengan penuh aura mistisnya.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/v3KM-l1n7nI?si=c1NH5GuDZWI53k61.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/20.jpg" alt="" />
                <span class="movie-list-item-title">Perjamuan Iblis</span>
                <p class="movie-list-item-desc">
                  bercerita mengenai pasangan suami istri bernama Kala dan Radit
                  yang memiliki kehidupan bahagia.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/KyMwQaeYPjw?si=r9yNqDSf3Pl4hgGb.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/21.jpg" alt="" />
                <span class="movie-list-item-title">Jailangkung Sandekala</span>
                <p class="movie-list-item-desc">
                  Sandekala yakni mitos makhluk halus yang akan meneror dan
                  mengganggu anak kecil yang keluar menjelang Magrib.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/LdLSid_nOh0?si=dd7Uimiii232jBve.mp4'"
                >
                  Watch
                </button>
              </div>
            </div>
            <i class="fas fa-chevron-right arrow"></i>
          </div>
        </div>
        <div class="movie-list-container" id="cartoon">
          <h1 class="movie-list-title">CARTOON</h1>
          <div class="movie-list-wrapper">
            <div class="movie-list">
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/22.jpg" alt="" />
                <span class="movie-list-item-title">Elemental</span>
                <p class="movie-list-item-desc">
                  dunia yang penghuninya merupakan beberapa elemen antropomorfik
                  alam, seperti air, api, udara, dan juga tanah.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/eoq-csWBPIg?si=y6PaZnH3bQwDKmhg.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/23.jpg" alt="" />
                <span class="movie-list-item-title">Brave</span>
                <p class="movie-list-item-desc">
                  Brave bercerita tentang seorang putri berambut merah ikal
                  bernama Merida, yang hidup di sebuah kastil.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/RuGt6r75ojU?si=OoDO3BRkvs-0uesv.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/24.png" alt="" />
                <span class="movie-list-item-title">Luca</span>
                <p class="movie-list-item-desc">
                  monster laut Ia menghabiskan hari-harinya dengan
                  menggembalakan sekawanan ikan.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/1NGSvb8wjzM?si=uhhNHkxthIpmhSHi.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/25.jpeg" alt="" />
                <span class="movie-list-item-title">Inside Out</span>
                <p class="movie-list-item-desc">
                  seorang anak perempuan dan berbagai macam emosi dalam dirinya
                  yang diwujudkan dalam bentuk karakter.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/onJfRTiuJEU?si=B-WaJpaUGkaosQDI.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/26.jpg" alt="" />
                <span class="movie-list-item-title">Raya</span>
                <p class="movie-list-item-desc">
                  kisah tentang keberanian, persatuan, dan bagaimana kepercayaan
                  dapat mengalahkan kegelapan.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/1VIZ89FEjYI?si=SLEnudk9e-B4VyOI.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/27.jpg" alt="" />
                <span class="movie-list-item-title">Tangled</span>
                <p class="movie-list-item-desc">
                  kisah sepasang suami istri yang berjuang untuk memiliki anak,
                  anak ajaib mereka Rapunzel.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/0B2c9AcM5Tw?si=jjKDz1M9DD3lmuIr.mp4'"
                >
                  Watch
                </button>
              </div>
              <div class="movie-list-item">
                <img class="movie-list-item-img" src="img/28.jpg" alt="" />
                <span class="movie-list-item-title">Soul</span>
                <p class="movie-list-item-desc">
                  Joe Gardner, seorang guru musik yang mempunyai mimpi untuk
                  menjadi musisi Jazz terkenal.
                </p>
                <button
                  class="movie-list-item-button"
                  onclick="window.location.href='https://youtu.be/xOsLIiBStEs?si=jfduDqwyKx4_Iho-.mp4'"
                >
                  Watch
                </button>
              </div>
            </div>
            <i class="fas fa-chevron-right arrow"></i>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('js/movie.js')}}"></script>

    <!-- Kode untuk login terlebih dahulu sebelum masuk web -->
    <!-- <script>
      // Fungsi untuk memeriksa apakah pengguna sudah login
      function checkLogin() {
        const isLoggedIn = localStorage.getItem("isLoggedIn");
        if (!isLoggedIn) {
          // Jika belum login, redirect ke halaman login
          window.location.href = "login.html";
        }
      }

      // Panggil fungsi untuk memeriksa status login saat halaman dimuat
      window.onload = checkLogin;
    </script> -->
  </body>
</html>

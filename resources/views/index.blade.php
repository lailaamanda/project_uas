<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
  <link href={{ asset('assets/css/bootstrap.min.css') }} rel="stylesheet">
  <link href={{ asset('assets/css/bootstrap-icons.css') }} rel="stylesheet">
  <link href={{ asset('assets/css/templatemo-topic-listing.css') }} rel="stylesheet">  
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
  integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
  crossorigin=""></script>

  <style>
    #map { height: 600px; }
    nav.navbar{
      position : fixed;
      top:0;
      width: 100%;
      z-index : 1000;
      background-color: #80d0c7;
    }
  </style>
</head>
<body id="top">

  @include('navbar')


<main style="margin-top: 90px;" class="container">
  <section id="about" class="about section">
    <div class="container text-center">
      <div class="row gy-4">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
          <h3 class="mb-4">PETA TEMATIK PROVINSI JAWA TIMUR</h3>
          <img src="assets/img/jatim.jpg" class="img-fluid rounded-4 mb-4" alt="Peta Jawa Timur" 
          style="width: 50%; max-width: 400px;">
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-lg-12">
          <p>Pemetaan dan informasi geografis memiliki peran penting dalam perencanaan dan 
             pengambilan keputusan, terutama untuk mendukung pembangunan yang lebih merata. Dengan 
              memanfaatkan teknologi Sistem Informasi Geografis (SIG), data dapat divisualisasikan 
               dalam bentuk peta tematik yang mudah dipahami dan membantu mengidentifikasi kebutuhan 
                suatu wilayah.</p>
          <p>Provinsi Jawa Timur memiliki karakteristik geografis dan sosial yang beragam, dengan 
             kebutuhan infrastruktur seperti rumah sakit dan sekolah yang berbeda di setiap 
              wilayahnya. Kepadatan penduduk yang tinggi di beberapa daerah seringkali tidak 
               diimbangi dengan jumlah fasilitas yang memadai, sehingga menimbulkan kesenjangan 
                akses   terhadap layanan pendidikan dan kesehatan.</p>
        </div>
      </div>
    </div>
  </section>
  
  
  <section id="team" class="team section light-background">
    <!-- Section Title -->
    <div class="container section-title" style="text-align: center; margin-bottom: 30px;" data-aos="fade-up">
        <h2 style="font-size: 32px; font-weight: bold; color: #333;">Team</h2>
        <p style="font-size: 18px; color: #555;">CHECK OUR TEAM</p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div class="row justify-content-center gy-5">
            @foreach ([
            ['nama' => 'Atikah Khairun Nisa', 'nim' => '0110121050', 'prodi' => 'Sistem Informasi',   
             'img' => '9.jpg'],
            ['nama' => 'Dinda Syafitri Hakim', 'nim' => '0110121116', 'prodi' => 'Sistem Informasi', 
             'img' => '3.jpg'],
            ['nama' => 'Ena Nurhalizah', 'nim' => '0110121090', 'prodi' => 'Sistem Informasi', 'img' 
             => '4.jpg'],
            ['nama' => 'Laila Amanda Fitria', 'nim' => '0110121089', 'prodi' => 'Sistem Informasi', 
             'img' => '8.jpg'],
            ] as $anggota)
            <div class="col-lg-4 col-md-6 mb-5" style="display: flex; justify-content-center; align- 
             items: center;"
                data-aos="fade-up" data-aos-delay="100">
                <div class="member text-center"
                    style="background-color: #fff; border-radius: 10px; padding: 15px; box-shadow: 0 
                     4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 300px;">
                    <div class="pic">
                        <img src="{{asset('assets/img/team/' . $anggota['img']) }}" class="img- 
                         fluid" alt="" style="width: 200px; height: 200px; border-radius: 50%;    
                          object-fit: cover;">
                    </div>
                    <div class="member-info" style="margin-top: 15px;">
                        <h4 style="font-size: 20px; font-weight: bold; color: #333;">{{ 
                           $anggota['nama'] }}</h4>
                        <span style="font-size: 16px; color: #777;">{{ $anggota['nim'] }}</span>
                        <p>{{ $anggota['prodi'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
</main>
  <script src={{ asset('assets/js/jquery.min.js') }}></script>
  <script src={{ asset('assets/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset('assets/js/jquery.sticky.js') }}></script>
  <script src={{ asset('assets/js/click-scroll.js') }}></script>
  <script src={{ asset('assets/js/custom.js') }}></script>
</body>
</html>
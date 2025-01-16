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

  </style>
</head>
<body id="top">
  <main>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <i class="bi-back"></i>
                <span>Wilayah Jawa Timur</span>
            </a>

            <div class="d-lg-none ms-auto me-4">
                <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5 me-lg-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kabupaten / Kota</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="/kabkota/peta">Peta Kabkota</a></li>

                        <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                    </ul>
                </li><li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kecamatan</a>

                  <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                      <li><a class="dropdown-item" href="topics-listing.html">Topics Listing</a></li>

                      <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                  </ul>
              </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Peta Tematik</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="topics-listing.html">Kepadatan Penduduk</a></li>
                            <li><a class="dropdown-item" href="contact.html">Tempat Rekreasi</a></li>
                            <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                            <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="d-none d-lg-block">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>
            </div>
        </div>
    </nav>
    
</main>

<div id="map"></div>

  <script src={{ asset('assets/js/jquery.min.js') }}></script>
  <script src={{ asset('assets/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset('assets/js/jquery.sticky.js') }}></script>
  <script src={{ asset('assets/js/click-scroll.js') }}></script>
  <script src={{ asset('assets/js/custom.js') }}></script>

  <script>
    var map = L.map('map').setView([-7.6138524,112.4579055], 8);
    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
         
         const kabkotas = {!! json_encode($kabkotas) !!}
         
  
         kabkotas.forEach(function(kabkota){
           L.marker([kabkota.latitude, kabkota.longitude]).addTo(map).bindPopup(kabkota.name)
         })
         
  </script>
</body>
</html>
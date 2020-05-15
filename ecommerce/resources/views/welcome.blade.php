@extends('layouts/app')

@section('title', 'SIC-19')

@section('container')

<!-- jumbotron awal -->
<section id="awal" class="awal">
<div class="jumbotron jumbotron-fluid" style="background-color: #52de97">
  <div class="container text-center text-white">
    <h1 class="display-4">T A N G G A P&ensp; &ensp;C O V I D - 1 9</h1>
    <p class="lead">Website informasional dan transaksional untuk menangani Pandemi Covid-19</p>
  </div>
</div>
</section>
  
<!-- Slideshow -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-width: 100%; height: 600px">
  <ol class="carousel-indicators" style="color: black">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/main.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/handwash.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>


<!-- tentang Covid-19 -->
<section id="about" class="about bg-light">
<div class="container ">
  <div class="row">
    <div class="col text-center">
      <h1>Tentang Covid-19</h1>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <h2>Apa Itu COVID-19</h2>
      <p>Coronavirus Disease 2019 atau COVID-19 adalah penyakit baru yang dapat menyebabkan gangguan pernapasan dan radang paru. Penyakit ini disebabkan oleh infeksi Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2). Gejala klinis yang muncul beragam, mulai dari seperti gejala flu biasa (batuk, pilek, nyeri tenggorok, nyeri otot, nyeri kepala) sampai yang berkomplikasi berat (pneumonia atau sepsis).</p>

      <br>
      <br>
      <h2>Bagaimana COVID-19 Menular?</h2>
      <p>COVID-19 adalah penyakit baru dan para peneliti masih mempelajari bagaimana cara penularannya. Dari berbagai penelitian, metode penyebaran utama penyakit ini diduga adalah melalui droplet saluran pernapasan dan kontak dekat dengan penderita. Droplet merupakan partikel kecil dari mulut penderita yang dapat mengandung virus penyakit, yang dihasilkan pada saat batuk, bersin, atau berbicara. Droplet dapat melewati sampai jarak tertentu (biasanya 1 meter).

      Droplet bisa menempel di pakaian atau benda di sekitar penderita pada saat batuk atau bersin. Namun, partikel droplet cukup besar sehingga tidak akan bertahan atau mengendap di udara dalam waktu yang lama. Namun, masyarakat diwajibkan untuk menggunakan masker kain yang menutupi hidung dan mulut untuk mencegah penyebaran droplet.</p>
    </div>
    <div class="col text-white rounded border border-dark" style="background-color: #52de97">
        <div class="row"><h2  style="padding-left: 170px">Gejala COVID-19</h2></div>
        <br>
        <div class="row">
          <div class="col">
            <img src="images/sesaknapas.png" width="150" class="rounded-circle">
            <p class="text-center">Sesak napas</p>
          </div>
          <div class="col">
            <img src="images/demam.png" width="150" class="rounded-circle">
            <p class="text-center">Demam suhu tinggi / Ada riwayat demam</p>
          </div>
          <div class="col">
            <img src="images/batukpilek.png" width="150" class="rounded-circle">
            <p class="text-center">Batuk dan Nyeri Tenggorok</p>
          </div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">
            <p>Gejala COVID-19 mulai dari seperti gejala flu biasa sampai kondisi berat seperti pneumonia (radang paru akut yang gejalanya sesak napas). Jika Anda mengalami gejala, memiliki riwayat perjalanan ke wilayah terjangkit, atau berpaparan dengan orang positif/kemungkinan COVID-19, maka Anda diimbau untuk melakukan isolasi diri dan menghubungi pihak yang berwajib.</p>
          </div>
          <div class="col-1"></div>
        </div>
    </div>

  </div>
  <br>
  <br>
</div>
</section>

<br>
<!-- Melindungi diri dari Covid -->
<section id="preventif" class="preventif">
<div class="container ">
  <div class="row">
    <div class="col text-center">
      <h1>Melindungi Diri dari COVID-19</h1>
      <br>
      <p>Ada beberapa hal yang dapat Anda lakukan untuk mencegah atau membantu
        menghentikan penyebaran coronavirus, antara lain:</p>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col text-center">
      <h3>Hal yang Harus Dilakukan</h3>
      <br>
    </div>
  </div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col text-center">
      <img src="images/i1.png" width="150" class="rounded-circle">
      <p class="text-center">Tetap tinggal di rumah; bekerja dari rumah, belajar dari rumah, dan beribadah di rumah</p>
    </div>
    <div class="col text-center">
      <img src="images/i2.png" width="150" class="rounded-circle">
      <p class="text-center">Cuci tangan dengan sabun dan air minimal 20 detik atau gunakan hand sanitizer berbasis alkohol minimal 60 %</p>
    </div>
    <div class="col text-center">
      <img src="images/i3.png" width="150" class="rounded-circle">
      <p class="text-center">Bersihkan dan disinfeksi permukaan benda yang sering disentuh</p>
    </div>
    <div class="col-2"></div>
  </div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col text-center">
      <img src="images/i4.png" width="150" class="rounded-circle">
      <p class="text-center">Tutupi mulut dan hidung saat batuk atau bersin dengan tisu atau siku bagian dalam</p>
    </div>
    <div class="col text-center">
      <img src="images/i5.png" width="150" class="rounded-circle">
      <p class="text-center">Pakai masker jika Anda harus beraktivitas di luar rumah dan ganti secara berkala</p>
    </div>
    <div class="col text-center">
      <img src="images/i6.png" width="150" class="rounded-circle">
      <p class="text-center">Terapkan pola hidup sehat dengan makanan bergizi dan olahraga</p>
    </div>
    <div class="col-2"></div>
  </div>
  <br>
  <div class="row">
    <div class="col text-center">
      <h3>Hal yang Tidak Boleh Dilakukan</h3>
      <br>
    </div>
  </div>
  <div class="row">
    <div class="col-1"></div>
    <div class="col text-center">
      <img src="images/g1.png" width="150" class="rounded-circle">
      <p class="text-center">Bepergian ke luar rumah untuk hal yang tidak penting</p>
    </div>
    <div class="col text-center">
      <img src="images/g2.png" width="150" class="rounded-circle">
      <p class="text-center">Berada dekat dengan orang yang sedang sakit, batuk atau bersin</p>
    </div>
    <div class="col text-center">
      <img src="images/g3.png" width="150" class="rounded-circle">
      <p class="text-center">Menyentuh mata, hidung, atau mulut dengan telapak tangan</p>
    </div>
    <div class="col text-center">
      <img src="images/g4.png" width="150" class="rounded-circle">
      <p class="text-center">Menimbun masker, hand sanitizer, atau perlengkapan medis lainnya</p>
    </div>
    <div class="col-1"></div>
  </div>
</div>
</section>

<!-- Toko -->
<section id="toko" class="toko bg-light">
  

</section>
<br>
<br>
@endsection




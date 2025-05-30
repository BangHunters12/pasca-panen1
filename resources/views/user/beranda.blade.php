@extends('layouts.user.user')
@section("content")

<section id="hero" class="hero section dark-background">

  <img src="{{ asset('assets/images/logos/background.jpeg') }}" alt="Hero Background" data-aos="fade-in">

  <div class="container">

    <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-6 col-lg-8">
        <h3>MENGHUBUNGKAN PETANI KE PASAR, DENGAN MUDAH.</h3>
        <h>“Karena Setiap Panen Layak Mendapatkan Nila Terbaik.”</h>
      </div>
    </div>

    <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-box">
          <h3><a href="">Penjualan Produk Pertanian</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
        <div class="icon-box">
          <h3><a href="">Penyewaan Alat Tani</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
        <div class="icon-box">
          <h3><a href="">Informasi Harga Padi</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
        <div class="icon-box">
          <h3><a href="">Panduan & Tata Cara Bertani</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
        <div class="icon-box">
          <h3><a href="">Berita & Acara Pertanian</a></h3>
        </div>
      </div>
    </div>

  </div>

</section>

<section id="about" class="about section bg-success bg-opacity-25 py-5">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 align-items-center">

    <!-- Judul -->
      <div class="row">
        <div class="col-12">
          <h2 class="text-center text-2xl font-semibold text-success mb-4">Tentang Kami</h2>
        </div>
      </div>
  
      <div class="row gy-4 align-items-center">

      <!-- Gambar -->
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="{{ asset('assets/images/logos/about.jpeg') }}" alt="Sawah" class="img-fluid rounded shadow-md">
      </div>
      
      <!-- Teks -->
      <div class="col-lg-6 order-2 order-lg-1 text-gray-800">
        <p class="mb-3">
          Kami adalah platform digital yang berkomitmen untuk meningkatkan 
          kesejahteraan petani dan mendorong kemajuan sektor agribisnis di Indonesia. Melalui teknologi yang mudah diakses dan informasi yang relevan, kami membantu petani untuk mengelola usaha tani secara efisien, aman, dan menguntungkan.
        </p>
        <p class="mb-3">
          Untuk itu, kami menyediakan berbagai fitur utama, seperti:
        </p>
        <ul class="mb-3">
          <li>Informasi harga Padi terkini</li>
          <li>Data kualitas Padi</li>
          <li>Layanan pertanian seperti alat, jasa panen, pupuk</li>
          <li>Sistem pemantauan produksi dan penjualan secara tepat</li>
          <li>Jejaring langsung antara petani dan pembeli dengan transparansi harga dan dukungan pertanian modern</li>
        </ul>
        <p>
          Kami percaya, dengan informasi dan teknologi yang tepat, pertanian Indonesia bisa tumbuh lebih efisien dan berkelanjutan.
        </p>
      </div>

    </div>
  </div>
</section>

<section id="berita" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center text-success fw-bold mb-2">BERITA PERTANIAN</h2>
    <p class="text-center text-warning mb-5 fs-5">
      Semua yang perlu kamu tahu tentang pertanian, ada di sini.
    </p>

    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/images/logos/background.jpeg') }}" class="card-img-top" alt="Berita Pertanian">
          <div class="card-body text-center">
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit...
            </p>
            <a href="#" class="text-primary fw-semibold">Baca Selengkapnya !!</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/images/logos/background.jpeg') }}" class="card-img-top" alt="Berita Pertanian">
          <div class="card-body text-center">
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit...
            </p>
            <a href="#" class="text-primary fw-semibold">Baca Selengkapnya !!</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/images/logos/background.jpeg') }}" class="card-img-top" alt="Berita Pertanian">
          <div class="card-body text-center">
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit...
            </p>
            <a href="#" class="text-primary fw-semibold">Baca Selengkapnya !!</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="harga" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center text-success mb-2 fw-bold">HARGA PADI</h2>
    <p class="text-center mb-5 fst-italic fw-semibold">
      "Update harga padi setiap hari agar kamu nggak ketinggalan info pasar."
    </p>

    <div class="row">
      <!-- Kartu 1 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 border-success">
          <!-- Tambahkan padding dan border di gambar -->
          <div class="p-2">
            <img src="{{ asset('assets/images/logos/background.jpeg') }}" class="card-img-top rounded" alt="Padi">
          </div>
          <div class="card-body">
            <div class="row">
              <!-- Kiri -->
              <div class="col-6">
                <p class="mb-1 text-warning"><strong>Tekstur:</strong><br> Lembut</p>
                <p class="mb-0 text-warning"><strong>Harga/kg:</strong><br> Rp10.500</p>
              </div>
              <!-- Kanan -->
              <div class="col-6">
                <p class="mb-1 text-warning"><strong>Nama:</strong><br> Cihirang</p>
                <p class="mb-1 text-warning"><strong>Warna:</strong><br> Kuning Bersih</p>
                <p class="mb-0 text-warning"><strong>Bentuk:</strong><br> Panjang</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="tips" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-success">TIPS BERTANI</h2>
      <p class="lead text-muted">"Tips praktis untuk hasil panen maksimal dan pertanian yang lebih efisien."</p>
    </div>

    <div class="row g-4">
      <!-- Tip 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="mb-3 text-success fs-1">🌱</div>
            <h3 class="h5 fw-bold text-success">Pilih Benih</h3>
            <p class="mb-0">Pilih benih berkualitas tinggi untuk hasil panen yang lebih baik.</p>
          </div>
        </div>
      </div>

      <!-- Tip 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="mb-3 text-success fs-1">🌿</div>
            <h3 class="h5 fw-bold text-success">Gunakan Pupuk</h3>
            <p class="mb-0">Gunakan pupuk secara bijak untuk menjaga tanaman tetap sehat.</p>
          </div>
        </div>
      </div>

      <!-- Tip 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="mb-3 text-success fs-1">🐛</div>
            <h3 class="h5 fw-bold text-success">Pantau Hama</h3>
            <p class="mb-0">Pantau hama dan penyakit sejak dini.</p>
          </div>
        </div>
      </div>

      <!-- Tip 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="mb-3 text-success fs-1">🔄</div>
            <h3 class="h5 fw-bold text-success">Rotasi Tanaman</h3>
            <p class="mb-0">Lakukan rotasi tanaman untuk menjaga kesuburan tanah.</p>
          </div>
        </div>
      </div>

      <!-- Tip 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="mb-3 text-success fs-1">💧</div>
            <h3 class="h5 fw-bold text-success">Teknik Irigasi</h3>
            <p class="mb-0">Terapkan teknik irigasi yang efisien untuk menghemat air.</p>
          </div>
        </div>
      </div>

      <!-- Tip 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="mb-3 text-success fs-1">⏱️</div>
            <h3 class="h5 fw-bold text-success">Waktu Panen</h3>
            <p class="mb-0">Panen pada waktu yang tepat untuk kualitas hasil terbaik.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="kontak" class="contact section py-5 bg-light">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 class="fw-bold">Kontak</h2>
    <p class="lead">Ada pertanyaan atau butuh bantuan? Hubungi kami sekarang!</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <!-- Peta -->
    <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
      <iframe style="border:0; width: 100%; height: 270px;" 
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" 
              frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="row gy-4">
      <!-- Kolom Informasi -->
      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300" >
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Alamat</h3>
            <p>Jl. Pertanian No. 123, Kota Agraris, Indonesia</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Kontak</h3>
            <p>+62 123 456 789</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email</h3>
            <p>info@pertanianindonesia.com</p>
          </div>
        </div><!-- End Info Item -->
      </div><!-- End Kolom Informasi -->

      <!-- Formulir Kontak -->
      <div class="col-lg-8">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
            </div>

            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>

              <button type="submit" >Kirim Pesan</button>
            </div>
          </div>
        </form>
      </div><!-- End Formulir Kontak -->
    </div>
  </div>
</section>


@endsection
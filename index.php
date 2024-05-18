<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Memperbaiki kesalahan penulisan pada href -->
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900">

  <title>Putri | Web Developer</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-second pt-4">
    <div class="container">
      <!-- Bagian Kiri -->
      <a class="navbar-brand logo pt-2 text-center fw-bold" href="#"><u>NP</u></a>

      <!-- Bagian Kanan -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link secondary me-4" href="#profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link secondary me-4" href="#kemampuan">Kemampuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link secondary me-4" href="#pengalaman">Pengalaman</a>
          </li>
          <li class="nav-item bg-first hubungi p-1 px-3">
            <a href="mailto:nabilaputri1010@gmail.com" class="btn text-decoration-none text-white">
              Hubungi saya
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Penutup Navbar -->

  <!-- Profil -->
  <div id="profil" class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-7">
          <hr class="hr-1" style="height: 10px;">
          <h3 class="title-1 mb-2 fw-bolder">Nabila Putri Oktaviani</h3>
          <p class="text-secondary description">Saya ingin mengucapkan terima kasih kepada semua pihak yang telah mendukung saya dalam perjalanan belajar coding website ini. Kepada keluarga yang selalu memberikan semangat, dosen yang telah membimbing dengan sabar, dan teman-teman yang selalu membantu dan berbagi ilmu. Pengalaman ini adalah motivasi bagi saya untuk terus belajar dan mengembangkan kemampuan saya di bidang coding website.</p>
          <a href="cvput.png" class="mt-4 d-block">
            <button type="button" class="btn btn-primary">Unduh CV</button>
          </a>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-5 d-flex justify-content-md-end align-items-center">
          <img src="putri.jpg" class="rounded-circle profile-picture" alt="Profile Picture">
        </div>
      </div>
    </div>
  </div>

  <!-- Quote -->
  <div class="container-fluid d-flex justify-content-center align-items-center bg-first" id="quote-container">
    <p class="text-left text-wrap text-white py-5 px-3" id="quote">
      <b>"Halo, Nama saya Nabila Putri, asal Temanggung. Saat ini saya sedang berkuliah di STMIK Bekasi, jurusan sistem informasi. Saya memiliki minat yang besar dalam bidang meliputi pemrograman komputer, pengembangan web atau bidang teknologi dan saya berharap dapat berkontribusi di bidang ini di masa depan"</b>
      - <u>Oktaviani</u>
    </p>
  </div>

  <!-- Kemampuan -->
  <div id="kemampuan">
    <div class="container-fluid py-6" id="skill-main-container">
      <div class="row">
        <div class="col-xl-6 col-sm-12 d-flex justify-content-start align-items-center p-5">
          <img src="web.png" id="skill-picture" alt="Kemampuan">
        </div>
        <!-- Daftar Kemampuan -->
        <div class="col-xl-6 col-sm-12 d-flex justify-content-xl-center justify-content-sm-start align-items-center px-5">
          <div id="skills-container">
            <hr class="hr-3" style="height: 10px;">
            <h1 class="title-2">Kemampuan</h1>
            <div class="d-flex align-items-center py-3">
              <img src="html-icon.png" class="skill-item-picture" alt="HTML Icon">
              <p class="skill-title ps-3">HTML</p>
            </div>
            <div class="d-flex align-items-center py-3">
              <img src="css-icon.png" class="skill-item-picture" alt="CSS Icon">
              <p class="skill-title ps-3">CSS</p>
            </div>
            <div class="d-flex align-items-center py-3">
              <img src="bootstrap-icon.png" class="skill-item-picture" alt="Bootstrap Icon">
              <p class="skill-title ps-3">Bootstrap</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pengalaman -->
  <hr id="pengalaman" class="hr-2 me-auto ms-auto" style="height: 10px;">
  <div class="container pengalaman">
    <h1 class="title-2 text-center" id="JudulPengalaman">Pengalaman</h1>
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-6 col-md-8 card border-0">
        <img src="brangkai.jpg" class="card-img-top custom-img-size" alt="Pengalaman 1">
        <div class="card-body text-center">
          <h5 class="card-title">Lomba Pembuatan Bingkai Bunga 2019</h5>
          <p class="card-text">Meraih juara 3 dalam lomba pembuatan bingkai bunga merupakan hasil dari proses belajar dan bertumbuh yang saya dapatkan di SMA Negeri Temanggung. Saya bersyukur atas kesempatan ini dan akan terus belajar untuk mengembangkan kemampuan saya.</p>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-8 card border-0">
        <img src="pramuka.jpg" class="card-img-top custom-img-size" alt="Pengalaman 2">
        <div class="card-body text-center">
          <h5 class="card-title">Lomba Pramuka 2018</h5>
          <p class="card-text">Pencapaian juara 1 lomba kumpul pramuka ini saya dedikasikan untuk seluruh generasi muda Indonesia. Marilah kita bersama-sama membangun bangsa dengan semangat Pramuka yang pantang menyerah dan selalu berkarya untuk kemajuan bangsa.</p>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-8 card border-0">
        <img src="mennari.jpg" class="card-img-top custom-img-size" alt="Pengalaman 3">
        <div class="card-body text-center">
          <h5 class="card-title">Lomba Menari 2018</h5>
          <p class="card-text">Meraih juara 2 lomba kumpul menari merupakan hasil dari proses belajar dan perkembangan diri saya selama mengikuti kegiatan menari. Saya bersyukur atas kesempatan ini dan akan terus berlatih untuk mencapai hasil yang lebih baik di masa depan.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="p-3">
      <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
          &copy; 2024 Nabila Putri.
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
          <a href="https://www.instagram.com/inbilaputrot.jpg01?igsh=dG9majBjdW04eWky">
            <img src="instagram.png" alt="Instagram">
          </a>
          <a href="http://www.linkedin.com/in/nabilaputri10" class="ms-3">
            <img src="linkedin.png" alt="LinkedIn">
          </a>
          <a href="https://github.com/nabilaputrioktaviani?tab=overview&from=2024-05-01&to=2024-05-15" class="ms-3">
            <img src="github.png" alt="GitHub">
          </a>
        </div>
      </div

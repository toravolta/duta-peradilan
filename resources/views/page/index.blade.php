@extends('layouts.base')

@section('content')
<section id="sec-1" class="py-3 animate__animated animate__fadeIn" style="background-image: url('./img/base-banner.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link active active-menu" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Information</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Webinar</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Gallery Area</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row mx-0">
        <div class="col-md-7 col-xs-12">
            <div class="row pt-5">
                <div class="col-12 col-md-9 offset-md-2 text-left">
                    <h1 class="font-weight-bold larger-font main-text">
                        Apakah Kamu Mahasiswa/i Hukum & Syariah yang...
                    </h1>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12 col-md-9 offset-md-2 text-left">
                    <ul style="list-style-type:none;" class="lead">
                        <li>
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                            <strong>Memiliki public speaking skills yang oke?</strong>
                        </li>
                        <li>
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                            <strong>Mengimpikan dunia peradilan yang semakin berintegritas?</strong>
                        </li>
                        <li>
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                            <strong>Tertarik untuk belajar dan mengasah skill dalam bidang kehakiman?</strong>
                        </li>
                    </ul>
                    <p class="lead"><strong>Jika jawabanmu "iya", maka ini adalah kesempatan emasmu untuk mengikuti</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-9 offset-md-2 text-left">
                    <h3 class="underline uOrange">Duta Peradilan Indonesia</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-9 offset-md-2 text-left">
                    <a class="btn btn-warning"><h3>DAFTAR SEKARANG</h3></a>
                </div>
            </div>
        </div>
        <div class="pt-1 col-md-5 hidden-xs-down text-left p-0">
            <img src='./img/inner-banner.png' class="img-fluid" />
        </div>
    </div>
</section>
<section id="sec-2" class="py-3 animate__animated animate__fadeIn" style="background-image: url('./img/base-section2.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="row py-4 mt-5">
        <div class="col-12 col-md-8 offset-md-2 text-center">
            <h1 class="underline uWhite">Tentang Duta Peradilan Indonesia</h1>
        </div>
    </div>
    <div>
        <div class="col-12 col-md-8 offset-md-2 text-center">
            <h4><b>Duta Peradilan Indonesia</b> adalah ajang pemilihan anak muda terbaik dengan background hukum sebagai Duta Peradilan. 
                Program ini yang diprakarsai oleh Mahkamah Agung. Seluruh rangkaian acara dapat diikuti GRATIS!</h4>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-12 col-md-8 offset-md-2 text-center">
            <h1>BENEFIT</h1>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 py-2 col-md-4 d-flex align-items-stretch">
                <div class="card mx-auto" style="width: 18rem; background-image: url('./img/benefit-1.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    <div class="card-body my-5">
                        <h5 class="card-title">Pembekalan di Jakarta selama 8 hari</h5>
                        <ul>
                            <li>Kunjungan ke Pengadilan</li>
                            <li>Sehari Bersama Ketua MA</li>
                            <li>Pembekalan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 py-2 col-md-4 d-flex align-items-stretch">
                <div class="card mx-auto" style="width: 18rem; background-image: url('./img/benefit-2.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    <div class="card-body my-5 text-center">
                        <h5 class="card-title my-5">Pengabdian selama 1 tahun</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 py-2 col-md-4 d-flex align-items-stretch">
                <div class="card mx-auto" style="width: 18rem; background-image: url('./img/benefit-3.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    <div class="card-body my-5 text-center">
                        <h5 class="card-title my-5">Mendapatkan materi E-Learning</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12 py-2 col-md-4 d-flex align-items-stretch">
                <div class="card mx-auto" style="width: 18rem; background-image: url('./img/benefit-5.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    <div class="card-body my-5 text-center">
                        <h5 class="card-title my-5">Video perjalanan ditayangkan di Vidio Series</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 py-2 col-md-4 d-flex align-items-stretch">
                <div class="card mx-auto" style="width: 18rem; background-image: url('./img/benefit-6.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    <div class="card-body my-5 text-center">
                        <h5 class="card-title my-5">Mengikuti Grand Final</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 py-2 col-md-4 d-flex align-items-stretch">
                <div class="card mx-auto" style="width: 18rem; background-image: url('./img/benefit-7.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                    <div class="card-body my-5 text-center">
                        <h5 class="card-title my-5">Pengukuhan Lencana Duta Peradilan Indonesia 2022 (Pelantikan)</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sec-3">
    <div class="row">
        <div class="col-12">
            <img src='./img/sec-3.png' class="img-fluid" />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 text-center">
            <a class="btn btn-warning"><h3>DAFTAR SEKARANG</h3></a>
        </div>
    </div>
</section>
<section id="sec-4">
    <div class="container py-5">
        <div class="row mt-5">
            <div class="col-12 col-md-8 offset-md-2">
                <table class="mx-auto text-center">
                    <tr>
                        <td class="paddingTable1"><h1 class="display-2 underline uOrange"><b>00</b></h1></td>
                        <td class="paddingTable1"><h1 class="display-2 underline uOrange"><b>00</b></h1></td>
                        <td class="paddingTable1"><h1 class="display-2 underline uOrange"><b>00</b></h1></td>
                    </tr>
                    <tr>
                        <td class="paddingTable1"><h1><b>HARI</b></h1></td>
                        <td class="paddingTable1"><h1><b>JAM</b></h1></td>
                        <td class="paddingTable1"><h1><b>MENIT</b></h1></td>
                    </tr>
                </table>
                <h3 class="text-center mt-3">Countdown Pendaftaran</h3>
            </div>
        </div>
    </div>
</section>
<section id="sec-5">
    <div class="row py-4 mt-5">
        <div class="col-12 col-md-8 offset-md-2 text-center">
            <h1>SYARAT & KETENTUAN</h1>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-6 py-2 col-md-3 text-center">
                <img src='./img/tnc-1.png' class="img-fluid" />
                <h5>Warga Negara Indonesia (WNI)</h5>
            </div>
            <div class="col-6 py-2 col-md-3 text-center">
                <img src='./img/tnc-2.png' class="img-fluid" />
                <h5>Usia 18-24 tahun saat mendaftar</h5>
            </div>
            <div class="col-6 py-2 col-md-3 text-center">
                <img src='./img/tnc-3.png' class="img-fluid" />
                <h5>Mahasiswa/mahasiswi jurusan hukum; Lulusan jurusan hukum</h5>
            </div>
            <div class="col-6 py-2 col-md-3 text-center">
                <img src='./img/tnc-4.png' class="img-fluid" />
                <h5>Jika terpilih, bersedia mengikuti Audisi Offline, Pembekalan, Pelantikan dan Pengabdian</h5>
            </div>
        </div>
    </div>
</section>
<section id="sec-6">
    <div class="row py-4 mt-5">
        <div class="col-12 col-md-8 offset-md-2 text-center">
            <h1>GALERY AREA</h1>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 py-2 col-md-4 text-center">
                <img src='./img/galery-1.png' class="img-fluid" style="height: 75%;width: 75%;"/>
                <h4 class="mt-2">Fajar Abdi Negara</h4>
                <h5>20 tahun <br> Hukum - Universitas Indonesia</h5>
            </div>
            <div class="col-12 py-2 col-md-4 text-center">
                <img src='./img/galery-2.png' class="img-fluid" style="height: 75%;width: 75%;"/>
                <h4 class="mt-2">Cintia Purnama</h4>
                <h5>24 tahun <br> Hukum - Universitas Tarumanegara</h5>
            </div>
            <div class="col-12 py-2 col-md-4 text-center">
                <img src='./img/galery-3.png' class="img-fluid" style="height: 75%;width: 75%;" />
                <h4 class="mt-2">Bilqis Atha</h4>
                <h5>18 tahun <br> Hukum - Universitas Mulawarman</h5>
            </div>
        </div>
    </div>
</section>
<section id="sec-7">
    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <h1>2 LANGKAH MUDAH MENDAFTAR DUTA PERADILAN INDONESIA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4 col-12 text-center">
                <span class="badge bg-warning text-black"><h4>1. Membuat Akun</h4></span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 py-2 col-md-5 text-center">
                <h4 class="mt-2">1. Klik button [Daftar]</h4>
                <img src='./img/login-sec-7.png' class="img-fluid" style="height: 75%;width: 75%;"/>
            </div>
            <div class="col-12 py-2 col-md-7 text-center">
                <h4 class="mt-2">2. Lengkapi Data dan Klik “Registrasi”</h4>
                <img src='./img/form-sec-7.png' class="img-fluid" style="height: 75%;width: 75%;"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4 col-12 text-center">
                <span class="badge bg-warning text-black"><h4>2. Mengisi Formulir</h4></span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 py-2 col-md-5 text-center">
                <h4 class="mt-2">1. Masukkan Email dan Password, lalu Klik [Masuk]</h4>
                <img src='./img/login-sec-7.png' class="img-fluid" style="height: 75%;width: 75%;"/>
            </div>
            <div class="col-12 py-2 col-md-7 text-center">
                <h4 class="mt-2">2. Klik [Pendaftaran] pada Duta Peradilan Indonesia</h4>
                <img src='./img/pendaftaran-sec-7.png' class="img-fluid"/>
            </div>
        </div>
    </div>
</section>
<section id="sec-8">
    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <h1>RANGKAIAN KEGIATAN DUTA PERADILAN INDONESIA</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 py-2 col-md-12 text-center d-none d-md-block">
                <img src='./img/allin-sec-8.png' class="img-fluid" style="height: 85%;width: 75%;"/>
            </div>

            <div class="col-12 text-center d-sm-block d-md-none">
                <img src='./img/flow-1-sec-8.png' class="img-fluid"/>
            </div>
            <div class="col-12 text-center d-sm-block d-md-none">
                <img src='./img/flow-2-sec-8.png' class="img-fluid"/>
            </div>
            <div class="col-12 text-center d-sm-block d-md-none">
                <img src='./img/flow-3-sec-8.png' class="img-fluid"/>
            </div>
            <div class="col-12 text-center d-sm-block d-md-none">
                <img src='./img/flow-6-sec-8.png' class="img-fluid"/>
            </div>
            <div class="col-12 text-center d-sm-block d-md-none">
                <img src='./img/flow-5-sec-8.png' class="img-fluid"/>
            </div>
            <div class="col-12 text-center d-sm-block d-md-none">
                <img src='./img/flow-4-sec-8.png' class="img-fluid"/>
            </div>
        </div>
    </div>
</section>
<section id="sec-9">
    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <h1>FREQUENTLY ASKED QUESTION</h1>
            </div>
        </div>
        <div class="row mt-3 py-4">
            <div class="col-md-8 offset-md-2 col-12 accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <b>Program ini berbayar?</b>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="text-indent: 30px;">
                            Seluruh rangkaian program Duta Peradilan Indonesia dapat diikuti secara gratis
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <b>Saya sudah lulus kuliah. Usia saya saat ini 23 tahun. Apakah boleh mendaftar?</b>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="text-indent: 30px;">
                            Deskripsi
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <b>Kapan dan lewat apa pengumumannya nanti?</b>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="text-indent: 30px;">
                            Deskripsi
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sec-10">
    <div class="row mt-5">
        <div class="col-12">
            <img src='./img/sec-3.png' class="img-fluid" />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 text-center">
            <a class="btn btn-warning"><h3>DAFTAR SEKARANG</h3></a>
        </div>
    </div>
</section>
<section id="sec-11">
    <div class="container py-5">
        <div class="row mt-5">
            <div class="col-12 col-md-8 offset-md-2">
                <table class="mx-auto text-center">
                    <tr>
                        <td class="paddingTable1"><h1 class="display-2 underline uOrange"><b>00</b></h1></td>
                        <td class="paddingTable1"><h1 class="display-2 underline uOrange"><b>00</b></h1></td>
                        <td class="paddingTable1"><h1 class="display-2 underline uOrange"><b>00</b></h1></td>
                    </tr>
                    <tr>
                        <td class="paddingTable1"><h1><b>HARI</b></h1></td>
                        <td class="paddingTable1"><h1><b>JAM</b></h1></td>
                        <td class="paddingTable1"><h1><b>MENIT</b></h1></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<section id="sec-12" style="background-color: #FDDE20;">
    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col-12 col-md-8 offset-md-2 text-center mt-5">
                <h1>KICKOFF DUTA PERADILAN INDONESIA 2022</h1>
                <h3>“Duta Peradilan Untuk Indonesia”</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/duta-1-sec-12.png' class="img-fluid"/>
                <h4 class="mt-2">Yasonna Laoly</h4>
                <h5>Menteri Hukum dan Hak Asasi Manusia</h5>
            </div>
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/duta-2-sec-12.png' class="img-fluid"/>
                <h4 class="mt-2">Prof. Dr. H.M Syarifuddin, S.H., M.H</h4>
                <h5>Ketua Mahkamah Agung</h5>
            </div>
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/duta-3-sec-12.png' class="img-fluid"/>
                <h4 class="mt-2">Mahfud MD</h4>
                <h5>Politisi, Akademisi dan Hakim;<br>
                    Menteri Koordinator Bidang Politik,<br>
                    Hukum, dan Keamanan</h5>
            </div>
        </div>
    </div>
</section>
<section id="sec-13">
    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col-12 col-md-8 offset-md-2 text-center mt-5">
                <h1>SOSIALISASI DUTA PERADILAN INDONESIA 2022</h1>
                <h3 style="background-color: #FDDE20;">HAKIM UNTUK PILIHAN KARIR MASA DEPAN</h3>
                <p class="lead mt-5 pt-5">Setelah lulus dari Fakultas Hukum pastinya banyak pertimbangan dan persiapan saat menentukan karier selanjutnya. Pelajari Lebih Lanjut Tips & Trick
                Mempersiapkan Karir Bersama</p>
                <div class="mt-5 pt-5" style="border-top: #FDDE20 solid 10px;">
                    <h3>Pengisi Materi</h3>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/speaker-1-sec-13.png' class="img-fluid"/>
                <h4 class="mt-2">Kieky Cahya</h4>
                <h5>Host</h5>
            </div>
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/speaker-2-sec-13.png' class="img-fluid"/>
                <h4 class="mt-2">Dr. Riki Perdana Raya Waruwum SH MH</h4>
                <h5>Hakim Yustisial Pada Biro Hukum & Humas MA</h5>
            </div>
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/speaker-3-sec-13.png' class="img-fluid"/>
                <h4 class="mt-2">Mikha Tambayong, SH</h4>
                <h5>Aktris</h5>
            </div>
        </div>
    </div>
</section>
<section id="sec-14">
    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col-12 col-md-8 offset-md-2 text-center mt-5">
                <h1>ROADSHOW SELEKSI</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center py-5">
                <img src='./img/roadshow-sec-14.png' class="img-fluid"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-8 offset-md-2 text-center py-5">
                <p class="lead">Proses lanjutan untuk mengumpulkan peserta audisi online terpilih ke kota terdekat untuk melakukan penjurian secara langsung sehingga terpilih 10 finalis 
                    yang akan maju ke tahap pembekalan</p>
                <p class="lead">Rangkaian roadshow seleksi berlangsung selama bulan <b>Juni 2022</b></p>
                <p class="lead">Kota yang akan dikunjungi adalah <b>Medan, DKI Jakarta, Bandung, Surabaya, Yogyakarta, Bali, Makassar, Pontianak.</b></p>
            </div>
        </div>
    </div>
</section>
<section id="sec-15" style="background-color: #FDDE20;">
    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col-12 col-md-8 offset-md-2 text-center mt-5">
                <h1>MENTOR DUTA PERADILAN INDONESIA 2022</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/mentor-1-sec-15.png' class="img-fluid"/>
                <h4 class="mt-2">Mahkamah Agung</h4>
                <h5>Mentor #1</h5>
            </div>
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/mentor-1-sec-15.png' class="img-fluid"/>
                <h4 class="mt-2">Mahkamah Agung</h4>
                <h5>Mentor #2</h5>
            </div>
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/mentor-2-sec-15.png' class="img-fluid"/>
                <h4 class="mt-2">Rr. Ayu Maulida Putri, S.H</h4>
                <h5>Publik Figure/Puteri Indonesia 2020/<br> Miss Universe Indonesia 2020</h5>
            </div>
        </div>
    </div>
</section>
<section id="sec-15">
    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col-12 col-md-8 offset-md-2 text-center mt-5">
                <h1>DEWAN JURI <br>DUTA PERADILAN INDONESIA 2022</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/mentor-1-sec-15.png' class="img-fluid"/>
                <h4 class="mt-2">Juri Dari Mahkamah Agung</h4>
            </div>
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/juri-1-sec-16.png' class="img-fluid"/>
                <h4 class="mt-2">Irna Gustiawati</h4>
                <h5>Pemred Liputan6</h5>
            </div>
            <div class="col-12 col-md-4 text-center py-5">
                <img src='./img/juri-2-sec-16.png' class="img-fluid"/>
                <h4 class="mt-2">Nikita Willy, S.H</h4>
                <h5>Publik Figure</h5>
            </div>
        </div>
    </div>
</section>
<section id="sec-16">
    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col-12 col-md-8 offset-md-2 text-center mt-5">
                <h1>MEDIA PARTNER</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6 col-md-4 text-center">
                <img src='./img/media-1.png' class="img-fluid"/>
            </div>
            <div class="col-6 col-md-4 text-center">
                <img src='./img/media-2.png' class="img-fluid"/>
            </div>
            <div class="col-6 col-md-4 text-center">
                <img src='./img/media-3.png' class="img-fluid"/>
            </div>
            <div class="col-6 col-md-4 text-center">
                <img src='./img/media-4.png' class="img-fluid"/>
            </div>
            <div class="col-6 col-md-4 text-center">
                <img src='./img/media-5.png' class="img-fluid"/>
            </div>
            <div class="col-6 col-md-4 text-center">
                <img src='./img/media-6.png' class="img-fluid"/>
            </div>
            <div class="col-6 col-md-4 text-center">
                <img src='./img/media-7.png' class="img-fluid"/>
            </div>
            <div class="col-6 col-md-4 text-center">
                <img src='./img/media-8.png' class="img-fluid"/>
            </div>
            <div class="col-6 col-md-4 text-center">
                <img src='./img/media-9.png' class="img-fluid"/>
            </div>
        </div>
    </div>
</section>
<section id="sec-17" style="background-color: #F4F4F4;">
    <div class="container">
        <div class="row py-4 mt-5">
            <div class="col-12 col-md-8 offset-md-2 text-center mt-5">
                <h1>Get Weekly Updates</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-4 text-left py-3">
                <h2>
                    Duta<br>Peradilan<br>Indonesia 2022
                </h2>
                <p class="mt-4">
                    <a href="#" target="_blank"><i class="fa-brands fa-instagram-square fa-2xl"></i></a>
                    <a href="#" target="_blank" class="mr-2"><i class="fa-solid fa-globe fa-2xl"></i></a>
                    <a href="#" target="_blank" class="mr-2"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    <a href="#" target="_blank" class="mr-2"><i class="fa-brands fa-whatsapp fa-2xl"></i></a>
                    <a href="#" target="_blank"><i class="fa-solid fa-envelope fa-2xl"></i></a>
                </p>
            </div>
            <div class="col-12 col-md-4 text-center py-3">
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <button class="btn btn-warning"><h4>SUBSCRIBE</h4></button>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center py-3">
                <h2>
                    Useful Links
                </h2>
                <p class="mt-3">
                    <a href="#" target="_blank" class="mr-2 plainLink">About</a>
                </p>
                <p class="mt-2">
                    <a href="#" target="_blank" class="mr-2 plainLink">Webinar</a>
                </p>
                <p class="mt-2">
                    <a href="#" target="_blank" class="mr-2 plainLink">E-learning</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('register-stylecode')
<link href="{{asset('/css/fontawesome-free-6.1.1-web/css/fontawesome.css')}}" rel="stylesheet">
<link href="{{asset('/css/fontawesome-free-6.1.1-web/css/brands.css')}}" rel="stylesheet">
<link href="{{asset('/css/fontawesome-free-6.1.1-web/css/solid.css')}}" rel="stylesheet">
<style>
    .form-check-input:checked {
        background-color: #77C80E !important;
        border-color: #77C80E !important;
    }

    .underline {
        text-decoration: underline;
    }

    .uOrange {
        -webkit-text-decoration-color: orange; /* Safari */  
        text-decoration-color: orange;
    }

    .uWhite {
        -webkit-text-decoration-color: white; /* Safari */  
        text-decoration-color: white;
    }

    .paddingTable1 {
        padding: 0px 15px 0px 15px;
    }

    .plainLink {
        color: black;
        text-decoration: none;
    }

    .active-menu{
        background-color: #FDDE20;
        border-radius: 10px;
    }

</style>
@endsection

@section('register-scriptcode')
<script>
    var thisDate = new Date();
    var currentMonth = thisDate.toLocaleString('en-us', { month: 'short' });
    var currentYear = thisDate.getFullYear();
    var currentDate = thisDate.getDate();

    var completeCurrentDate = currentMonth + " " + currentDate + ", "+currentYear;

    // Set the date we're counting down to
    var countDownDate = new Date(completeCurrentDate +" 23:59:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
        
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
        
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = hours + " Hours : "
    + minutes + " Minutes : " + seconds + " Seconds ";

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
    }, 1000);
</script>
@endsection
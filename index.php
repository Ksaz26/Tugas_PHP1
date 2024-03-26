<?php 
$nama="Salman Alfariz";
$skill="Fullstack & Web Developmen";
$kampus="Universitas Banten Jaya";
$jurusan="Teknik Informatika";
$email="salmanalfariz002@gmail.com";
$nohp="089630695451";
$jekel="laki-laki";
$alamat="Kota Serang";
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Three Dot Menu</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <link rel="stylesheet" type="text/css" href="CSS/style.css">
            <link href="CSS/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>

            <div class="header">


                <div class="dropdown">

                    <ul class="dropbtn icons btn-right showLeft" onclick="showDropdown()">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                    <div id="myDropdown" class="dropdown-content">
                        <a href="">Home</a>
                        <a href="">About</a>
                        <a href="">Contact</a>
                    </div>
                </div>

            </div>
            <!-- Batas Navbar -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                              <div class="flip-box-front">
                                <img src="IMG/IMG20221117163150-removebg-preview.png" alt="Paris" style="width:290px;height:300px">
                                <p>ABOUT ME</p>
                              </div>
                              <div class="flip-box-back">
                                <h2 style="margin-top: 35%;"><?= $nama ?></h2>
                                <p><?= $skill ?></p>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-8">
                        <article style="margin-top: 0%;">
                            <div class="transbox">
                            <h3 style="color: white; margin: 5%;">Career Goal</h3>
                            <p style="color: white;">
                                Tujuan karier saya adalah menjadi seorang Full Stack Developer yang ahli dengan penguasaan teknologi front-end dan back-end, 
                                serta mampu mengembangkan proyek-proyek web yang inovatif dan relevan dengan kebutuhan pasar. 
                                Saya bertekad untuk terus memperdalam pemahaman saya tentang konsep-konsep fundamental dalam pengembangan web, seperti arsitektur aplikasi dan desain responsif, 
                                sambil tetap mengikuti perkembangan terbaru dalam industri. Dengan fokus pada pembelajaran berkelanjutan, kolaborasi tim, dan kontribusi yang berarti dalam proyek kolaboratif, 
                                saya yakin saya dapat mencapai kesuksesan dan membangun karier yang memuaskan di bidang pengembangan web.
                            </p>
                            </div>
                            <div class="transbox">
                                <h3 style="color: white; margin: 5%;">Biodata</h3>
                                <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                    <p>Nama : <?= $nama ?> </p> 
                                    <p>Jurusan : <?= $jurusan ?> </p> 
                                    <p>Kampus : <?= $kampus ?> </p> 
                                    <p>jenis Kelamin : <?= $jekel ?></p>
                                    </div>
                                    <div class="col-md-6">
                                    <p>Skill : <?= $skill ?> </p>
                                    <p>No hp : <?= $nohp ?> </p>
                                    <p>Email : <?= $email ?> </p>
                                    <p>alamat : <?= $alamat ?></p>
                                    </div>
                                </div>
                                </div>
                                </div>
                          </article>
                    </div>
                </div>
            </div>

            <script src="JS/scripts.js"></script>
            <script src="JS/jquery.min.js"></script>
            <script src="JS/bootstrap.min.js"></script>
        </body>
    </html>
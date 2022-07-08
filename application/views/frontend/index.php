
    <!-- Start Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <marquee>
            <div class="container">
                <h1 class="text-center">Seputar Kota Depok - SEKODE</h1>
            </div>
        </marquee>
    </div>

    <!-- Start Main -->
    <div class="container">
        <h2 class="text-center" style="font-weight: bold; color:white;">Wisata Rekreasi & Kuliner Unggulan Kota Depok</h2>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center">Depok Fantasy</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url('assets/img/depok_fantasy.jpg');?>" alt="image" width="100%">
                        </div>

                        <div class="deskripsi">
                            <p class="pt-2 text-center font-weight-bold">Salah satu pusat perbelanjaan yang juga menjadi
                                icon kota Depok.</p>
                            <a href="<?php echo site_url('beranda/depok_fantasy'); ?>" class="btn btn-primary col-md-12">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center">Taman Herbal Insani</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url('assets/img/foto/herbalinsani.jpg');?>" alt="image" width="100%">
                        </div>

                        <div class="deskripsi">
                            <p class="pt-2 text-center font-weight-bold">Tempat wisata favorit untuk menikmati alam
                                sembari belajar tanaman obat.</p>
                            <a href="<?php echo site_url('beranda/taman_herbal_insani'); ?>" class="btn btn-primary col-md-12">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center">Saung Talaga</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url('assets/img/saungtalaga.jpg');?>" alt="image" width="100%">
                        </div>

                        <div class="deskripsi">
                            <p class="pt-2 text-center font-weight-bold">Tempat kuliner yang memiliki nuansa alam, di
                                atas air.</p>
                            <a href="<?php echo site_url('beranda/saung_talaga'); ?>" class="btn btn-primary col-md-12">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Footer -->
    <footer class="footer bg-primary">
        <div class="container text-center">
            <span class="text-white font-weight-bold">CopyRight By Mahasiswa @STT-NF 2021</span>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
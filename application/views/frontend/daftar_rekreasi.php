
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
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-end">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item">Daftar</li>
                      <li class="breadcrumb-item active" aria-current="page">Daftar Wisata Rekreasi</li>
                    </ol>
                  </nav>
                <form action="#">
                    <fieldset class="form-daftar-seminar" style="color: white;">
                        <legend class="legend-daftar-seminar mb-md-4">Form Registrasi Tempat Wisata Rekreasi</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Tempat Wisata :&nbsp;</label>
                                    <input type="text" id="tmpt_wisata" class="form-control" placeholder="Masukkan nama tempat wisata">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Wisata :&nbsp;</label>
                                    <select id="jenis_wisata" class="form-control">
                                        <option>Pilih jenis wisata</option>
                                        <option>Rumah Makan Tradisional</option>
                                        <option>Makanan Luar Negeri</option>
                                        <option>Kue</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi Wisata :&nbsp; </label>
                                    <textarea name="" id="deskripsi_wisata" class="form-control" rows="3" placeholder="Masukkan deskripsi wisata"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kontak Person :&nbsp;</label>
                                    <input type="text" id="kontak_person" class="form-control" placeholder="Masukkan kontak person">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. HP/ Telpon :&nbsp;</label>
                                    <input type="number" id="no_hp" class="form-control" placeholder="Masukkan No HP">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Email :&nbsp;</label>
                                    <input type="email" id="email" class="form-control" placeholder="Masukkan Email dengan benar">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat Web :&nbsp;</label>
                                    <input type="text" id="alamat_web" class="form-control" placeholder="http://">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat Lengkap :&nbsp;</label>
                                    <input type="text" id="alamat_lengkap" class="form-control" placeholder="Masukkan alamat lengkap">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Latitude :&nbsp;</label>
                                    <input type="text" id="latitude" class="form-control" placeholder="-6.3141177917730165">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Longitude :&nbsp;</label>
                                    <input type="text" id="longitude" class="form-control" placeholder="106.88425734519498">
                                </div>
                            </div>
                            <div class="col-md-8 mt-2 mb-3">
                                <div class="form-group">
                                    <label>Upload Foto :</label><br>
                                    <input type="file" id="foto" >
                                    <br>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" onclick="return daftar()">Daftar</button>
                        <button class="btn btn-secondary">Batal</button>
                    </fieldset>
                </form>
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

    <script>
        function daftar() {
            let tmpt_wisata = document.getElementById("tmpt_wisata").value;
            let jenis_wisata = document.getElementById("jenis_wisata").value;
            let deskripsi_wisata = document.getElementById("deskripsi_wisata").value;
            let kontak_person = document.getElementById("kontak_person").value;
            let no_hp = document.getElementById("no_hp").value;
            let email = document.getElementById("email").value;
            let alamat_web = document.getElementById("alamat_web").value;
            let alamat_lengkap = document.getElementById("alamat_lengkap").value;
            let latitude = document.getElementById("latitude").value;
            let longitude = document.getElementById("longitude").value;
            let foto = document.getElementById("foto").value;

            if (tmpt_wisata == "" || jenis_wisata == "" || deskripsi_wisata == "" || kontak_person == "" || no_hp == "" || email == "" || alamat_web == "" || alamat_lengkap == "" || latitude == "" || longitude == "" || foto == "") {
                alert("Lengkapi keseluruhan data terlebih dahulu");

                return true;
            }

            else {
                alert("Berhasil mendaftar wisata rekreasi");
                window.location = "admin_rekreasi.html"

                return false;
            }
        }
    </script>
</body>

</html>
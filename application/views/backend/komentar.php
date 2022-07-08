

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
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Komentar</li>
                        <li class="breadcrumb-item" aria-current="page">Komentar Wisata Kuliner</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header">
                        <span class="h4">Kelola Data Komentar Kuliner</span>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="display table table-responsive" width="100%" style="display:inline-table;">
                            <thead class="text-center">
                                <tr class="bg-primary text-white">
                                    <th width="10">No. </th>
                                    <th>Nama</th>
                                    <th>Upload Foto</th>
                                    <th>Komentar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center text-dark">
                                <tr>
                                    <td>1</td>
                                    <td>Nadya</td>
                                    <td>
                                        <a href="<?= base_url('assets/img/img/t no.2.jpeg');?>">
                                            <img src="<?= base_url('assets/img/img/t no.2.jpeg');?>" style="width: 35px; height:35px;object-fit: cover;">
                                        </a>
                                    </td>
                                    <td>Saya makan berdua dengan pasangan saya dan dilayani dengan baik oleh pegawainya saya sangat suka dekorasi tempat makannya terlebihhh pada danauya jadi terkesan sangat sejuk.</td>
                                    <td>
                                        <a href="">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Nadya</td>
                                    <td>
                                        <a href="<?= base_url('assets/img/img/t no.2.jpeg');?>">
                                            <img src="<?= base_url('assets/img/img/t no.2.jpeg');?>" style="width: 35px; height:35px;object-fit: cover;">
                                        </a>
                                    </td>
                                    <td>Saya makan berdua dengan pasangan saya dan dilayani dengan baik oleh pegawainya saya sangat suka dekorasi tempat makannya terlebihhh pada danauya jadi terkesan sangat sejuk.</td>
                                    <td>
                                        <a href="">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Nadya</td>
                                    <td>
                                        <a href="<?= base_url('assets/img/img/t no.2.jpeg');?>">
                                            <img src="<?= base_url('assets/img/img/t no.2.jpeg');?>" style="width: 35px; height:35px;object-fit: cover;">
                                        </a>
                                    </td>
                                    <td>Saya makan berdua dengan pasangan saya dan dilayani dengan baik oleh pegawainya saya sangat suka dekorasi tempat makannya terlebihhh pada danauya jadi terkesan sangat sejuk.</td>
                                    <td>
                                        <a href="">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js');?>"></script>
    <script src="<?= base_url('assets/js/jquery.dataTables.js');?>"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>
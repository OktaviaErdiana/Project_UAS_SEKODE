
<body style="background-repeat: no-repeat; background-size: cover;" background="<?= base_url('assets/img/bg1.jpg');?>">
    <div class="mt-5">
        <!-- Start Main -->
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white"><b>LOGIN</b></div>
                        <div class="card-body">
                            <form action="<?= site_url('Login/aksi_login');?>" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan username anda">
                                </div>
                                <div class="form-group">
                                    <label >Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan password anda">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="text-center pt-2">
                        Belum mempunyai akun? <a href="">Daftar</a>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Start Footer -->
        <footer class="footer bg-transparent">
            <div class="container text-center">
                <span class="text-white font-weight-bold">CopyRight By Mahasiswa @STT-NF 2021</span>
            </div>
        </footer>
    </div>

    <?php if ($this->session->flashdata('login-gagal')) { ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Username atau Password salah!',
            })
        </script>       <?php } ?>
    }
    
</body>

</html>
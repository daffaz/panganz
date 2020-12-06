<style>
    .navbar-brand {
        font-family: "Lora", serif;
    }

    .nav-item>.nav-link {
        font-family: "Merriweather", serif;
        color: black;
    }

    .heading {
        font-family: "Lora", serif;
    }

    .badan {
        font-family: "Merriweather", serif;
        letter-spacing: 2px;
    }

    .text-hijau {
        color: #216869;
    }

    .text-kuning {
        color: #ffc700;
    }

    .btn-hijau {
        background-color: #216869;
        color: white;
    }

    .btn-kuning {
        background-color: #ffc700;
        color: white;
    }

    .btn-hijau:hover {
        background-color: rgb(24, 74, 75);
        color: white;
    }

    .btn-kuning:hover {
        background-color: #b48f09;
        color: white;
    }

    .bg-hijau {
        background-color: #216869;
    }

    li {
        list-style: none;
        padding: 0;
        margin: 0;
        font-weight: bold;
        margin-bottom: 5px;
    }

    a {
        color: white;
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
        color: white;
    }

    #bagian-utama-footer {
        padding: 25px 0;
        background-color: #1f2421;
    }

    .jumbotron {
        background-color: #216869;
    }

    @media (min-width: 1200px) {
        .baris-1-kolom-1-footer {
            margin-left: -35px;
        }

        .baris-1-kolom-2 p {
            font-size: 12px;
        }

        .garis {
            border-left: 2px solid white;
            height: 84px;
        }
    }
</style>

<section class="form-registrasi" style="margin-top: 20vh;height:80vh">
    <div class="container ">
        <form>
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="form-group ">
                        <label for="nama-depan ">Nama depan</label>
                        <input type="text " class="form-control " id="nama-depan " placeholder="Masukkan nama depan kamu " required>
                    </div>
                    <div class="form-group ">
                        <label for="nama-belakang ">Nama belakang</label>
                        <input type="text " class="form-control " id="nama-belakang " placeholder="Masukkan nama belakang kamu " required>
                    </div>
                    <div class="form-group ">
                        <label for="email ">Email address</label>
                        <input type="email " class="form-control " id="email " placeholder="Masukkan email kamu " required>
                    </div>
                    <div class="form-group ">
                        <label for="nomor-telepon ">Nomor telepon</label>
                        <input type="text " class="form-control " id="nomor-telepon " placeholder="Masukkan nomor telepon kamu " required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url('src/img/form.svg') ?>" alt="" style="width:96%;">
                </div>

                <div class="btn rounded-pill ml-4 pr-5 pl-5 font-weight-bold text-white" style="background-color:#216869;" data-toggle="modal" data-target="#exampleModalCenter">Daftar</div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mx-auto" id="exampleModalLongTitle">Selamat, registrasi mu telah berhasil</h5>
                            </div>
                            <div class="modal-body text-center">
                                <i class="fas fa-check-circle text-success d-block" style="font-size: 10rem;"></i>
                                <h1 class="mt-4 font-weight-bold text-success">Registrasi berhasil</h1>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-block btn-success" data-dismiss="modal">Terima kasih</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
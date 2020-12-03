<style>
    .breadcrumb-item {
        font-weight: bold;
    }

    .breadcrumb-item a {
        color: #216869;
        text-decoration: none;
        font-weight: bold;
    }

    .breadcrumb-item a:hover {
        text-decoration: none;
        color: black;
    }

    body,
    html {
        overflow-x: hidden;
    }

    .card-text a {
        text-decoration: none;
        color: #216869;
    }

    .card-text a:hover {
        text-decoration: none;
        color: black;
    }

    .card {
        border: 0;
        padding-bottom: 50px;
    }

    .card-body {
        margin-left: -20px;
        padding-right: 0;
    }
</style>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5 text-center">
                <h2 class="heading">Artikel terkini</h2>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="row">
            <div class="col-lg-12 ml-n3 mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/artikel">Artikel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Terkini</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Akhir breadcrumb -->


        <!-- Cards -->

        <div class="row">
            <!-- First Card -->
            <div class="col-lg-4">
                <div class="card-deck">

                    <div class="card">

                        <img class="card-img-top img-fluid" src="<?= base_url('src/img/artikel/img1.png') ?>" alt="Card image cap">

                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-justify">This is a longer card with supporting text below as a natural lead-in to additional content.
                                <a href="#">
                                    <strong> Baca selengkapnya</strong>
                                </a>
                            </p>


                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Card -->
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?= base_url('src/img/artikel/img2.png') ?>" alt="Card image cap">
                        <div class="card-body ">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-justify">This is a longer card with supporting text below as a natural lead-in to additional content.
                                <a href="#">
                                    <strong> Baca selengkapnya</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Card -->
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?= base_url('src/img/artikel/img1.png') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-justify">This is a longer card with supporting text below as a natural lead-in to additional content.
                                <a href="#">
                                    <strong> Baca selengkapnya</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- First Card -->
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?= base_url('src/img/artikel/img1.png') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-justify">This is a longer card with supporting text below as a natural lead-in to additional content.
                                <a href="#">
                                    <strong> Baca selengkapnya</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Card -->
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?= base_url('src/img/artikel/img2.png') ?>" alt="Card image cap">
                        <div class="card-body ">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-justify">This is a longer card with supporting text below as a natural lead-in to additional content.
                                <a href="#">
                                    <strong> Baca selengkapnya</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Card -->
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?= base_url('src/img/artikel/img1.png') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-justify">This is a longer card with supporting text below as a natural lead-in to additional content.
                                <a href="#">
                                    <strong> Baca selengkapnya</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Akhir Cards -->
    </div>
</section>
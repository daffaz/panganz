<style>
    .btn-link {
        color: black;
        text-decoration: none;
    }

    .btn {
        width: 100%;
        text-align: left;
    }

    .card {
        border: 1px solid #c0c0c0;
    }
</style>

<section class="bantuan mt-5 mb-5">
    <div class="container">
        <div class="row">

            <img class="img-fluid mx-auto mt-5" src="<?= base_url('src/img/bantuan/bantuan.svg') ?>" alt="" style="height: 40%;width:40%">

        </div>
        <div class="row ">
            <h1 class="mt-5 heading mx-auto">Butuh bantuan? </h1>
        </div>

        <div class="row">
            <h3 class="mt-5 faq-text">Frequently Asked Questions (FAQ's)</h3>
        </div>

        <div class="min-vh-100">
            <div class="container py-3">
                <div class="row">
                    <div class="col-6" style="margin-left:-30px;">
                        <div class="accordion " id="faqExample">
                            <div class="card">
                                <div class="card-header bg-transparent  p-2" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How does this work?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                                    <div class="card-body">
                                        <b>Answer:</b> It works using the Bootstrap 4 collapse component with cards to make a vertical accordion that expands and collapses as questions are toggled.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-6">
                        <div class="accordion " id="faqExample">
                            <div class="card">
                                <div class="card-header bg-transparent  p-2" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            How does this work?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#faqExample">
                                    <div class="card-body">
                                        <b>Answer:</b> It works using the Bootstrap 4 collapse component with cards to make a vertical accordion that expands and collapses as questions are toggled.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
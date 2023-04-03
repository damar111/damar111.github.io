<?php
$title = "Contact Us";
$detail = "-";
$page = "contact";
$data = QB::table('contact_us')->get();
require_once __DIR__ . './../layout/header.php';
foreach ($data as $r) :
?>

    <div class="bg-contact">
        <div class="container">
            <div class="row">
                <div class="col header-sec">
                    <h2 class="text-center" data-aos="zoom-out" data-aos-delay="150" data-aos-duration="1000">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-11 page-title">
                <h2 class="mb-4 text-center" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">Location</h2>
                <hr data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="mapouter">
                        <div class="gmap_canvas gmap_canvas-contact">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="<?= $r->gmap; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2 d-flex justify-content-center">
            <div class="col-11 page-title">
                <h2 class="mb-4 text-center" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">Contact</h2>
                <hr data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card shadow" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fs-5 text-center">Address</li>
                        <li class="list-group-item p-3 pb-4 text-center" style="height: 100px;"><?= $r->alamat; ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fs-5 text-center">Email</li>
                        <li class="list-group-item p-3 pb-4 text-center" style="height: 100px;"><?= $r->email; ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fs-5 text-center">Phone</li>
                        <li class="list-group-item p-3 pb-4 text-center" style="height: 100px;"><?= $r->telepon; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php
endforeach;
require_once __DIR__ . './../layout/footer.php';
?>